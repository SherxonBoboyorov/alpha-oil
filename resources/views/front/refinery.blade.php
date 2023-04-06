@extends('layouts.front')

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">НПЗ</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">Главная</a>
                    </li>

                    <li>
                        <a  class="about__menu__link">НПЗ</a>
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
                    <div class="refinery__item__list">
                        <div class="refinery__img__item">
                            <img src="foto/refinery_1.png" alt="refinery">
                        </div>
                        <section>
                            <h3 class="products__title__h3">Lorem ipsum dolor sit amet</h3>
                            <div class="about_contint__text">
                                <p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </section>
                    </div>

                    <div class="refinery__item__list">
                        <div class="refinery__img__item">
                            <img src="foto/refinery_2.png" alt="refinery">
                        </div>
                        <section>
                            <h3 class="products__title__h3">consectetur adipiscing elit</h3>
                            <div class="about_contint__text">
                                <p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </section>
                    </div>

                    <div class="refinery__item__list">
                        <div class="refinery__img__item">
                            <img src="foto/refinery_3.png" alt="refinery">
                        </div>
                        <section>
                            <h3 class="products__title__h3">sed do eiusmod tempor incididunt</h3>
                            <div class="about_contint__text">
                                <p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </section>
                    </div>

                    <div class="refinery__item__list">
                        <div class="refinery__img__item">
                            <img src="foto/refinery_1.png" alt="refinery">
                        </div>
                        <section>
                            <h3 class="products__title__h3">Lorem ipsum dolor sit amet</h3>
                            <div class="about_contint__text">
                                <p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </section>
                    </div>

                    <div class="refinery__item__list">
                        <div class="refinery__img__item">
                            <img src="foto/refinery_2.png" alt="refinery">
                        </div>
                        <section>
                            <h3 class="products__title__h3">consectetur adipiscing elit</h3>
                            <div class="about_contint__text">
                                <p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </section>
                    </div>

                    <div class="refinery__item__list">
                        <div class="refinery__img__item">
                            <img src="foto/refinery_3.png" alt="refinery">
                        </div>
                        <section>
                            <h3 class="products__title__h3">sed do eiusmod tempor incididunt</h3>
                            <div class="about_contint__text">
                                <p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- refinery end -->

   @endsection
