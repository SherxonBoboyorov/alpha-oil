@extends('layouts.front')

<title>Alpha Oil</title>

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">@lang('main.refinery')</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">@lang('main.homepage')</a>
                    </li>

                    <li>
                        <a class="about__menu__link">@lang('main.refinery')</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about end -->

    <!-- refinery start -->

    <div class="refinery">
        <section class="container">
            <div class="refinery__cart">
                <div class="refinery__list">
                    @foreach ($refineries as $refinery)
                    <div class="refinery__item__list">
                        <div class="refinery__img__item">
                            <img src="{{ asset($refinery->image) }}" alt="refinery">
                        </div>
                        <section>
                            <h3 class="products__title__h3">{{ $refinery->{'title_' . app()->getLocale()} }}</h3>
                            <div class="about_contint__text">
                                <p>
                                    {!! $refinery->{'content_' . app()->getLocale()} !!}
                                </p>
                            </div>
                        </section>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- refinery end -->

   @endsection
