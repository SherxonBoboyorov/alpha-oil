<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Cooperation;
use App\Models\Service;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\Options;
use App\Models\Partner;
use App\Models\Product;
use Butschster\Head\Facades\Meta;


class IndexController extends Controller
{
    public function homepage()
    {
        Meta::setTitle(Options::where('key', 'meta_title_' . LaravelLocalization::getCurrentLocale())->first()->value);
        Meta::setDescription(Options::where('key', 'meta_description_' . LaravelLocalization::getCurrentLocale())->first()->value);

        $sliders = Slider::orderBy('created_at', 'desc')->get();
        $pages = Page::all();
        $collaborations = Cooperation::orderBy('created_at', 'desc')->get();
        $services = Service::all();
        $blogs = Article::orderBy('created_at', 'desc')->paginate(3);
        $partners = Partner::orderBy('created_at', 'desc')->get();
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('front.index', compact(
            'sliders',
            'pages',
            'collaborations',
            'services',
            'blogs',
            'partners',
            'products'
        ));
    }
}
