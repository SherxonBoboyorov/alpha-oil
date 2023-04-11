<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function partner()
    {
        $partners = Partner::orderBy('created_at', 'desc')->get();
        return view('front.partners', compact('partners'));
    }
}
