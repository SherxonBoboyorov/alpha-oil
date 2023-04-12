<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Product::where('product_documents')->get();

        return view('front.products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        Meta::setTitle($product->{'meta_title_' . LaravelLocalization::getCurrentLocale()});
        Meta::setDescription($product->{'meta_description_' . LaravelLocalization::getCurrentLocale()});

        return view('front.products', compact('product'));
    }
}
