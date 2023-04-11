<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function service()
    {
        $services = Service::all();
        return view('front.services', compact('services'));
    }
}
