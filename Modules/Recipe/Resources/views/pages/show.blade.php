@extends('recipe::layouts.master')
@section('content')
    <main class="main">
        <a href="navigation.html" class="navigation__link">
            <i>N</i>
        </a>
        <div class="container">
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
        <div class="recipe-details item-details">
            <div class="container">
                <div class="item-details__container">
                    <div class="item-details__left background" style='background-image: url({{ $recipe->image }});'> </div>
                    <div class="item-details__right">
                        <div class="item-details__info">
                            <div class="item-details__info__left">
                                <div class="item-details__info__left__row">
                                    @foreach ($recipe->categories as $category)
                                        <span class="item-label">{{ $category->name }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="item-details__info__right">
                                <i class="item-details__info__right__icon icon-print"></i>
                                <div class="select js-select-container">
                                    <i class="item-details__info__right__icon icon-share js-select-trigger"></i>
                                    <div class="js-select-menu select__menu">
                                        <div class="select__item facebook">
                                            <i class="icon-facebook"></i>
                                        </div>
                                        <div class="select__item twitter">
                                            <i class="icon-twitter"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-details__description">
                            <h2 class="item-details__description__name">{{ $recipe->name }}</h2>
                            <div class="item-details__description__info">
                                <div class="item-details__description__info__item">
                                    <i class="icon-clock"></i>
                                    <span>{{ $recipe->times->amount_of_time }} мин</span>
                                </div>
                                <div class="item-details__description__info__item">
                                    <i class="icon-people"></i>
                                    <span>{{ $recipe->persons->amount_of_persons }}</span>
                                </div>
                                <div class="item-details__description__info__item">
                                    <i class="icon-people icon-cup"></i>
                                    <span>{{ $recipe->complexity->complexity_level }} в приготовлении</span>
                                </div>
                            </div>
                            <p> Суп в хлебном "горшочке" не часто увидишь в меню ресторана. А зря! Ведь рецепт чешского супа "Полевка" очень прост. Попробуйте приготовить суп в хлебе "Полевка" в домашних услових. </p>
                            <p> Лук, морковь и грибы обжарить на растительном масле. Влить вино и выпарить его наполовину. Затем нужно добавить воду и картофель. Когда блюдо будет готово, взбить блендером, посолить и поперчить. </p>
                            <p>{{ $recipe->text }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recipe-details__info">
                <div class="container">
                    <div class="recipe-details__info__content">
                        <div class="recipe-details__ingredients ingredients">
                            <h3 class="ingredients__title">Ингредиенты</h3>
                            <div class="ingredients__main__title">Главные ингредиенты</div>
                            <div class="ingredients__main">
                                <div class="ingredients__main__item">
                                    <div class="ingredients__main__item__photo">
                                        <img src="/img/recipe_details/ingredient1.png" alt=""> </div>
                                    <div class="ingredients__main__item__info">
                                        <div class="popularity-info">
                                            <div class="product__item__rating js-star-rating"> </div>
                                            <div class="product__item__reviews-info reviews-info">
                                                        <span class="reviews-info__quantity">
                                                            <a href="">5 отзывов</a>
                                                        </span>
                                            </div>
                                        </div>
                                        <p class="ingredients__main__item__name">
                                            <a href="#">СОУС ДИП "ФРАНЦУЗСКИЙ"</a>
                                        </p>
                                        <div class="ingredients__main__item__weight">24 г</div>
                                    </div>
                                    <button class="ingredients__main__item__button button button--circle button--white button--shadowed">
                                        <i class="icon-next"></i>
                                    </button>
                                </div>
                                <div class="ingredients__main__item">
                                    <div class="ingredients__main__item__photo">
                                        <img src="/img/recipe_details/ingredient2.png" alt=""> </div>
                                    <div class="ingredients__main__item__info">
                                        <div class="popularity-info">
                                            <div class="product__item__rating js-star-rating"> </div>
                                            <div class="product__item__reviews-info reviews-info">
                                                        <span class="reviews-info__quantity">
                                                            <a href="">5 отзывов</a>
                                                        </span>
                                            </div>
                                        </div>
                                        <p class="ingredients__main__item__name">
                                            <a href="#">Крем мед классик</a>
                                        </p>
                                        <div class="ingredients__main__item__weight">250 г</div>
                                    </div>
                                    <button class="ingredients__main__item__button button button--circle button--white button--shadowed">
                                        <i class="icon-next"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="ingredients__another">
                                <div class="ingredients__another__title">Другие ингредиенты</div>
                                <div class="item-details__table">
                                    <div class="item-details__table__row">
                                        <div class="item-details__table__column item-details__table__column--name">Зелень</div>
                                        <div class="item-details__table__column item-details__table__column--value">250 г</div>
                                    </div>
                                    <div class="item-details__table__row">
                                        <div class="item-details__table__column item-details__table__column--name">Картофель</div>
                                        <div class="item-details__table__column item-details__table__column--value">100 г</div>
                                    </div>
                                    <div class="item-details__table__row">
                                        <div class="item-details__table__column item-details__table__column--name">Лук репчатый</div>
                                        <div class="item-details__table__column item-details__table__column--value">70 г</div>
                                    </div>
                                    <div class="item-details__table__row">
                                        <div class="item-details__table__column item-details__table__column--name">Морковь</div>
                                        <div class="item-details__table__column item-details__table__column--value">0 г</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="recipe-details__cooking cooking">
                            <h3 class="cooking__title">Приготовление</h3>
                            <div class="cooking__stage">
                                <div class="cooking__stage__title">Этап 1</div>
                                <p class="cooking__stage__description">Лук, морковь и грибы обжарить на растительном масле. Влить вино и выпарить его наполовину. Затем нужно добавить воду и картофель. Когда блюдо будет готово, взбить блендером, посолить и поперчить.</p>
                            </div>
                            <div class="cooking__stage">
                                <div class="cooking__stage__title">Этап 2</div>
                                <p class="cooking__stage__description">Лук, морковь и грибы обжарить на растительном масле. Влить вино и выпарить его наполовину. Затем нужно добавить воду и картофель. Когда блюдо будет готово, взбить блендером, посолить и поперчить.</p>
                            </div>
                            <div class="cooking__stage">
                                <div class="cooking__stage__title">Этап 3</div>
                                <p class="cooking__stage__description">Лук, морковь и грибы обжарить на растительном масле. Влить вино и выпарить его наполовину. Затем нужно добавить воду и картофель. Когда блюдо будет готово, взбить блендером, посолить и поперчить.</p>
                            </div>
                            <div class="cooking__stage">
                                <div class="cooking__stage__title">Этап 4</div>
                                <p class="cooking__stage__description">Лук, морковь и грибы обжарить на растительном масле. Влить вино и выпарить его наполовину. Затем нужно добавить воду и картофель. Когда блюдо будет готово, взбить блендером, посолить и поперчить.</p>
                            </div>
                            <div class="cooking__stage">
                                <div class="cooking__stage__title">Этап 5</div>
                                <p class="cooking__stage__description">Лук, морковь и грибы обжарить на растительном масле. Влить вино и выпарить его наполовину. Затем нужно добавить воду и картофель. Когда блюдо будет готово, взбить блендером, посолить и поперчить.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="recipe-slider slider">
            <div class="container">
                <div class="slider__content">
                    <div class="slider__head">
                        <h2 class="slider__name">Смотрите также</h2>
                        <a href="" class="slider__link"> Посмотреть другие рецепты
                            <i class="icon-arr-to-right"></i>
                        </a>
                    </div>
                </div>
                <div class="recipe-slider__body slider__body">
                    @foreach ($recipes as $recipe)
                        <div class="recipe-item">
                            <div class="recipe-item__container" style="">
                                <div class="recipe-item__img-box">
                                    <div style="background-image: url({{ $recipe->image }})"></div>
                                </div>
                                <div class="recipe-item__overlay"></div>
                                <div class="recipe-item__content">
                                    @foreach ($recipe->categories as $category)
                                        <a href="#" class="recipe-item__label">{{ $category->name }}</a>
                                    @endforeach
                                    <a href="#" class="recipe-item__name">{{ $recipe->name }}</a>
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
        <section class="recipe-slider slider">
            <div class="container">
                <div class="slider__content">
                    <div class="slider__head">
                        <h2 class="slider__name">Вы недавно смотрели</h2>
                    </div>
                </div>
                <div class="recipe-slider__body slider__body">
                    @foreach ($lastRecipes as $recipe)
                        <div class="recipe-item">
                            <div class="recipe-item__container" style="">
                                <div class="recipe-item__img-box">
                                    <div style="background-image: url({{ $recipe->image }})"></div>
                                </div>
                                <div class="recipe-item__overlay"></div>
                                <div class="recipe-item__content">
                                    @foreach ($recipe->categories as $category)
                                        <a href="#" class="recipe-item__label">{{ $category->name }}</a>
                                    @endforeach
                                    <a href="#" class="recipe-item__name">{{ $recipe->name }}</a>
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
    </main>
@endsection
