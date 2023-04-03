<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCooperation;
use App\Http\Requests\Admin\UpdateCooperation;
use App\Models\Cooperation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CooperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperations = Cooperation::orderBy('id', 'desc')->get();
        return view('admin.cooperation.index', compact('cooperations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cooperation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCooperation  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCooperation $request)
    {
        $data = $request->all();
        $data['image'] = Cooperation::uploadImage($request);

        if(Cooperation::create($data)) {
            return redirect()->route('cooperation.index')->with('massage', 'Collaboration process created successfully');
        }
        return redirect()->route('cooperation.index')->with('massage', 'Unable to create Collaboration process');

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
        $cooperation = Cooperation::find($id);
        return view('admin.cooperation.edit', compact('cooperation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateCooperation  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCooperation $request, $id)
    {
        if (!Cooperation::find($id)) {
            return redirect()->route('cooperation.index')->with('message', "Collaboration process not fount");
        }

        $cooperation = Cooperation::find($id);

        $data = $request->all();
        $data['image'] = Cooperation::updateImage($request, $cooperation);

        if ($cooperation->update($data)) {
            return redirect()->route('cooperation.index')->with('message', "Collaboration process changed successfully");
        }
        return redirect()->route('cooperation.index')->with('message', "Unable to update Collaboration process");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Cooperation::find($id)) {
            return redirect()->route('cooperation.index')->with('message', "Collaboration process not found");
        }

        $cooperation = Cooperation::find($id);

        if (File::exists(public_path() . $cooperation->image)) {
            File::delete(public_path() . $cooperation->image);
        }

        if ($cooperation->delete()) {
            return redirect()->route('cooperation.index')->with('message', "Collaboration process deleted successfully");
        }
        return redirect()->route('cooperation.index')->with('message', "unable to delete Collaboration process");
    }
}
