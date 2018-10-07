<div class="popup js-popup  callback-popup ">
    <div class="overlay"></div>
    <div class="popup__container ">
        <i class="popup__close-icon icon-close js-close-popup"></i>
        <h2 class="popup__title"> Форма обратной связи </h2>
        <form class="popup__form form" action="">
            <label class="form-input__container">
                <input type="text" class="input form-input js-input">
                <span class="form__label required js-label">ИМЯ</span>
                <div class="ripple"></div>
            </label>
            <label class="form-input__container">
                <input type="text" class="input form-input js-input">
                <span class="form__label js-label required">EMAIL</span>
                <div class="ripple"></div>
            </label>
            <label class="form-input__container form-input__container--textarea ">
                <textarea type="text" class="input form-input textarea"></textarea>
                <span class="form__label required">СООБЩЕНИЕ</span>
            </label>
            <input type="hidden" name="token" value="{$token}">
            <div class="form__item">
                <button type="submit" class="form__button button button--default button--shadowed button--with-icon button--red">
                    <span class="button__text">Отправить</span>
                    <i class="button__icon icon-next"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<div class="popup js-popup  contact-us-popup ">
    <div class="overlay"></div>
    <div class="popup__container ">
        <i class="popup__close-icon icon-close js-close-popup"></i>
        <h2 class="popup__title"> Свяжитесь с нами </h2>
        <form class="popup__form form" action="">
            <label class="form-input__container">
                <input type="text" class="input form-input js-input">
                <span class="form__label required js-label">ИМЯ</span>
                <div class="ripple"></div>
            </label>
            <label class="form-input__container">
                <input type="text" class="input form-input js-input">
                <span class="form__label js-label required">EMAIL</span>
                <div class="ripple"></div>
            </label>
            <label class="form-input__container">
                <input type="text" class="input form-input js-input">
                <span class="form__label js-label">номер телефона</span>
                <div class="ripple"></div>
            </label>
            <div class="select js-select-container select__container">
                <div class="js-select-trigger select__trigger">
                    <span class="form__label form__label-select js-current-type">тип обращения</span>
                    <i class="icon-arr-to-bottom"></i>
                </div>
                <div class="js-select-name js-select-trigger select__name"></div>
                <ul class="js-select-menu select__menu"> </ul>
            </div>
            <select class="js-popup-select" name="select">
                <option value="r1">Выберите героя</option>
                <option value="r2">Чебурашка</option>
                <option value="r3">Крокодил Гена</option>
                <option value="r4">Шапокляк</option>
                <option value="r5">Крыса Лариса</option>
            </select>
            <label class="form-input__container form-input__container--textarea ">
                <textarea type="text" class="input form-input textarea"></textarea>
                <span class="form__label">СООБЩЕНИЕ</span>
            </label>
            <input type="hidden" name="token" value="{$token}">
            <div class="form__item">
                <button type="submit" class="form__button button button--default button--shadowed button--with-icon button--red">
                    <span class="button__text">Отправить</span>
                    <i class="button__icon icon-next"></i>
                </button>
            </div>
        </form>
    </div>
</div>
<div class="popup js-popup  review-popup ">
    <div class="overlay"></div>
    <div class="popup__container ">
        <i class="popup__close-icon icon-close js-close-popup"></i>
        <h2 class="popup__title"> Добавить отзыв </h2>
        <form class="popup__form form" action="">
            <label class="form-input__container">
                <input type="text" class="input form-input js-input">
                <span class="form__label required js-label">ИМЯ</span>
                <div class="ripple"></div>
            </label>
            <label class="form-input__container">
                <input type="text" class="input form-input js-input">
                <span class="form__label js-label required">EMAIL</span>
                <div class="ripple"></div>
            </label>
            <label class="form-input__container form-input__container--textarea ">
                <textarea type="text" class="input form-input textarea"></textarea>
                <span class="form__label required">ваш отзыв</span>
            </label>
            <div class="form-input__container rating">
                <span class="rating__text">Ваша оценка:</span>
                <div class="js-star-rating-input" value=3></div>
            </div>
            <input type="hidden" name="token" value="{$token}">
            <div class="form__item">
                <button type="submit" class="form__button button button--default button--shadowed button--with-icon button--red">
                    <span class="button__text">Отправить</span>
                    <i class="button__icon icon-next"></i>
                </button>
            </div>
        </form>
    </div>
</div>
