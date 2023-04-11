@extends('layouts.front')

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">Партнеры</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="about__menu__link">Партнеры</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- about end -->

    <!-- partnersIn start-->

    <div class="partnersIn">
        <section class="container">
            <div class="partnersIn__cart">
                <div class="partnersIn__list">
                  @foreach ($partners as $partner)
                    <div class="partnersIn__item__img">
                        <img src="{{ asset($partner->image) }}" alt="partnersIn">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- partnersIn end-->

@endsection
