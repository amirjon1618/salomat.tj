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
                    <?php if (isset($auth)) : ?>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="user-info" role="tabpanel" aria-labelledby="webdisign-tab">
                            <div class="up-content col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="up-content-info">
                                    <h2>Личная информация</h2>
                                    <form action="{base_url}users/update_user" method="post" class="up-content-info_form">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-col">
                                                <label for="validationCustom01">Имя*</label>
                                                <input type="text" class="form-control"  id="validationCustom01" name="name" placeholder="Пано Дианова" required value="<?php echo $name ?>">
                                                <div class="valid-feedback">
                                                    Правильно!
                                                </div>
                                            </div>
                                            <div class="form-col">
                                                <label for="validationCustom02">Номер телефона*</label>
                                                <input type="tel" class="form-control" id="validationCustom02" name="login" placeholder="+992 XXX XX XX XX" required value="<?php echo $phone ?>">
                                                <div class="valid-feedback">
                                                    Правильно!
                                                </div>
                                            </div>
                                            <div class="form-col">
                                                <label for="validationCustom03">Пол</label>
                                                <select class="custom-select"  name="gender">
                                                    <?php if ($gender == 'male') : ?>
                                                        <option selected value="male">Мужской</option>
                                                        <option value="female">Женский</option>
                                                    <?php elseif ($gender == 'famale') : ?>
                                                        <option selected value="female">Женский</option>
                                                        <option value="male">Мужской</option>
                                                    <?php else: ?>
                                                        <option selected value="female">Женский</option>
                                                        <option value="male">Мужской</option>
                                                    <?php endif;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-col">
                                                <label for="validationCustom01">Дата рождения</label>
                                                <input type="date" class="form-control" id="validationCustom01" name="birth_date" value="<?php echo $birth_date ?>">
<!--                                                <input type="date" class="form-control" id="validationCustom01" value="12.11.2222" placeholder="03/11/1999"  required>-->
                                                <div class="valid-feedback">
                                                    Правильно!
                                                </div>
                                            </div>
                                            <div class="form-col">
                                                <label for="validationCustom02">Электронная почта</label>
                                                <input type="text" class="form-control" id="validationTooltipUsername" name="email" placeholder="youraddress@mail.ru" aria-describedby="validationTooltipUsernamePrepend" value="<?php echo $email ?>" required>
                                            </div>
                                            <div class="form-col">
                                                <label for="validationCustom03">Адресс</label>
                                                <input type="text" class="form-control" id="validationTooltiAddress"   name="address" placeholder="А.Навои 34/2" aria-describedby="validationTooltipAddress" value="<?php echo $address ?>"required>
                                            </div>
                                        </div>
                                        <button class="form-btn my-4 mx-3">Сохранить</button>
                                    </form>
                                </div>
                            </div>
                            <div class="up-right-sidebar col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="text-center">
                                    <img src="{base_url}img/users/<?php echo $image ?>" alt="Icon">
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
                                <?php if (!empty($orders)): ?>
                                <?php foreach ($orders as $order): ?>
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
                                            <td class="table-id"><?php echo $order['order']->id; ?></td>
                                            <td><?php echo $order['order']->created_at; $price = 0;  ?></td>
                                            <td><span class="status-delivered"><?php echo $order['status'][0]->status_text; ?></span></td>
                                            <?php foreach ($order['products'] as $product): ?>
                                                <?php $price = $price + $product->product_sold_price ?>
                                            <?php endforeach; ?>
                                            <td class="text-success"><?php echo $price + $order['delivery'][0]->delivery_price ; ?></td>

                                            <td><img src="{base_url}img/arrow-down.svg" alt="Icon"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="hiddenRow">
                                                <div class="accordian-body collapse" id="demo1">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>

                                                            <td colspan="6" class="hiddenRow">
                                                                <div class="accordian-body collapse" id="demo1">
                                                                    <table class="table">
                                                                        <?php foreach ($order['products'] as $product): ?>
                                                                            <tbody>
                                                                            <tr>
                                                                                <th scope="row"><img src="{base_url}upload_product/<?php echo $product->product_pic; ?>" alt="IMG"></th>
                                                                                <td><?php echo $product->product_name; ?></td>
                                                                                <td><?php echo $product->total_count; ?></td>
                                                                                <td><?php echo $product->product_sold_price; ?></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        <?php endforeach; ?>
                                                                    </table>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        </tbody>
                                                        <tbody>
                                                        <tr>
                                                            <td>Стоимост товаров: </td>
                                                            <td class="font-weight-bold"><?php echo $price; ?></td>
                                                            <td>Итого: </td>
                                                            <td class="font-weight-bold"> <?php echo $price + $order['delivery'][0]->delivery_price ; ?></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                            </table>
                        </div>
                                <?php endforeach; ?>
                                <?php else: ?>
                                    <tbody>
                                    <tr>
                                        <td>Заказов нет! </td>
                                    </tr>
                                    </tbody>
                                <?php endif; ?>

                    </div>

                    <?php endif; ?>
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
                        <?php if (isset($auth)) : ?>
                        <div class="user-save-content">
                            <form class="user-save-form" action="{base_url}users/update_user_password" method="post">
                                <div class="user-save-div">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="exampleInputPassword1">Пароль*</label>
                                        <input type="password" class="form-control form-control-save" name="password" id="validationCustom01" placeholder="Введите новый пароль" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="exampleInputPassword2">Повторите пароль*</label>
                                        <input type="password" class="form-control form-control-save"  name="password_confirm" id="validationCustom02" placeholder="Введите повторно пароль" required>
                                    </div>
                                </div>
                                <button class="form-btn mr-3">Сохранить</button>
                            </form>
                        </div>
                        <?php endif; ?>
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