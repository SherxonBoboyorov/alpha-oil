<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

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
       return view('front.news.show', compact('blog'));
    }
}
