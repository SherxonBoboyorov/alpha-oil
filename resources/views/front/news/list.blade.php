@extends('layouts.front')

<title>Alpha Oil</title>

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">@lang('main.blog')</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">@lang('main.homepage')</a>
                    </li>

                    <li>
                        <a class="about__menu__link">@lang('main.blog')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about end -->

    <!-- blogIn start -->

    <div class="blogIn">
        <section class="container">
            <div class="blogIn__cart">
                <div class="blog__list">
                  @foreach ($blogs as $blog)
                    <div class="blog__item">
                        <a href="{{ route('blog', $blog->{'slug_' . app()->getLocale()}) }}">
                            <div class="blog__item__img">
                                <img src="{{ asset($blog->image) }}" alt="blog">
                            </div>
                            <h4 class="blog__data">{{  date('d.m.Y', strtotime($blog->created_at)) }}</h4>
                            <div class="blog__text">
                                <p>{{ $blog->{'title_' . app()->getLocale()} }}</p>
                            </div>
                        </a>
                    </div>
                   @endforeach
                </div>

                {{ $blogs->links("vendor.pagination.pagination")}}
            
            </div>
        </section>
    </div>

    <!-- blogIn end -->

  @endsection
