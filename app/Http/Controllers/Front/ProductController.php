<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Refinery;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function refinery()
    {
        $refineries = Refinery::orderBy('created_at', 'desc')->get();
        return view('front.refinery', compact('refineries'));
    }
}
