<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Cooperation;
use App\Models\Service;
use App\Models\Partner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homepage()
    {

        $sliders = Slider::orderBy('created_at', 'desc')->get();
        $pages = Page::all();
        $collaborations = Cooperation::orderBy('created_at', 'desc')->get();
        $services = Service::all();
        $blogs = Article::orderBy('created_at', 'desc')->paginate(3);
        $partners = Partner::orderBy('created_at', 'desc')->get();
        return view('front.index', compact(
            'sliders',
            'pages',
            'collaborations',
            'services',
            'blogs',
            'partners'
        ));
    }
}
