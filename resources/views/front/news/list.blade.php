@extends('layouts.front')

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">Блог</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="about__menu__link">Блог</a>
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

                <div class="blogIn__pagination">
                    <ul class="blogIn__pagination__page">
                        <li>
                            <a href="#!" class="blogIn__pagination__link__left"><i class="fas fa-angle-double-left"></i></a>
                        </li>

                        <li>
                            <a href="#!" class="blogIn__pagination__link__left"><i class="fas fa-chevron-left"></i></a>
                        </li>

                        <ul class="blogIn__pagination__page__mrx">
                            <li><a href="#!" class="blogIn__pagination__link active">1</a></li>
                            <li><a href="#!" class="blogIn__pagination__link">2</a></li>
                            <li><a href="#!" class="blogIn__pagination__link">3</a></li>
                        </ul>

                        <li>
                            <a href="#!" class="blogIn__pagination__link__left"><i class="fas fa-angle-double-right"></i></a>
                        </li>

                        <li>
                            <a href="#!" class="blogIn__pagination__link__left"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <!-- blogIn end -->

  @endsection
