@extends('layouts.front')

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
                                <a href="tel:+998 94 505 45 05" class="contacts__list__link">+998 94 505 45 05</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Адрес:</h4>
                                <a class="contacts__list__link">Узбекистан, г. Ташкент, Ул. Садыка Азимова, 68</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Email:</h4>
                                <a href="mailto:info@sos.uz" class="contacts__list__link">info@sos.uz</a>
                            </li>
                        </ul>
                    </section>
                    <div class="contacts__maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3175.190783641276!2d69.27958871415322!3d41.309276990679564!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1680176949107!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="contacts__list">
                    <div class="contacts__item">
                        <h3 class="products__title__h3">Наш склад в карши</h3>
                        <ul class="contacts__list__cart">
                            <li>
                                <h4 class="contacts__title__h4">Телефон:</h4>
                                <a href="tel:+998 94 505 45 05" class="contacts__list__link">+998 94 505 45 05</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Адрес:</h4>
                                <a class="contacts__list__link">Узбекистан, г. Ташкент, Ул. Садыка Азимова, 68</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Email:</h4>
                                <a href="mailto:info@sos.uz" class="contacts__list__link">info@sos.uz</a>
                            </li>
                        </ul>
                    </div>

                    <div class="contacts__item">
                        <h3 class="products__title__h3">Наш склад в самарканде</h3>
                        <ul class="contacts__list__cart">
                            <li>
                                <h4 class="contacts__title__h4">Телефон:</h4>
                                <a href="tel:+998 94 505 45 05" class="contacts__list__link">+998 94 505 45 05</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Адрес:</h4>
                                <a class="contacts__list__link">Узбекистан, г. Ташкент, Ул. Садыка Азимова, 68</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Email:</h4>
                                <a href="mailto:info@sos.uz" class="contacts__list__link">info@sos.uz</a>
                            </li>
                        </ul>
                    </div>

                    <div class="contacts__item">
                        <h3 class="products__title__h3">Наш склад в намангане</h3>
                        <ul class="contacts__list__cart">
                            <li>
                                <h4 class="contacts__title__h4">Телефон:</h4>
                                <a href="tel:+998 94 505 45 05" class="contacts__list__link">+998 94 505 45 05</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Адрес:</h4>
                                <a class="contacts__list__link">Узбекистан, г. Ташкент, Ул. Садыка Азимова, 68</a>
                            </li>

                            <li>
                                <h4 class="contacts__title__h4">Email:</h4>
                                <a href="mailto:info@sos.uz" class="contacts__list__link">info@sos.uz</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- contacts end -->

   @endsection
