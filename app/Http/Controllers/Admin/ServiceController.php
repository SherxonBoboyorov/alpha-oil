<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateService;
use App\Http\Requests\Admin\UpdateService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateService  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateService $request)
    {
        $data = $request->all();
        $data['image'] = Service::uploadImage($request);
        if (Service::create($data)) {
            return redirect()->route('service.index')->with('message', 'Service created successfully');
        }
        return redirect()->route('service.index')->with('message', 'Unable to created Service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateService  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateService $request, $id)
    {
        if (!Service::find($id)) {
            return redirect()->route('service.index')->with('message', "service not fount");
        }

        $service = Service::find($id);

        $data = $request->all();
        $data['image'] = Service::updateImage($request, $service);


        if ($service->update($data)) {
            return redirect()->route('service.index')->with('message', "Service changed successfully");
        }
        return redirect()->route('service.index')->with('message', "Unable to update Service");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Service::find($id)) {
            return redirect()->route('service.index')->with('message', "Service not found");
        }

        $service = Service::find($id);

        if (File::exists(public_path() . $service->image)) {
            File::delete(public_path() . $service->image);
        }

        if ($service->delete()) {
            return redirect()->route('service.index')->with('message', "Service deleted successfully");
        }
        return redirect()->route('service.index')->with('message', "unable to delete Service");
    }
}
