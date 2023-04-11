<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProductDocument;
use App\Http\Requests\Admin\UpdateProductDocument;
use App\Models\ProductDocument;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_documents = ProductDocument::orderBy('created_at', 'desc')->get();
        return view('admin.productdocument.index', [
            'product_documents' => $product_documents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.productdocument.create', [
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateProductDocument  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductDocument $request)
    {
        $data = $request->all();
        $data['image'] = ProductDocument::uploadImage($request);

        if (ProductDocument::create($data)) {
            return redirect()->route('productdocument.index')->with('message', 'created successfully');
        }
        return redirect()->route('productdocument.index')->with('message', 'unable to created');
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
    public function edit(ProductDocument $productdocument)
    {
        $product = Product::all();
        return view('admin.productdocument.edit', [
            'product' => $product,
            'productdocument' => $productdocument,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateProductDocument  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductDocument $request, $id)
    {
        if (!ProductDocument::find($id)) {
            return redirect()->route('productdocument.index')->with('message', "not fount");
        }

        $productdocument = ProductDocument::find($id);

        $data = $request->all();
        $data['image'] = ProductDocument::updateImage($request, $productdocument);

        if ($productdocument->update($data)) {
            return redirect()->route('productdocument.index')->with('message', "changed successfully");
        }
        return redirect()->route('productdocument.index')->with('message', "Unable to update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!ProductDocument::find($id)) {
            return redirect()->route('productdocument.index')->with('message', "not found");
        }

        $productdocument = ProductDocument::find($id);

        if (File::exists(public_path() . $productdocument->image)) {
            File::delete(public_path() . $productdocument->image);
        }

        if ($productdocument->delete()) {
            return redirect()->route('productdocument.index')->with('message', "deleted successfully");
        }
        return redirect()->route('productdocument.index')->with('message', "unable to delete");
    }
}
