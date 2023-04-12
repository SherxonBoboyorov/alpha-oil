@extends('layouts.front')

@section('content')

    <!-- slider start -->

    <div class="slider">
        <div class="slider__list">
          @foreach ($sliders as $slider)
            <div class="slider__item" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 31.77%), linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset($slider->image) }});">
                <section class="container">
                    <div class="slider__cart">
                        <h1 class="slider__title__h1">{{ $slider->{'title_' . app()->getLocale()} }}</h1>
                        <div class="slider__text">
                            <p>{{ $slider->{'description_' . app()->getLocale()} }}</p>
                        </div>
                        <a href="{{ $slider->link }}" class="slider__link">@lang('main.more')</a>
                    </div>
                </section>
            </div>
           @endforeach
        </div>
    </div>

    <!-- slider end -->

    <!-- products start -->

    <div class="products">
        <section class="container">
            <div class="products__cart">
                <div class="products__list">
                    <div class="products__cart__list">
                       @foreach ($products as $product)
                        <div class="products__item">
                            <a href="{{ route('product', $product->id) }}">
                                <div class="products__img">
                                    <img src="/image/iconimg/{{ ($product->icon_img) }}" alt="products">
                                </div>
                                <section>
                                    <h3 class="products__title__h3">
                                        {{ $product->{'title_' . app()->getLocale()} }}
                                    </h3>
                                    <div class="products__text">
                                        <p>
                                            {!! $product->{'description_' . app()->getLocale()} !!}
                                        </p>
                                    </div>
                                </section>
                            </a>
                        </div>
                        @endforeach
                    </div>

                    <div class="products__about">
                        @foreach ($pages as $page)
                        <h2 class="products__title__h2">@lang('main.about_us')</h2>
                        <div class="products__about__text">
                            <p>
                                {!! $page->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>
                        <a href="{{ route('about') }}" class="products__about__link">
                            @lang('main.more')
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- products end -->

    <!-- collaboration process start -->

    <div class="collaboration">
        <section class="container">
            <div class="collaboration__cart">
                <h2 class="products__title__h2">@lang('main.collaboration_process')</h2>

                <div class="collaboration__list">
                    @foreach ($collaborations as $collaboration)

                    <div class="collaboration__item">
                        <div class="collaboration__img">
                            <h4 class="collaboration__number">
                                {{ $loop->iteration}}
                            </h4>
                            <img src="{{ asset($collaboration->image) }}" alt="collaboration">
                        </div>
                        <h3 class="collaboration__title__h3">
                            {{ $collaboration->{'title_' . app()->getLocale()} }}
                        </h3>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
    </div>

    <!-- collaboration process end -->

    <!-- Services start -->

    <div class="services">
        <section class="container">
            <div class="services__cart">
                <div class="services__list">
                  @foreach ($services as $service)
                    <div class="services__item">
                        <div class="services__item__video">
                            <p class="text-center">
                                <a data-fancybox href="{{ $service->frame }}">
                                    <img class="inline" width="500" alt="" src="{{ asset($service->image) }}"/>
                                    <!-- play start -->

                                    <div class="button__min is-play" href="#">
                                        <div class="button-outer-circle has-scale-animation"></div>
                                        <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                        <div class="button-icon is-play">
                                            <img class="services__item__img__play" alt="All" src="{{ asset('front/foto/icons/pley.svg') }}">
                                        </div>
                                    </div>
                                    <!-- play end -->
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="services__item__text">
                        <h2 class="products__title__h2">@lang('main.services')</h2>
                        <div class="services__text">
                            <p>
                                {!! $service->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>

                        <div class="about__link__button">
                            <a href="{{ route('services') }}" class="services__link">@lang('main.more')</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Services end -->

    <!-- Blog start -->

    <div class="blog">
        <section class="container">
            <div class="blog__cart">
                <h2 class="products__title__h2">@lang('main.blog')</h2>

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

                <div class="blog__link__button">
                    <a href="{{ route('blogs') }}" class="blog__link">@lang('main.all_articles')</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Blog end -->

    <!-- Our partners start -->

    <div class="our_partners">
        <section class="container">
            <div class="our_partners__cart">
                <h2 class="products__title__h2">@lang('main.partners')</h2>
                <div class="our_partners__list">
                    @foreach ($partners as $partner)
                    <div class="our_partners__item">
                        <img src="{{ asset($partner->image) }}" alt="our_partners">
                    </div>
                  @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- Our partners end -->


    @endsection


