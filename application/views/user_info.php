<div id="homepage-3">
    <div class="ps-breadcrumb">
        <div class="container">
            <div class="ps-container category-products_breadcrumb padding">
                <ul class="breadcrumb ">
                    <li><a href="{base_url}index.php/main">Главная </a></li>
                    <li>
                        Личная страница </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="forms-blocks">
        <section class="section-forms section-tabs">
            <div class="container my-5">
                <div class="user-info">
                    <div class="up-left-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <ul class="user-info_ul nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"><a id="webdisign-tab" data-toggle="tab" href="#user-info" role="tab" aria-controls="webdisign" aria-selected="true"><img src="{base_url}img/up-user.svg" alt="Icon">Личная информация</a></li>
                            <li class="nav-item" role="presentation"><a id="webdisign-tab" data-toggle="tab" href="#user-order" role="tab" aria-controls="webdisign" aria-selected="true"><img src="{base_url}img/up-cart.svg" alt="Icon">Мои заказы</a></li>
                            <li class="nav-item" role="presentation"><a id="webdisign-tab" data-toggle="tab" href="#user-favorite" role="tab" aria-controls="webdisign" aria-selected="true"><img src="{base_url}img/up-like.svg" alt="Icon">Избранное</a></li>
                            <li class="nav-item" role="presentation"><a id="webdisign-tab" data-toggle="tab" href="#user-save" role="tab" aria-controls="webdisign" aria-selected="true"><img src="{base_url}img/up-save.svg" alt="Icon">Безопасность</a></li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="user-info" role="tabpanel" aria-labelledby="webdisign-tab">
                            <div class="up-content col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="up-content-info">
                                    <h2>Личная информация</h2>
                                    <form action="#" class="up-content-info_form">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-col">
                                                <label for="validationCustom01">Имя*</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Пано Дианова" required>
                                                <div class="valid-feedback">
                                                    Правильно!
                                                </div>
                                            </div>
                                            <div class="form-col">
                                                <label for="validationCustom02">Номер телефона*</label>
                                                <input type="tel" class="form-control" id="validationCustom02" placeholder="+992 XXX XX XX XX" required>
                                                <div class="valid-feedback">
                                                    Правильно!
                                                </div>
                                            </div>
                                            <div class="form-col">
                                                <label for="validationCustom03">Пол</label>
                                                <select class="custom-select">
                                                    <option selected>Мужской</option>
                                                    <option value="1">Женский</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-col">
                                                <label for="validationCustom01">Дата рождения</label>
                                                <input type="date" class="form-control" id="validationCustom01" placeholder="03/11/1999" required>
                                                <div class="valid-feedback">
                                                    Правильно!
                                                </div>
                                            </div>
                                            <div class="form-col">
                                                <label for="validationCustom02">Электронная почта</label>
                                                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="youraddress@mail.ru" aria-describedby="validationTooltipUsernamePrepend" required>
                                            </div>
                                            <div class="form-col">
                                                <label for="validationCustom03">Адрес <span>*</span></label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Введите адрес" required>
                                            </div>
                                        </div>
                                        <button class="form-btn my-4 mx-3">Сохранить</button>
                                    </form>
                                </div>
                            </div>
                            <div class="up-right-sidebar col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="text-center">
                                    <img src="{base_url}img/user-icon.png" alt="Icon">
                                    <form class="form-del">
                                        <div class="input__wrapper">
                                            <input name="file" type="file" name="file" id="input__file" class="input input__file" multiple>
                                            <label for="input__file" class="input__file-button mt-5 ">
                                                <span class="input__file-button-text ">Сменить фото</span>
                                            </label>
                                        </div>
                                        <div class="del-photo">
                                            <span class="text-del text-danger btn">Удалить фото</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="user-order" role="tabpanel" aria-labelledby="webdisign-tab">
                            <div class="up-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="table-title">
                                    <h2 class="pb-5">Мои заказы</h2>
                                </div>
                                <div class="table-content pb-5">
                                    <table class="table table-borderless" style="border-collapse:collapse;">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Дата</th>
                                                <th>Статус</th>
                                                <th>Итого</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                                <td class="table-id">07201</td>
                                                <td>15.12.21</td>
                                                <td><span class="status-delivered">Доставлено</span></td>
                                                <td class="text-success">400.00 сом</td>
                                                <td><img src="{base_url}img/arrow-down.svg" alt="Icon"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="hiddenRow">
                                                    <div class="accordian-body collapse" id="demo1"> 
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row"><img src="{base_url}img/lyncasim.jpg" alt="IMG"></th>
                                                            <td>Линкас сироп</td>
                                                            <td>2 шт.</td>
                                                            <td>100 сомон</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row"><img src="{base_url}img/lyncasim.jpg" alt="IMG"></th>
                                                            <td>Линкас сироп</td>
                                                            <td>2 шт.</td>
                                                            <td>100 сомон</td>
                                                            </tr>
                                                        </tbody>
                                                        <tbody>
                                                            <tr class="table-results_border">
                                                            <td>Стоимост товаров: </td>
                                                            <td class="font-weight-bold">150 TJS</td>
                                                            </tr>
                                                            <tr>
                                                            <td>Стоимост товаров: </td>
                                                            <td class="font-weight-bold">150 TJS</td>
                                                            <td>Итого: </td>
                                                            <td class="font-weight-bold"> 250 TJS</td>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                                                <td class="table-id">02302</td>
                                                <td>15.11.21</td>
                                                <td><span class="status-canceled">Отменен</span></td>
                                                <td class="text-success">40.00 сом</td>
                                                <td><img src="{base_url}img/arrow-down.svg" alt="Icon"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="hiddenRow">
                                                    <div id="demo2" class="accordian-body collapse"> <table class="table">
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row"><img src="{base_url}img/lyncasim.jpg" alt="IMG"></th>
                                                            <td>Линкас сироп</td>
                                                            <td>2 шт.</td>
                                                            <td>100 сомон</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row"><img src="{base_url}img/lyncasim.jpg" alt="IMG"></th>
                                                            <td>Линкас сироп</td>
                                                            <td>2 шт.</td>
                                                            <td>100 сомон</td>
                                                            </tr>
                                                        </tbody>
                                                        <tbody>
                                                            <tr class="table-results_border">
                                                            <td>Стоимост товаров: </td>
                                                            <td class="font-weight-bold">150 TJS</td>
                                                            </tr>
                                                            <tr>
                                                            <td>Стоимост товаров: </td>
                                                            <td class="font-weight-bold">150 TJS</td>
                                                            <td>Итого: </td>
                                                            <td class="font-weight-bold"> 250 TJS</td>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                    </div></div>
                                                </td>
                                            </tr>
                                            <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
                                                <td class="table-id">02315</td>
                                                <td>08.10.21</td>
                                                <td><span class="status-delivered">Доставлено</span></td>
                                                <td class="text-success">40.00 сом</td>
                                                <td><img src="{base_url}img/arrow-down.svg" alt="Icon"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="hiddenRow">
                                                    <div id="demo3" class="accordian-body collapse"> <table class="table">
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row"><img src="{base_url}img/lyncasim.jpg" alt="IMG"></th>
                                                            <td>Линкас сироп</td>
                                                            <td>2 шт.</td>
                                                            <td>100 сомон</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row"><img src="{base_url}img/lyncasim.jpg" alt="IMG"></th>
                                                            <td>Линкас сироп</td>
                                                            <td>2 шт.</td>
                                                            <td>100 сомон</td>
                                                            </tr>
                                                        </tbody>
                                                        <tbody>
                                                            <tr class="table-results_border">
                                                            <td>Стоимост товаров: </td>
                                                            <td class="font-weight-bold">150 TJS</td>
                                                            </tr>
                                                            <tr>
                                                            <td>Стоимост товаров: </td>
                                                            <td class="font-weight-bold">150 TJS</td>
                                                            <td>Итого: </td>
                                                            <td class="font-weight-bold"> 250 TJS</td>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                    </div></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="user-favorite" role="tabpanel" aria-labelledby="webdisign-tab">
                            <div class="up-content col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="favorite-title pb-5">
                                    <h2 class="border-bottom pb-4">Избранное</h2>
                                </div>
                                <div class="favorite-content">
                                    <div class="container">
                                        <div class="d-flex row">
                                            <div class="d-flex mr-5 col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                <div class="owl-item-bg">
                                                    <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                                        <div class="ps-product ps-product--inner ps-product_of_the_day">
                                                            <label>
                                                                <input type="checkbox" id="red">
                                                                <svg width="24" height="24" style="cursor: pointer; float: right;" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path id="shape" class="seat" fill="none" d="M6.20208 0.884277C3.51425 0.884277 1.33459 3.04155 1.33459 5.70309C1.33459 7.85159 2.1864 12.9508 10.5711 18.1054C10.7213 18.1968 10.8938 18.2452 11.0696 18.2452C11.2454 18.2452 11.4178 18.1968 11.568 18.1054C19.9527 12.9508 20.8045 7.85159 20.8045 5.70309C20.8045 3.04155 18.6249 0.884277 15.937 0.884277C13.2492 0.884277 11.0696 3.80477 11.0696 3.80477C11.0696 3.80477 8.8899 0.884277 6.20208 0.884277Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </label>
                                                            <div class="ps-product__thumbnail ps-product__thumbnail_img_div  hover01">
                                                                <a href="{base_url}index.php/main/product/2997?from=main">
                                                                    <img class="imgs" src="{base_url}upload_product/94_Stopgrip__salomat.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="ps-product__container">
                                                                <div class="ps-product__content"><a class="ps-product__title product_title_new" href="{base_url}index.php/main/product/2997">
                                                                        Стопгрипп пор саше №10</a>
                                                                    <div class="ps-product__rating">
                                                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                            </select></div><span>(1)</span>
                                                                    </div>
                                                                    <p class="ps-product__price sale prods_slider"> <span class="ps-product__price-span">

                                                                            55.00 c. </span><a class="ps-product__price-link" href="{base_url}index.php/main/product/2997?from=main">В корзину</a></p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mr-5 col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                <div class="owl-item-bg">
                                                    <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                                        <div class="ps-product ps-product--inner ps-product_of_the_day">
                                                            <label>
                                                                <input type="checkbox" id="red">
                                                                <svg width="24" height="24" style="cursor: pointer; float: right;" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path id="shape" class="seat" fill="none" d="M6.20208 0.884277C3.51425 0.884277 1.33459 3.04155 1.33459 5.70309C1.33459 7.85159 2.1864 12.9508 10.5711 18.1054C10.7213 18.1968 10.8938 18.2452 11.0696 18.2452C11.2454 18.2452 11.4178 18.1968 11.568 18.1054C19.9527 12.9508 20.8045 7.85159 20.8045 5.70309C20.8045 3.04155 18.6249 0.884277 15.937 0.884277C13.2492 0.884277 11.0696 3.80477 11.0696 3.80477C11.0696 3.80477 8.8899 0.884277 6.20208 0.884277Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </label>
                                                            <div class="ps-product__thumbnail ps-product__thumbnail_img_div  hover01">
                                                                <a href="{base_url}index.php/main/product/2997?from=main">
                                                                    <img class="imgs" src="{base_url}upload_product/94_Stopgrip__salomat.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="ps-product__container">
                                                                <div class="ps-product__content"><a class="ps-product__title product_title_new" href="{base_url}index.php/main/product/2997">
                                                                        Стопгрипп пор саше №10</a>
                                                                    <div class="ps-product__rating">
                                                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                            </select></div><span>(1)</span>
                                                                    </div>
                                                                    <p class="ps-product__price sale prods_slider"> <span class="ps-product__price-span">

                                                                            55.00 c. </span><a class="ps-product__price-link" href="{base_url}index.php/main/product/2997?from=main">В корзину</a></p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex mr-5 col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                                <div class="owl-item-bg">
                                                    <div class="owl-item cloned" style="width: 210px; margin-right: 30px;">
                                                        <div class="ps-product ps-product--inner ps-product_of_the_day">
                                                            <label>
                                                                <input type="checkbox" id="red">
                                                                <svg width="24" height="24" style="cursor: pointer; float: right;" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path id="shape" class="seat" fill="none" d="M6.20208 0.884277C3.51425 0.884277 1.33459 3.04155 1.33459 5.70309C1.33459 7.85159 2.1864 12.9508 10.5711 18.1054C10.7213 18.1968 10.8938 18.2452 11.0696 18.2452C11.2454 18.2452 11.4178 18.1968 11.568 18.1054C19.9527 12.9508 20.8045 7.85159 20.8045 5.70309C20.8045 3.04155 18.6249 0.884277 15.937 0.884277C13.2492 0.884277 11.0696 3.80477 11.0696 3.80477C11.0696 3.80477 8.8899 0.884277 6.20208 0.884277Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </label>
                                                            <div class="ps-product__thumbnail ps-product__thumbnail_img_div  hover01">
                                                                <a href="{base_url}index.php/main/product/2997?from=main">
                                                                    <img class="imgs" src="{base_url}upload_product/94_Stopgrip__salomat.jpg" alt="">
                                                                </a>
                                                            </div>

                                                            <div class="ps-product__container">
                                                                <div class="ps-product__content"><a class="ps-product__title product_title_new" href="{base_url}index.php/main/product/2997">
                                                                        Стопгрипп пор саше №10</a>
                                                                    <div class="ps-product__rating">
                                                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="ps-rating" data-read-only="true" style="display: none;">
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                                <option value="1"></option>
                                                                            </select></div><span>(1)</span>
                                                                    </div>
                                                                    <p class="ps-product__price sale prods_slider"> <span class="ps-product__price-span">

                                                                            55.00 c. </span><a class="ps-product__price-link" href="{base_url}index.php/main/product/2997?from=main">В корзину</a></p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="user-save" role="tabpanel" aria-labelledby="webdisign-tab">
                            <div class="up-content col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="user-save-title mb-5">
                                    <h2>Безопасность</h2>
                                </div>
                                <div class="user-save-content">
                                    <form class="user-save-form">
                                        <div class="user-save-div">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="exampleInputPassword1">Пароль*</label>
                                                <input type="password" class="form-control form-control-save" id="validationCustom01" placeholder="Введите новый пароль" required>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <label for="exampleInputPassword2">Повторите пароль*</label>
                                                <input type="password" class="form-control form-control-save" id="validationCustom02" placeholder="Введите повторно пароль" required>
                                            </div>
                                        </div>
                                        <button class="form-btn mr-3">Сохранить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<style>
    label {
        display: block;
    }

    #red {
        display: none;
    }

    svg {
        width: 24px;
        display: block;
    }

    #shape {
        fill: "green";
        stroke: "black";
        stroke-width: 2;
    }

    #red:checked+svg #shape {
        fill: #DD2E44;
        stroke: #DD2E44;
    }
</style>