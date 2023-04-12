<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/foto/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/foto/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/foto/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/foto/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/foto/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('front/css/fancybox-main.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">

    {!! Meta::toHtml() !!}
</head>
<body>

    <!-- header start -->

    <header>
        <div class="header">
            <section class="container">
                <div class="header__cart">
                    <div class="header__list">
                        <div class="header__logo">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('front/foto/logo.svg') }}" alt="logo">
                            </a>
                        </div>

                        <ul class="header__menu sidenav" id="slide-out">
                            <li>
                                <a href="{{ route('about') }}" class="header__link">@lang('main.about_us')</a>
                            </li>

                            <li>
                                <h4 class="header__menu__links">
                                    @lang('main.products')
                                    <span><i class="fas fa-chevron-down"></i></span>
                                </h4>

                                <nav class="header__menu__none">
                                    <ul class="header__none__menu">
                                        @foreach(\App\Models\Product::all() as $product)
                                        <li>
                                            <a href="{{ route('product', $product->id) }}" class="header__link__none">{{ $product->{'title_' . app()->getLocale()} }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </li>

                            <li>
                                <a href="{{ route('services') }}" class="header__link">@lang('main.services')</a>
                            </li>

                            <li>
                                <a href="{{ route('blogs') }}" class="header__link">@lang('main.blog')</a>
                            </li>

                            <li>
                                <a href="{{ route('partners') }}" class="header__link">@lang('main.partners')</a>
                            </li>

                            <li>
                                <a href="{{ route('refinery') }}" class="header__link">@lang('main.refinery')</a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}" class="header__link">@lang('main.contacts')</a>
                            </li>
                        </ul>

                        <section class="header__ru__list">
                            <!-- language start -->

                            <div class="header__ru">

                                <div class="header__ru_cart dropdown-trigger"data-target='dropdown1'>
                                    <a data-target='dropdown1' class="header__en__link">{{ strtoupper(app()->getLocale()) }}</a>
                                    <span><i class="fas fa-angle-down"></i></span>
                                </div>

                                <div class="header__ru_none dropdown-content" id='dropdown1'>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if($localeCode != app()->getLocale())
                                        <div class="header__ru_list @if($localeCode == app()->getLocale()) active @endif">
                                            <a rel="alternate" class="header__en__link" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ strtoupper($localeCode) }}
                                            </a>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- language start -->
                            <button class="header__burger__none sidenav-trigger" data-target="slide-out"><i class="fas fa-bars"></i></button>
                        </section>
                    </div>
            </section>
        </div>
    </header>

    <!-- header end -->

    @yield('content')

     <!-- footer start -->

     <footer>
        <div class="footer" style="background-image:url({{ asset('front/foto/footer.png') }})">
            <section class="container">
                <div class="footer__cart__list">
                    <div class="footer__list">
                        <div class="footer__item">

                            <div class="footer__cart">
                                <div class="footer__logo">
                                    <a href="{{ route('/') }}">
                                        <img src="{{ asset('front/foto/logo.svg') }}" alt="logo">
                                    </a>
                                </div>

                                <ul class="footer__menu">
                                    <li>
                                        <a href="{{ $options->where('key', 'instagram')->first()->value }}" class="footer__menu__link"><i class="fab fa-instagram"></i></a>
                                    </li>

                                    <li>
                                        <a href="{{ $options->where('key', 'facebook')->first()->value }}" class="footer__menu__link"><i class="fab fa-facebook-f"></i></a>
                                    </li>

                                    <li>
                                        <a href="{{ $options->where('key', 'telegram')->first()->value }}" class="footer__menu__link"><i class="fab fa-telegram-plane"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="footer__cart">
                                <ul class="footer__menu__tel">
                                    <li>
                                        <a href="tel:{{ $options->where('key', 'phone')->first()->value }}" class="footer__menu__tel__link"><span>@lang('main.telephone'):</span>{{ $options->where('key', 'phone')->first()->value }}</a>
                                    </li>
                                    <li>
                                        <a class="footer__menu__tel__link"><span>@lang('main.address'):</span>{{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}</a>
                                    </li>
                                    <li>
                                        <a href="mailto:{{ $options->where('key', 'email')->first()->value }}" class="footer__menu__tel__link"><span>@lang('main.email'):</span>{{ $options->where('key', 'email')->first()->value }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="footer__item">
                            <ul class="footer__menu__max">
                                <li>
                                    <a href="{{ route('about') }}" class="footer__menu__max__link">@lang('main.about_us')</a>
                                </li>

                                <li>
                                    <a href="{{ route('product', $product->id) }}" class="footer__menu__max__link">@lang('main.products')</a>
                                </li>

                                <li>
                                    <a href="{{ route('services') }}" class="footer__menu__max__link">@lang('main.services')</a>
                                </li>

                                <li>
                                    <a href="{{ route('blogs') }}" class="footer__menu__max__link">@lang('main.blog')</a>
                                </li>
                            </ul>

                            <ul class="footer__menu__max">
                                <li>
                                    <a href="{{ route('partners') }}" class="footer__menu__max__link">@lang('main.partners')</a>
                                </li>

                                <li>
                                    <a href="{{ route('refinery') }}" class="footer__menu__max__link">@lang('main.refinery')</a>
                                </li>

                                <li>
                                    <a href="{{ route('contact') }}" class="footer__menu__max__link">@lang('main.contacts')</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="footer__bottom">
                <section class="container">
                        <div class="footer__bottom__list">
                            <h4 class="footer__bottom__title">
                                «Alpha Oil» @lang('main.all_rights_reserved')
                            </h4>

                            <h4 class="footer__bottom__title">
                                © Copyright {{ date("Y") }} - Web developed by <a href="https://sos.uz" target="_blank">SOS Group</a>
                            </h4>
                        </div>
                </section>
            </div>
        </div>
    </footer>

    <!-- footer end -->

    <script src="{{ asset('front/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('front/js/materialize.min.js') }}"></script>
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/js/slic.js') }}"></script>
    <script src="{{ asset('front/js/fancyapps-ui.js') }}"></script>
    <script src="{{ asset('front/js/fancybox_main.js') }}"></script>
    <script src="{{ asset('front/js/mar_ru.js') }}"></script>
    <script src="{{ asset('front/js/index.js') }}"></script>
</body>
</html>

