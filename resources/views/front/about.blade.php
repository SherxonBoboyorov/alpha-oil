@extends('layouts.front')

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">@lang('main.about_us')</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">@lang('main.homepage')</a>
                    </li>

                    <li>
                        <a class="about__menu__link">@lang('main.about_us')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about end -->

    <!-- about_contint start-->

    <div class="about_contint">
        <section class="container">
            <div class="about_contint__cart">
              @foreach ($pages as $page)
                <div class="about_contint__text">
                    <p>
                        {!! $page->{'content_' . app()->getLocale()} !!}
                    </p>
                </div>
               @endforeach
            </div>
        </section>
    </div>

    <!-- about_contint end-->

    @endsection
