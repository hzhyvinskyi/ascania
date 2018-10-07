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
                                                @foreach ($times as $time)
                                                    <label class="filter__item__menu__item">
                                                        <input name="time" id="t1" value="t001" type="checkbox">
                                                        <span class="filter__item__menu__item__checkbox">
                                                            <i class="icon-checked"></i>
                                                        </span>
                                                        {{ $time->amount_of_time }} мин
                                                    </label>
                                                @endforeach
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
                                                @foreach ($persons as $person)
                                                    <label class="filter__item__menu__item">
                                                        <input name="person" id="p1" value="p001" type="checkbox">
                                                        <span class="filter__item__menu__item__checkbox">
                                                            <i class="icon-checked"></i>
                                                        </span>
                                                        {{ $person->amount_of_persons }}
                                                    </label>
                                                @endforeach
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
                                                @foreach ($complexities as $complexity)
                                                    <label class="filter__item__menu__item">
                                                        <input name="level" id="l1" value="l001" type="checkbox">
                                                        <span class="filter__item__menu__item__checkbox">
                                                            <i class="icon-checked"></i>
                                                        </span>
                                                        {{ $complexity->complexity_level }}
                                                    </label>
                                                @endforeach
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
                            @foreach ($recipes as $recipe)
                                <div class="recipe-item" data-aos="fade-up">
                                    <div class="recipe-item__container" style="">
                                        <div class="recipe-item__img-box">
                                            <div style="background-image: url({{ $recipe->image }})"></div>
                                        </div>
                                        <div class="recipe-item__overlay"></div>
                                        <div class="recipe-item__content">
                                            <div class="recipe-item__category">
                                                @foreach ($recipe->categories as $category)
                                                    <a href="#" class="recipe-item__label">{{ $category->name }}</a>
                                                @endforeach
                                            </div>
                                            <a href="/recipes/show/{{ $recipe->id }}" class="recipe-item__name">{{ $recipe->name }}</a>
                                            <div class="recipe-item__info">
                                                <div class="recipe-item__info__item">
                                                    <i class="recipe-item__info__item__icon icon-timer"></i> {{ $recipe->times->amount_of_time }} мин</div>
                                                <div class="recipe-item__info__item">
                                                    <i class="recipe-item__info__item__icon icon-people"></i> {{ $recipe->persons->amount_of_persons }}</div>
                                                <div class="recipe-item__info__item">
                                                    <i class="recipe-item__info__item__icon icon-people"></i> {{ $recipe->complexity->complexity_level }} в приготовлении</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <div class="container">
                    <div class="recipe-catalog__pagination">
                        <section class="pagination">
                            <div class="pagination__container">
                                {{ $recipes->links('recipe::vendor.pagination.bootstrap-4') }}
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
