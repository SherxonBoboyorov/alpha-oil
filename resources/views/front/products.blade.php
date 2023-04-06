@extends('layouts.front')

@section('content')

    <!-- about start -->

    <div class="about" style="background-image:url({{ asset('front/foto/about.png') }})">
        <section class="container">
            <div class="about__cart">
                <h2 class="products__title__h2">Дизельное топливо</h2>
                <ul class="about__menu">
                    <li>
                        <a href="{{ route('/') }}" class="about__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="about__menu__link">Дизельное топливо</a>
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
                <div class="products_in__img">
                    <img src="foto/products_in.png" alt="products_in">
                </div>

                <h2 class="products__title__h2">Дизельное топливо</h2>

                <div class="products_in__list__download">
                    <div class="products_in__item__download">
                        <a href="foto/slick_1.jpeg" download>
                            <div class="products_in__img__download">
                                <img src="foto/icons/pdf.svg" alt="pdf">
                            </div>
                            <section>
                                <h3 class="products__title__h3">ЕВРО ДТ-Е-К5</h3>
                                <div class="products__text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="products_in__item__download">
                        <a href="foto/slick_1.jpeg" download>
                            <div class="products_in__img__download">
                                <img src="foto/icons/pdf.svg" alt="pdf">
                            </div>
                            <section>
                                <h3 class="products__title__h3">ЕВРО ДТ-Е-К4</h3>
                                <div class="products__text">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="products_in__item__download">
                        <a href="foto/slick_1.jpeg" download>
                            <div class="products_in__img__download">
                                <img src="foto/icons/pdf.svg" alt="pdf">
                            </div>
                            <section>
                                <h3 class="products__title__h3">ЕВРО ДТ-Л-К5</h3>
                                <div class="products__text">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="products_in__item__download">
                        <a href="foto/slick_1.jpeg" download>
                            <div class="products_in__img__download">
                                <img src="foto/icons/pdf.svg" alt="pdf">
                            </div>
                            <section>
                                <h3 class="products__title__h3">ЕВРО ДТ-Л-К3</h3>
                                <div class="products__text">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in</p>
                                </div>
                            </section>
                        </a>
                    </div>
                </div>

                <div class="about_contint__text">
                    <p>
                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.
                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                        At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                    </p>

                    <p>
                        Nemo enim ipsam voluptatem, quia voluptas sit, <a href="#!">aspernatur</a> aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                        At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                    </p>
                </div>

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
                </div>
            </div>
        </section>
    </div>

    <!-- products_in end -->

  @endsection
