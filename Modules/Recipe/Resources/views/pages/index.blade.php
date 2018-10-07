@extends('recipe::layouts.master')
@section('content')
    <main class="main">
        <a href="navigation.html" class="navigation__link">
            <i>N</i>
        </a>
        <section class="main-banner " style="background-image: url(/img/banners/recipe.png)" ;>
            <div class="main-banner__overlay"></div>
            <div class="container">
                <div class="main-banner__container">
                    <h1 class="main-banner__title">Книга рецептов</h1>
                    <div class="main-banner__content">
                        <section class="breadcrumbs">
                            <ul class="breadcrumbs__menu">
                                <li class="breadcrumbs__item">
                                    <a href="/" class="breadcrumbs__link">АСКАНИЯ-ПАК</a>
                                </li>
                                <li class="breadcrumbs__item">
                                    <a href="" class="breadcrumbs__link">ПРОИЗВОДСТВО И ЭКСПОРТ МЕДА</a>
                                </li>
                                <li class="breadcrumbs__item">КАТАЛОГ ПРОДУКЦИИ МЕДА АСКАНИЯ</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="recipe-catalog">
            <div class="recipe-catalog__container">
                <section class="filter recipe-filter">
                    <div class="container pr">
                        <div class="filter__open-btn">
                            <span>Фильтр продукции</span>
                        </div>
                        <div class="filter__container">
                            <form class="filter__menu">
                                <div class="filter__items">
                                    <div class="filter__item">
                                        <div class="js-select-container select">
                                            <span class="filter__item__name">время</span>
                                            <span class="filter__item__current js-select-trigger">Любая
                                                            <i class="icon-arr-to-bottom"></i>
                                                        </span>
                                            <div class="filter__item__menu js-select-menu select__menu">
                                                <span class="filter-item-btn_any">Любая</span>
                                                <label class="filter__item__menu__item">
                                                    <input name="time" id="t1" value="t001" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>10 мин</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="time" id="t2" value="t002" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>20 мин</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="time" id="t3" value="t003" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>30 мин</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="time" id="t4" value="t004" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>40 мин</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="time" id="t5" value="t005" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>50 мин</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="time" id="t6" value="t006" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>1 мин </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter__item">
                                        <div class="js-select-container select">
                                            <span class="filter__item__name">персоны</span>
                                            <span class="filter__item__current js-select-trigger">Любая
                                                            <i class="icon-arr-to-bottom"></i>
                                                        </span>
                                            <div class="filter__item__menu js-select-menu select__menu">
                                                <span class="filter-item-btn_any">Любая</span>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p1" value="p001" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>1 персона</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p2" value="p002" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>2 персоны</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p3" value="p003" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>2-5 персон</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p4" value="p004" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>6-10 персон</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p5" value="p005" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>10-20 персон</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p6" value="p006" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Корпоратив</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p7" value="p007" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Свадьба</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p8" value="p008" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Вселенская гульба</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="person" id="p9" value="p009" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Пир</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter__item">
                                        <div class="js-select-container select">
                                            <span class="filter__item__name">сложность</span>
                                            <span class="filter__item__current js-select-trigger">Любая
                                                            <i class="icon-arr-to-bottom"></i>
                                                        </span>
                                            <div class="filter__item__menu js-select-menu select__menu">
                                                <span class="filter-item-btn_any">Любая</span>
                                                <label class="filter__item__menu__item">
                                                    <input name="level" id="l1" value="l001" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Очень легко</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="level" id="l2" value="l002" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Легко</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="level" id="l3" value="l003" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Средняя</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="level" id="l4" value="l004" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Сложно</label>
                                                <label class="filter__item__menu__item">
                                                    <input name="level" id="l5" value="l005" type="checkbox">
                                                    <span class="filter__item__menu__item__checkbox">
                                                                    <i class="icon-checked"></i>
                                                                </span>Супер сложно</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__close-box">
                                    <label for="t1" class="filter__close-btn _time filter__close-btn--anim"> 10 мин </label>
                                    <label for="p1" class="filter__close-btn _person filter__close-btn--anim"> 1 персона </label>
                                    <label for="l1" class="filter__close-btn _level filter__close-btn--anim"> Очень легко </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <section class="recipe-list">
                    <div class="container">
                        <div class="recipe-list__container">
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-item" data-aos="fade-up">
                                <div class="recipe-item__container" style="">
                                    <div class="recipe-item__img-box">
                                        <div style="background-image: url(./assets/img/product_details/recipe1.png)"></div>
                                    </div>
                                    <div class="recipe-item__overlay"></div>
                                    <div class="recipe-item__content">
                                        <a href="#" class="recipe-item__label">ПРЕСС-РЕЛИЗЫ</a>
                                        <a href="#" class="recipe-item__name">Крем-суп в хлебном горшке</a>
                                        <div class="recipe-item__info">
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-timer"></i> 30 мин</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> 3-4 персоны</div>
                                            <div class="recipe-item__info__item">
                                                <i class="recipe-item__info__item__icon icon-people"></i> Легкий в приготовлении</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <div class="recipe-catalog__pagination">
                        <section class="pagination">
                            <div class="pagination__container">
                                <ul class="pagination__menu">
                                    <li class="pagination__item active">
                                        <a class="pagination__link">1</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__link">2</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__link">3</a>
                                    </li>
                                    <li class="pagination__item pagination__item--hidden">
                                        <a href="" class="pagination__link">4</a>
                                    </li>
                                    <li class="pagination__item pagination__item--hidden">
                                        <a href="" class="pagination__link">5</a>
                                    </li>
                                    <li class="pagination__item pagination__item--hidden">
                                        <a href="" class="pagination__link">6</a>
                                    </li>
                                    <li class="pagination__item pagination__item--hidden">
                                        <a href="" class="pagination__link">7</a>
                                    </li>
                                    <li class="pagination__item pagination__item--hidden">
                                        <a href="" class="pagination__link">8</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__link">...</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__link">119</a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
