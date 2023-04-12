<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServicesController extends Controller
{
    public function service()
    {
        $services = Service::orderBy('created_at')->paginate(1);

        $page = $services->first();

        Meta::setTitle($page->{'meta_title_' . LaravelLocalization::getCurrentLocale()});
        Meta::setDescription($page->{'meta_description_' . LaravelLocalization::getCurrentLocale()});

        return view('front.services', [
            'services' => $services,
        ]);
    }
}
