@extends('layouts.front')

<title>Alpha Oil</title>

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">Контакты</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="about__menu__link">Контакты</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about end -->

    <!-- contacts start -->

    <div class="contacts">
        <section class="container">
            <div class="contacts__cart">
                <div class="contacts__map__list">
                    <section>
                        <h3 class="products__title__h3">Головной офис в городе ташкент</h3>
                        <ul class="contacts__list__cart">
                            <li>
                                <h4 class="contacts__title__h4">Телефон:</h4>
                                <a href="tel:{{ $options->where('key', 'phone')->first()->value }}" class="contacts__list__link">{{ $options->where('key', 'phone')->first()->value }}</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Адрес:</h4>
                                <a class="contacts__list__link">{{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Email:</h4>
                                <a href="mailto:{{ $options->where('key', 'email')->first()->value }}" class="contacts__list__link">{{ $options->where('key', 'email')->first()->value }}</a>
                            </li>
                        </ul>
                    </section>
                    <div class="contacts__maps">
                        {!! $options->where('key', 'map')->first()->value !!}
                    </div>
                </div>

                <div class="contacts__list">
                    @foreach ($offices as $office)

                    <div class="contacts__item">
                        <h3 class="products__title__h3">{{ $office->{'title_' . app()->getLocale()} }}</h3>
                        <ul class="contacts__list__cart">
                            <li>
                                <h4 class="contacts__title__h4">Телефон:</h4>
                                <a href="tel:{{ $office->phone }}" class="contacts__list__link">{{ $office->phone }}</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Адрес:</h4>
                                <a class="contacts__list__link">{{ $office->{'address_' . app()->getLocale()} }}</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Email:</h4>
                                <a href="mailto:{{ $office->email }}" class="contacts__list__link">{{ $office->email }}</a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- contacts end -->

   @endsection
