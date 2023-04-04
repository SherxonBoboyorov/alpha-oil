<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateRefinery;
use App\Http\Requests\Admin\UpdateRefinery;
use App\Models\Refinery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RefineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refineries = Refinery::orderBy('id', 'desc')->paginate(10);
        return view('admin.refinery.index', compact('refineries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.refinery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateRefinery  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRefinery $request)
    {
        $data = $request->all();
        $data['image'] = Refinery::uploadImage($request);
        if (Refinery::create($data)) {
            return redirect()->route('refinery.index')->with('message', 'Created successfully!!!');
        }
        return redirect()->route('refinery.index')->with('message', 'Unable to Created!!!');

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
        $refinery = Refinery::find($id);
        return view('admin.refinery.edit', compact('refinery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateRefinery  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRefinery $request, $id)
    {
        if (!Refinery::find($id)) {
            return redirect()->route('partner.index')->with('message', "Partner not fount");
        }
        $refinery = Refinery::find($id);
        $data = $request->all();
        $data['image'] = Refinery::updateImage($request, $refinery);
        if ($refinery->update($data)) {
            return redirect()->route('refinery.index')->with('message', 'Updated successfully!!!');
        }
        return redirect()->route('refinery.index')->with('message', 'Unable to Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Refinery::find($id)) {
            return redirect()->route('refinery.index')->with('message', "Refinery not fount");
        }
        $refinery = Refinery::find($id);

        if (File::exists(public_path() . $refinery->image)) {
            File::delete(public_path() . $refinery->image);
        }
        if ($refinery->delete()) {
            return redirect()->route('refinery.index')->with('message', 'Deleted successfully!!!');
        }
        return redirect()->route('refinery.index')->with('message', 'Unable to Deleted!!!');
    }
}
