<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
    <div class="flex-container flex-direction-tablet">
        <!--Start catalog-->
        <div class="catalog">
            <ul class="catalog__list">
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-1.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-2.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-3.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-1.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-2.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-3.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-1.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-2.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
                <li class="catalog__item">
                    <a class="catalog__link" href="#">
                        <img src="/assets/inner_page/img/catalog-3.jpg" alt="">
                        <div class="catalog__descr">
                            <p class="catalog__text">Шуба из меха норки</p>
                            <p class="catalog__article">Артикул 4556</p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="catalog__action">
                <button class="catalog__btn" type="button">ещё модели</button>
            </div>
            <!--Start pagination-->
            <div class="pagination">
                <ul class="pagination__list">
                    <li class="pagination__item"><span class="pagination__link is-active">1</span>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">2</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">3</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">4</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">5</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">6</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">7</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">8</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">9</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">10</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">11</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">12</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">13</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">14</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">15</a>
                    </li>
                </ul>
            </div>
            <!--End pagination-->
        </div>
        <!--End catalog-->
        <div class="catalog-filter">
            <form class="filter-form" action="/" method="GET">
                <div class="filter-form__left">
                    <div class="filter-form__action">
                        <button class="filter-form__btn filter-form__apply" type="submit">Применить</button>
                        <button class="filter-form__btn filter-form__reset" type="reset">Сбросить</button>
                    </div>
                </div>
                <div class="filter-form__right">
                    <h2 class="filter-form__title">Вид меха</h2>
                    <div class="filter-form__wrap">
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox checked-all-js" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">Все</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">астраган</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">бобр</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">енот</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">каракуль</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">кролик</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">куница</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">лиса</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">норка</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">куница</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">лиса</div>
                            </label>
                        </div>
                        <div class="filter-form__group">
                            <label class="filter-form__label">
                                <input class="filter-form__checkbox" type="checkbox" name="all">
                                <div class="filter-form__custom"></div>
                                <div class="filter-form__text">норка</div>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
            <form class="filter-form" action="/" method="GET">
                <div class="filter-form__left">
                    <div class="filter-form__action">
                        <button class="filter-form__btn filter-form__apply" type="submit">Применить</button>
                        <button class="filter-form__btn filter-form__reset" type="reset">Сбросить</button>
                    </div>
                </div>
                <div class="filter-form__right">
                    <h2 class="filter-form__title">Цвет</h2>
                    <div class="filter-form__color">
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #f4f4e1, #dadac5);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(#fff, #fff);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #bddde8, #9dc2ce);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #fbfb37, #e4e40a);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #7b524c, #512e25);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #e36d5c, #d82208);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #fdb93b, #e39608);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #fbcbd3, #e2acb5);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #9a9a9a, #767676);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #3939fb, #0a0a91);"></div>
                            </div>
                        </label>
                        <label class="filter-form__color-label">
                            <input class="filter-form__radio" type="checkbox" name="color">
                            <div class="filter-form__color-custom">
                                <div class="filter-form__color-btn" style="background-image: linear-gradient(319deg, #383838, #000000);"></div>
                            </div>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>