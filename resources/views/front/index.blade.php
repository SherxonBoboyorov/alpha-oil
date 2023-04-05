@extends('layouts.front')

@section('content')


    <!-- slider start -->

    <div class="slider">
        <div class="slider__list">
            <div class="slider__item" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 31.77%), linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(foto/slick_1.jpeg);">
                <section class="container">
                    <div class="slider__cart">
                        <h1 class="slider__title__h1">Lorem ipsum dolor</h1>
                        <div class="slider__text">
                            <p>Сonsectetur adipiscing elit, sed do eiusmod</p>
                        </div>
                        <a href="#!" class="slider__link">Подробнее</a>
                    </div>
                </section>
            </div>

            <div class="slider__item" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 31.77%), linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(foto/slick_2.jpg);">
                <section class="container">
                    <div class="slider__cart">
                        <h1 class="slider__title__h1">Сonsectetur adipiscing elit, sed do eiusmod</h1>
                        <div class="slider__text">
                            <p>High quality training</p>
                        </div>
                        <a href="#!" class="slider__link">Подробнее</a>
                    </div>
                </section>
            </div>

            <div class="slider__item" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 31.77%), linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(foto/slick_3.jpg);">
                <section class="container">
                    <div class="slider__cart">
                        <h1 class="slider__title__h1">Good future</h1>
                        <div class="slider__text">
                            <p>Сonsectetur adipiscing elit, sed do eiusmod</p>
                        </div>
                        <a href="#!" class="slider__link">Подробнее</a>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- slider end -->

    <!-- products start -->

    <div class="products">
        <section class="container">
            <div class="products__cart">
                <div class="products__list">
                    <div class="products__cart__list">

                        <div class="products__item">
                            <a href="products.html">
                                <div class="products__img">
                                    <img src="foto/icons/products_1.svg" alt="products">
                                </div>
                                <section>
                                    <h3 class="products__title__h3">
                                        Бензин
                                    </h3>
                                    <div class="products__text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </p>
                                    </div>
                                </section>
                            </a>
                        </div>

                        <div class="products__item">
                            <a href="products.html">
                                <div class="products__img">
                                    <img src="foto/icons/products_2.svg" alt="products">
                                </div>
                                <section>
                                    <h3 class="products__title__h3">
                                        Дизель
                                    </h3>
                                    <div class="products__text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </p>
                                    </div>
                                </section>
                            </a>
                        </div>

                        <div class="products__item">
                            <a href="products.html">
                                <div class="products__img">
                                    <img src="foto/icons/products_3.svg" alt="products">
                                </div>
                                <section>
                                    <h3 class="products__title__h3">
                                        Битум
                                    </h3>
                                    <div class="products__text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </p>
                                    </div>
                                </section>
                            </a>
                        </div>

                        <div class="products__item">
                            <a href="products.html">
                                <div class="products__img">
                                    <img src="foto/icons/products_4.svg" alt="products">
                                </div>
                                <section>
                                    <h3 class="products__title__h3">
                                        Керосин
                                    </h3>
                                    <div class="products__text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </p>
                                    </div>
                                </section>
                            </a>
                        </div>

                    </div>

                    <div class="products__about">
                        <h2 class="products__title__h2">О нас</h2>
                        <div class="products__about__text">
                            <p>
                                Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque <a href="#!">laudantium</a>, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione.
                            </p>
                        </div>
                        <a href="about.html" class="products__about__link">
                            Подробнее
                        </a>
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
                <h2 class="products__title__h2">Процесс сотрудничества</h2>

                <div class="collaboration__list">

                    <div class="collaboration__item">
                        <div class="collaboration__img">
                            <h4 class="collaboration__number">
                                01
                            </h4>
                            <img src="foto/icons/collaboration_1.svg" alt="collaboration">
                        </div>
                        <h3 class="collaboration__title__h3">
                            Отправка заявки
                        </h3>
                    </div>

                    <div class="collaboration__item">
                        <div class="collaboration__img">
                            <h4 class="collaboration__number">
                                02
                            </h4>
                            <img src="foto/icons/collaboration_2.svg" alt="collaboration">
                        </div>
                        <h3 class="collaboration__title__h3">
                            Договор и оплата
                        </h3>
                    </div>

                    <div class="collaboration__item">
                        <div class="collaboration__img">
                            <h4 class="collaboration__number">
                                03
                            </h4>
                            <img src="foto/icons/collaboration_3.svg" alt="collaboration">
                        </div>
                        <h3 class="collaboration__title__h3">
                            Доставка топлива
                        </h3>
                    </div>

                    <div class="collaboration__item">
                        <div class="collaboration__img">
                            <h4 class="collaboration__number">
                                04
                            </h4>
                            <img src="foto/icons/collaboration_4.svg" alt="collaboration">
                        </div>
                        <h3 class="collaboration__title__h3">
                            Результат
                        </h3>
                    </div>

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
                    <div class="services__item">
                        <div class="services__item__video">
                            <p class="text-center">
                                <a data-fancybox href="https://youtu.be/t-siIJiIuyg?list=RDGMEMQ1dJ7wXfLlqCjwV0xfSNbAVMYwtzaVOcI54&t=3">
                                    <img class="inline" width="500" alt="" src="foto/Services.png"/>
                                    <!-- play start -->

                                    <div class="button__min is-play" href="#">
                                        <div class="button-outer-circle has-scale-animation"></div>
                                        <div class="button-outer-circle has-scale-animation has-delay-short"></div>
                                        <div class="button-icon is-play">
                                            <img class="services__item__img__play" alt="All" src="foto/icons/pley.svg">
                                        </div>
                                    </div>
                                    <!-- play end -->
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="services__item__text">
                        <h2 class="products__title__h2">Услуги</h2>
                        <div class="services__text">
                            <p>
                                Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint.
                            </p>
                        </div>

                        <div class="about__link__button">
                            <a href="services.html" class="services__link">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Services end -->

    <!-- Blog start -->

    <div class="blog">
        <section class="container">
            <div class="blog__cart">
                <h2 class="products__title__h2">Блог</h2>

                <div class="blog__list">

                    <div class="blog__item">
                        <a href="blog_in.html">
                            <div class="blog__item__img">
                                <img src="foto/blog_1.png" alt="blog">
                            </div>
                            <h4 class="blog__data">02.12.2021</h4>
                            <div class="blog__text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                    </div>

                    <div class="blog__item">
                        <a href="blog_in.html">
                            <div class="blog__item__img">
                                <img src="foto/blog_2.png" alt="blog">
                            </div>
                            <h4 class="blog__data">02.12.2021</h4>
                            <div class="blog__text">
                                <p>Sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </a>
                    </div>

                    <div class="blog__item">
                        <a href="blog_in.html">
                            <div class="blog__item__img">
                                <img src="foto/blog_3.png" alt="blog">
                            </div>
                            <h4 class="blog__data">02.12.2021</h4>
                            <div class="blog__text">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation </p>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="blog__link__button">
                    <a href="blog.html" class="blog__link">Все статьи</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Blog end -->

    <!-- Our partners start -->

    <div class="our_partners">
        <section class="container">
            <div class="our_partners__cart">
                <h2 class="products__title__h2">партнеры</h2>
                <div class="our_partners__list">

                    <div class="our_partners__item">
                        <img src="foto/our_partners_1.png" alt="our_partners">
                    </div>

                    <div class="our_partners__item">
                        <img src="foto/our_partners_2.png" alt="our_partners">
                    </div>

                    <div class="our_partners__item">
                        <img src="foto/our_partners_3.png" alt="our_partners">
                    </div>

                    <div class="our_partners__item">
                        <img src="foto/our_partners_4.png" alt="our_partners">
                    </div>

                    <div class="our_partners__item">
                        <img src="foto/our_partners_5.png" alt="our_partners">
                    </div>

                    <div class="our_partners__item">
                        <img src="foto/our_partners_1.png" alt="our_partners">
                    </div>

                </div>
            </div>
        </section>
    </div>

    <!-- Our partners end -->


    @endsection


