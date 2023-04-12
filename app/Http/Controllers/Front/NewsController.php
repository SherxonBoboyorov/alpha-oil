<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Butschster\Head\Facades\Meta;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class NewsController extends Controller
{
    public function list()
    {
        $blogs = Article::orderBy('created_at', 'desc')->paginate(12);
        return view('front.news.list', compact(
            'blogs'
        ));
    }

    public function show($slug)
    {
       $blog = Article::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        Meta::setTitle($blog->{'meta_title_' . LaravelLocalization::getCurrentLocale()});
        Meta::setDescription($blog->{'meta_description_' . LaravelLocalization::getCurrentLocale()});

       return view('front.news.show', compact('blog'));
    }
}
