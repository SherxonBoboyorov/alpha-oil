@extends('layouts.front')

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">{{ $product->{'title_' . app()->getLocale()} }}</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">@lang('main.homepage')</a>
                    </li>

                    <li>
                        <a class="about__menu__link">{{ $product->{'title_' . app()->getLocale()} }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about end -->

    <!-- products_in start -->

    <div class="products_in">
        <section class="container">
            <div class="products_in__cart">
                {{-- @foreach ($products as $product) --}}

                <div class="products_in__img">
                    <img src="/image/product/{{ ($product->image) }}" alt="products_in">
                </div>

                <h2 class="products__title__h2">{{ $product->{'title_' . app()->getLocale()} }}</h2>

                <div class="products_in__list__download">
                    @foreach ($product->product_documents as $product_document)

                    <div class="products_in__item__download">
                        <a href="{{ asset($product_document->image) }}" download>
                            <div class="products_in__img__download">
                                <img src="{{ asset('front/foto/icons/pdf.svg') }}" alt="pdf">
                            </div>
                            <section>
                                <h3 class="products__title__h3">{{ $product_document->{'title_' . app()->getLocale()} }}</h3>
                                <div class="products__text">
                                    <p>{!! $product_document->{'content_' . app()->getLocale()} !!}</p>
                                </div>
                            </section>
                        </a>
                    </div>
                    @endforeach

                </div>

                <div class="about_contint__text">
                    <p>
                        {!! $product->{'description_' . app()->getLocale()} !!}
                    </p>
                </div>
{{--
                <div class="products_in__list">
                    <div class="products_in__item">
                        <div class="products_in__item__img">
                            <img src="foto/icons/products_in_1.svg" alt="products">
                        </div>
                        <section>
                            <h3 class="products__title__h3">Объёмы поставок</h3>
                            <div class="products__text">
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam</p>
                            </div>
                        </section>
                    </div>

                    <div class="products_in__item">
                        <div class="products_in__item__img">
                            <img src="foto/icons/products_in_3.svg" alt="products">
                        </div>
                        <section>
                            <h3 class="products__title__h3">Гарантия качества</h3>
                            <div class="products__text">
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam</p>
                            </div>
                        </section>
                    </div>

                    <div class="products_in__item">
                        <div class="products_in__item__img">
                            <img src="foto/icons/products_in_2.svg" alt="products">
                        </div>
                        <section>
                            <h3 class="products__title__h3">Сроки поставок</h3>
                            <div class="products__text">
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam</p>
                            </div>
                        </section>
                    </div>

                    <div class="products_in__item">
                        <div class="products_in__item__img">
                            <img src="foto/icons/products_in_4.svg" alt="products">
                        </div>
                        <section>
                            <h3 class="products__title__h3">Стоимость нефтепродуктов</h3>
                            <div class="products__text">
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam</p>
                            </div>
                        </section>
                    </div>
                </div> --}}
                {{-- @endforeach --}}
            </div>
        </section>
    </div>

    <!-- products_in end -->

  @endsection
