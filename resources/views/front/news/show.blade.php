@extends('layouts.front')

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">{{ $blog->{'title_' . app()->getLocale()} }}</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('blogs') }}" class="about__menu__link">Блог</a>
                    </li>

                    <li>
                        <a class="about__menu__link">{{ $blog->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about end -->

    <!-- blog_in start -->

    <div class="blog_in">
        <section class="container">
            <div class="blog_in__cart">
                <div class="blog_in__img">
                    <img src="{{ asset($blog->image) }}" alt="blog">
                </div>

                <h4 class="blog_in__data">{{  date('d.m.Y', strtotime($blog->created_at)) }}</h4>

                <div class="about_contint__text">
                    <p>
                        {!! $blog->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- blog_in end -->

   @endsection
