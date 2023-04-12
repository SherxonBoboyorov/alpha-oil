@extends('layouts.front')

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">@lang('main.services')</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">@lang('main.homepage')</a>
                    </li>

                    <li>
                        <a class="about__menu__link">@lang('main.services')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about end -->

    <!-- services_in start -->

    <div class="services_in">
        <section class="container">
            <div class="services_in__cart">
                <div class="about_contint__text">
                  @foreach ($services as $service)
                    <p>
                        {!! $service->{'content_' . app()->getLocale()} !!}
                    </p>
                  @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- services_in end -->

  @endsection
