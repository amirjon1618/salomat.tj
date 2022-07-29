<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php if (isset($meta_social_title)) : ?>
        <meta property="og:title" content="{meta_social_title}">
    <?php else : ?>
        <meta property="og:title" content="Купить лекарства онлайн">
    <?php endif; ?>

    <?php if (isset($meta_social_image)) : ?>
        <meta property="og:image" content="{meta_social_image}" />
    <?php else : ?>
        <meta property="og:image" content="{base_url}salomat_apteka.jpg" />
    <?php endif; ?>
    <?php if (isset($meta_social_desc)) : ?>
        <meta property="og:description" content="{meta_social_desc}">
    <?php else : ?>
        <meta property="og:description" content="Более 5 000 лицензионных препаратов имеющие соответствующие сертификаты">
    <?php endif; ?>
    <meta property="og:image:height" content="50" />
    <meta property="og:image:width" content="180" />

    <meta name="twitter:card" content="summary_large_image">
    <title>{title}</title>
    <link rel="stylesheet" href="{base_url}css/style.css">
    <link rel="stylesheet" type="text/css" href="{base_url}src/slider/css/style.css">
    <link rel="stylesheet" type="text/css" href="{base_url}css/vendor.css">
    <link rel="stylesheet" type="text/css" href="{base_url}src/fonts/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{base_url}src/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{base_url}src/vertical-timeline/css/component.css">
    <link rel="stylesheet" type="text/css" href="{base_url}css/css/screen.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{base_url}plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{base_url}fonts/Linearicons/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="{base_url}plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="{base_url}plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{base_url}plugins/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{base_url}plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="{base_url}plugins/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="{base_url}plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="{base_url}plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="{base_url}plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{base_url}css/market-place-1.css">

    <link rel="stylesheet" href="{base_url}plugins/kendo-upload-ui/css/kendo.common.min.css">
    <link rel="stylesheet" href="{base_url}plugins/kendo-upload-ui/css/upload.less">
    <link rel="stylesheet" href="{base_url}plugins/kendo-upload-ui/css/kendo.default-v2.min.css">
    <link rel="stylesheet" href="{base_url}plugins/kendo-upload-ui/css/font-icons.less">
    <link rel="stylesheet" href="{base_url}css/custom.css">

    <script src="{base_url}plugins/jquery-3.4.1.min.js"></script>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <script src="//code.jivosite.com/widget/cGu9Dr4lZj" async></script>


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(62780059, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            ecommerce: "dataLayer"
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/62780059" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162533742-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-162533742-1');
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NRB31HKF0L"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NRB31HKF0L');
    </script>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TFMLHJS');
    </script>
    <!-- End Google Tag Manager -->


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFMLHJS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="enter-btn-bg">
        <div class="enter-btn-modal">
            <div class="page-content">
                <div class="form-v8-content">
                    <div class="enter-form" style="display: none;">
                        <div class="enter-form_reg efr1">
                            <div class="tab">
                                <div class="tab-inner">
                                    <h3 class="tablinks text-center">Вход или регистрация</h3>
                                </div>
                            </div>
                            <form id="form1" class="form-detail" method="post">
                                <div class="tabcontent" id="sign-phone">
                                    <div class="form-row">
                                        <span class="text-label">Телефон</span>
                                        <label class="form-row-inner">
                                            <input type="tel" name="tel-number" minlength="9" maxlength="9" id="tel-number" class="input-text recipe_phone_number" required placeholder="Введите свой номер">
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                    <div class="form-row-last d-grid">
                                        <a href="#"><input type="submit" name="enter" class="enter ef1 enter-reg_btn" value="Вход или  регистрация" ></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="enter-form_reg efr2">
                            <div class="tab">
                                <div class="tab-inner">
                                    <h3 class="tablinks text-center">Вход</h3>
                                </div>
                            </div>
                            <form  id="form2" class="form-detail" action="#" method="post">
                                <div class="tabcontent" id="sign-pass">
                                    <div class="form-row">
                                        <span class="text-label">Пароль</span>
                                        <label class="form-row-inner position-relative">
                                            <input type="password" name="password" id="enter-password" minlength="4" maxlength="32" class="input-text hide-pass" required placeholder="* * * * * * * * * *">
                                            <div class="hide-btn-pass" onclick="showPass()">
                                                <img src="{base_url}img/show-pass.svg" alt="Icon" id="hidePass1">
                                            </div>
                                        </label>
                                        <p class="validate-text"></p>
                                    </div>
                                    <div class="forgot-pass d-flex justify-content-between align-items-center pt-2">
                                        <div class="form-check p-0">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Запомнить
                                            </label>
                                        </div>
                                        <div class="forgot-pass_a">
                                            <a href="#">Забыли пароль?</a>
                                        </div>
                                    </div>
                                    <div class="form-row-last d-flex">
                                        <a href="#"><input type="submit" name="register" class="enter ef2" value="Вход"></a>
                                        <a href="#"><input type="submit" name="register" class="register rf2" value="Отмена"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="enter-form_reg efr3">
                            <div class="tab">
                                <div class="tab-inner">
                                    <h3 class="tablinks text-center">Регистрация</h3>
                                </div>
                            </div>
                            <form id="form3"  class="form-detail " action="#" method="post">
                                <div class="tabcontent2" id="ver-in">
                                    <div class="form-row user-phone">
                                        <span class="text-label">Введите код из смс</span>
                                        <label class="form-row-inner">
                                            <input type="tel" name="tel-number" minlength="4" maxlength="4" id="ver-sms" class="input-text" required placeholder=" __ __ __ __ ">
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                    <p class="validate-text"></p>
                                    <div class="timer-agree">
                                        <div class="showTimer">
                                            <p>Повторная отправка сообщения будет доступна через:</p>
                                            <div class="text-center pb-4">
                                                <span class="min-time"></span>
                                                <span>:</span>
                                                <span class="sec-time"></span>
                                            </div>
                                        </div>
                                        <div class="hideTimer  justify-content-center" style="display: none;">
                                            <a href="#" class="hideTimer_a">Повторная отправка</a>
                                        </div>
                                        <svg class="mx-auto mb-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7526 19.5C7.24795 19.5 3.59625 15.8063 3.59625 11.25C3.59625 6.69365 7.24795 3 11.7526 3C16.2572 3 19.9089 6.69365 19.9089 11.25C19.9089 15.8063 16.2572 19.5 11.7526 19.5ZM2.11328 11.25C2.11328 16.6348 6.42893 21 11.7526 21C17.0762 21 21.3918 16.6348 21.3918 11.25C21.3918 5.86522 17.0762 1.5 11.7526 1.5C6.42893 1.5 2.11328 5.86522 2.11328 11.25Z" fill="#7A769D" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7526 15C12.1621 15 12.494 14.6642 12.494 14.25V11.25C12.494 10.8358 12.1621 10.5 11.7526 10.5C11.3431 10.5 11.0111 10.8358 11.0111 11.25V14.25C11.0111 14.6642 11.3431 15 11.7526 15Z" fill="#7A769D" />
                                            <path d="M12.7412 8.25C12.7412 7.69771 12.2986 7.25 11.7526 7.25C11.2065 7.25 10.7639 7.69771 10.7639 8.25C10.7639 8.80229 11.2065 9.25 11.7526 9.25C12.2986 9.25 12.7412 8.80229 12.7412 8.25Z" fill="#7A769D" />
                                        </svg>
                                        <p class="mb-0">Нажав на кнопку “Продолжить”, я принимаю <a href="#" class="text-primary">условия пользования</a></p>
                                    </div>
                                    <div class="form-row-last d-flex">
                                        <a href="#"><input type="submit" name="register" class="enter ef3" value="Продолжить"></a>
                                        <a href="#"><input type="submit" name="register" class="register rf3" value="Отмена"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="enter-form_reg efr4">
                            <div class="tab">
                                <div class="tab-inner">
                                    <h3 class="tablinks text-center">Регистрация</h3>
                                </div>
                            </div>
                            <form id="form4" class="form-detail " action="#" method="post">
                                <div class="tabcontent2" id="ver-in2">
                                    <div class="form-row">
                                        <span class="text-label">Пароль</span>
                                        <label class="form-row-inner position-relative">
                                            <input type="password" name="password" id="first-password" minlength="4" maxlength="32" class="input-text hide-pass2" required placeholder="* * * * * * * * * *">
                                            <div class="hide-btn-pass" onclick="showPass2()">
                                                <img src="{base_url}img/show-pass.svg" alt="Icon" id="hidePass2">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <span class="text-label">Повторный пароль</span>
                                        <label class="form-row-inner position-relative">
                                            <input type="password" name="password" id="second-password" minlength="4" maxlength="32" class="input-text hide-pass3" required placeholder="* * * * * * * * * *">
                                            <div class="hide-btn-pass" onclick="showPass3()">
                                                <img src="{base_url}img/show-pass.svg" alt="Icon" id="hidePass3">
                                            </div>
                                        </label>
                                    </div>
                                    <p class="validate-text"></p>
                                    <div class="timer-agree">
                                        <svg class="mx-auto mb-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7526 19.5C7.24795 19.5 3.59625 15.8063 3.59625 11.25C3.59625 6.69365 7.24795 3 11.7526 3C16.2572 3 19.9089 6.69365 19.9089 11.25C19.9089 15.8063 16.2572 19.5 11.7526 19.5ZM2.11328 11.25C2.11328 16.6348 6.42893 21 11.7526 21C17.0762 21 21.3918 16.6348 21.3918 11.25C21.3918 5.86522 17.0762 1.5 11.7526 1.5C6.42893 1.5 2.11328 5.86522 2.11328 11.25Z" fill="#7A769D" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7526 15C12.1621 15 12.494 14.6642 12.494 14.25V11.25C12.494 10.8358 12.1621 10.5 11.7526 10.5C11.3431 10.5 11.0111 10.8358 11.0111 11.25V14.25C11.0111 14.6642 11.3431 15 11.7526 15Z" fill="#7A769D" />
                                            <path d="M12.7412 8.25C12.7412 7.69771 12.2986 7.25 11.7526 7.25C11.2065 7.25 10.7639 7.69771 10.7639 8.25C10.7639 8.80229 11.2065 9.25 11.7526 9.25C12.2986 9.25 12.7412 8.80229 12.7412 8.25Z" fill="#7A769D" />
                                        </svg>
                                        <p class="mb-0">Нажав на кнопку “Регистрация”, я принимаю <a href="#" class="text-primary">условия пользования</a></p>
                                    </div>
                                    <div class="form-row-last d-flex">
                                        <a href="{base_url}index.php/main/user_info"><input type="submit" name="register" class="enter ef4" value="Регистрация"></a>
                                        <a href="#"><input type="submit" name="register" class="register rf4" value="Отмена"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header header--standard header--market-place-1" data-sticky="true">
        <div class="header__top header_top">
            <div class="container">
                <div class="header__left">
                    <p>Интернет Аптека Саломат - доставка лекарств на дом !</p>
                </div>
                <div class="header__right">
                    <ul class="header__top-links">
                        <li><a href="{base_url}index.php/main/page/1">О проекте</a></li>
                        <li><a href="{base_url}index.php/main/page/2">Как сделать заказ</a></li>
                        <li><a href="{base_url}index.php/main/page/3">Доставка и оплата</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__content">
            <div class="container">
                <div class="header__content-left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Каталог товаров</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                <?php foreach ($categories as $cat) : ?>
                                    <li class="menu-item-has-children has-mega-menu">
                                        <a href="#"><img src="{base_url}img/vector-icon1.svg" alt="Icon" style="padding-right: 15px;"> <?= $cat['category_name'] ?></a>
                                        <div class="mega-menu">
                                            <div class="mega-menu__column">
                                                <ul class="mega-menu__list">
                                                    <?php foreach ($cat['sub_cat'] as $sub_cat) : ?>
                                                        <li>
                                                            <a href="{base_url}index.php/main/categoryProducts/<?= $sub_cat['id'] ?>">
                                                                <?= $sub_cat['category_name'] ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <a class="ps-logo" href="{base_url}"><img src="{base_url}img/logo.png" alt=""></a>
                </div>
                <div class="header__content-center" id="srch_res_list">
                    <form class="ps-form--quick-search" action="<?= base_url("main/searchProductResult") ?>" method="get">
                        <div class="form-group--icon"><i class="icon-magnifier"></i>

                        </div>

                        <input class="form-control srch_pr_inp" name="srch_pr_inp" type="text" placeholder="Найти по названию среди более 5 000 лекарств ...">

                        <button class="srch_submit_btn" type="submit">Найти</button>

                    </form>
                    <!-- PRODUCT SEARCH RESULTS HERE -->
                    <div class="srch-results">

                    </div>


                </div>

                <div class="header__content-right">
                    <div class="header__actions">
                        <!-- <a class="header__extra header_phone_number" href="tel:9990"> -->
                        <a class="header__extra header_phone_number call" href="javascript:void(0)" onclick="window.location='tel:9990'">
                            <strong>
                                <img src="{base_url}img/tel.svg " alt="" style="width: 25px; margin-right: 10px;"> 99-90
                            </strong>
                            <p class="text-muted">09:00-18:00</p>
                        </a>
                        <div class="ps-cart--mini">
                            <a class="header__extra header_cart_a" href="#">
                                <img src="{base_url}img/cart.svg" style="margin-top: 10px;">
                                <span class="header_cart_tot_span">
                                    <i id="total_count_in_cart_header">0</i>
                                </span>
                            </a>
                            <div class="ps-cart__content">
                                <div class="ps-cart__items" id="ps-cart__items">

                                </div>
                                <a href="" id=""></a>
                                <div class="ps-cart__footer">
                                    <hr>
                                    <h3 class="cart_sum_h">Общая сумма:<strong class="total_cart_sum"></strong></h3>
                                    <a class="ps-btn d-flex justify-content-center" href="{base_url}index.php/main/cart_shopping">Перейти в корзину</a>
                                    <figure>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        
                        <?php if (!isset($auth)) : ?>
                            <div class="ps-block--user-header">
                            <div class="ps-block__right" onclick="onPsBlockRight()"><a class="ps-btn" href="#" id="enter-profile">Войти</a></div>
                        <?php else : ?>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                    <img class="rounded-circle" src="{base_url}img/users/<?php echo $image ?? null ?>" alt="User Icon" />
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                <img class="rounded-circle" src="{base_url}img/users/<?php echo $image ?? null ?>" alt="User Icon" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                <a href="#"><?php echo($name  ?? null); ?></a>
                                                </h5>
                                                <span class="email"><?php echo($email ?? null); ?></span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="{base_url}index.php/main/user_info">
                                                    <i class="zmdi zmdi-account"><img src="{base_url}img/up-user.svg" alt="icon"></i>Личная информация</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"><img src="{base_url}img/up-cart.svg" alt="icon"></i>Мои заказы</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"><img src="{base_url}img/up-like.svg" alt="icon"></i>Избранное</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"><img src="{base_url}img/up-save.svg" alt="icon"></i>Безопастность</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                        <a href="{base_url}users/web_log_out">
                                                <i class="zmdi zmdi-power"></i>Выход</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Каталог товаров</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">

                                <!--mega menu-->
                                <!--Лекарственные препараты-->
                                <?php foreach ($categories as $cat) : ?>
                                    <li class="menu-item-has-children has-mega-menu">
                                        <a href="#"><img src="{base_url}img/vector-icon1.svg" alt="Icon" style="padding-right: 15px;"><?= $cat['category_name'] ?></a>
                                        <div class="mega-menu">
                                            <div class="mega-menu__column">
                                                <ul class="mega-menu__list">
                                                    <?php foreach ($cat['sub_cat'] as $sub_cat) : ?>
                                                        <li>
                                                            <a href="{base_url}index.php/main/categoryProducts/<?= $sub_cat['id'] ?>">
                                                                <?= $sub_cat['category_name'] ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation__right">
                    <ul class="menu header_links">
                        <li class="">
                            <a href="{base_url}index.php/main/sales/11"><img src="{base_url}img/alergi.svg" /> При алергии</a>
                        </li>
                        <li class="">
                            <a href="{base_url}index.php/main/categoryProducts/178"><img src="{base_url}img/vitamin.svg" /> Витамины</a>
                        </li>
                        <li class="">
                            <a href="{base_url}index.php/main/sales/9"><img src="{base_url}img/skidki.svg" /> Скидки</a>
                        </li>
                    </ul>
                    <!-- <div class="ps-block--header-hotline inline">
                        <p><strong><i class="icon-telephone"></i>+992 888 88 6006</strong></p>
                    </div> -->
                </div>
            </div>
        </nav>
    </header>

    <!-- MOBILE -->

    <header class="header header--mobile" data-sticky="true">
        <div class="navigation--mobile srch_inp_header_div">
            <a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <div class="navigation__left">
                <a class="ps-logo" href="{base_url}"><img class="header-logo_img" src="{base_url}img/logo.png" alt=""></a>
            </div>
            <div class="navigation__right">
                <!-- <div class="header__actions"> -->
                <!-- <div class="ps-cart--mini header_phone_number"> -->
                <a class="header__extra header_phone_number call" href="javascript:void(0)" onclick="window.location='tel:9990'" target="_blank">
                    <strong>
                        <img src="/img/tel.svg " alt="" style="width: 20px; margin-right: 10px;">99-90
                    </strong>
                    <p class="text-muted">09:00-18:00</p>
                </a>
                <!-- </div> -->
                <!--div class="ps-block--user-header">
                        <div class="ps-block__left"><i class="icon-user"></i></div>
                        <div class="ps-block__right"><a href="my-account.html">Login</a><a href="my-account.html">Register</a></div>
                        -->
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
        </div>
        <div class="ps-search--mobile srch_inp_div">
            <form class="ps-form--search-mobile" action="<?= base_url("main/searchProductResult") ?>" method="get">
                <div class="form-group--nest">
                    <input class="form-control srch_pr_inp_mobile" name="srch_pr_inp" onkeyup="input_type_mobile('srch_pr_inp_mobile', 'mobile')" type="text" placeholder="Искать по названию среди 5 000 лекарств и товаров...">
                    <button type="submit" class="search_icon_btn"><i class="icon-magnifier"></i></button>
                </div>
            </form>
            <div class="srch-results_mobile srch-results-mobile__header">

            </div>
        </div>
    </header>
    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Корзина</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__content">
                            <div class="ps-cart__items" id="ps-cart__items">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Общая сумма:<strong class="total_cart_sum"></strong></h3>
                    <figure>
                        <a class="ps-btn" href="{base_url}index.php/main/cart_shopping">Корзина</a>
                        <a class="ps-btn checkout" href="{base_url}index.php/main/checkout">Оформление</a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><svg style="display: flex; color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg></a>
            <h3>Категории</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <?php foreach ($categories as $cat) : ?>
                    <li class="menu-item-has-children has-mega-menu">
                        <a href="#"> <?= $cat['category_name'] ?></a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <?php foreach ($cat['sub_cat'] as $sub_cat) : ?>
                                    <a href="<?= $base_url ?>index.php/main/categoryProducts/<?= $sub_cat['id'] ?>">
                                        <h4>
                                            <?= $sub_cat['category_name'] ?><span class="sub-toggle"></span>
                                        </h4>
                                    </a>
                                    <ul class="mega-menu__list" style="height: max-content;">
                                        <?php foreach ($sub_cat['sub_cat'] as $sub_sub_cat) : ?>
                                            <li>
                                                <a href="<?= $base_url ?>index.php/main/categoryProducts/<?= $sub_sub_cat['id'] ?>">
                                                    <?= $sub_sub_cat['category_name'] ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content">
            <a class="navigation__item" href="{base_url}">
                <svg style="margin: 0 auto;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.9085 22.8605C10.0618 22.6511 9.30668 22.1681 8.75909 21.4854C8.2115 20.8027 7.90167 19.9581 7.87716 19.0812C7.84927 18.2195 7.85326 17.3579 7.87716 16.4962C7.87716 16.1515 7.76562 16.0594 7.43898 16.0674C6.64229 16.0874 5.84561 16.0674 5.04892 16.0674C2.71862 16.0433 0.854375 14.1477 0.961928 11.9234C0.979672 11.3704 1.10859 10.8268 1.34089 10.3253C1.5732 9.8238 1.90408 9.37487 2.31357 9.00558C2.72306 8.63629 3.20267 8.3543 3.72345 8.17662C4.24424 7.99893 4.79541 7.92925 5.3437 7.97177C5.62254 7.97177 5.78187 8.07597 5.81374 8.37254C6.07267 10.8173 8.11616 12.4083 10.327 12.8852C11.2193 13.0776 12.1354 12.9774 13.0237 13.1578C13.8438 13.3005 14.6004 13.6937 15.1907 14.2839C15.4306 14.5182 15.6212 14.7985 15.7512 15.1083C15.8812 15.4182 15.948 15.7511 15.9476 16.0874C15.9476 17.0292 15.9476 17.971 15.9476 18.8928C15.9237 20.9608 14.5574 22.7122 12.4979 22.9005C11.9704 22.9882 11.4311 22.9746 10.9085 22.8605Z" fill="url(#paint0_linear_2575_7330)" />
                    <path d="M7.901 6.30454C7.95279 5.7114 7.83329 4.96195 8.00856 4.22052C8.19509 3.22812 8.74718 2.34317 9.55437 1.7427C10.3616 1.14224 11.3643 0.870539 12.3621 0.981963C13.3598 1.09339 14.279 1.57972 14.9356 2.34366C15.5923 3.1076 15.938 4.09282 15.9037 5.10222C15.9037 5.92781 15.9037 6.75741 15.9037 7.58701C15.9037 7.91565 15.9914 8.03588 16.3339 8.02786C17.1904 8.02786 18.0508 8.02786 18.9072 8.02786C19.9637 8.02786 20.9769 8.4501 21.7239 9.2017C22.471 9.95329 22.8907 10.9727 22.8907 12.0356C22.8907 13.0985 22.471 14.1179 21.7239 14.8695C20.9769 15.6211 19.9637 16.0433 18.9072 16.0433C18.7638 16.0433 18.6204 16.0433 18.477 16.0433C18.2141 16.0433 18.0787 15.9712 18.0349 15.6746C17.7321 12.9814 15.4058 11.4024 13.0516 11.0457C12.1912 10.9174 11.3068 11.0457 10.4544 10.7772C9.73347 10.58 9.07942 10.1894 8.56225 9.64698C8.32912 9.38526 8.15078 9.07897 8.03785 8.7464C7.92493 8.41383 7.87974 8.06178 7.90499 7.71125C7.91694 7.27441 7.901 6.87364 7.901 6.30454Z" fill="url(#paint1_linear_2575_7330)" />
                    <defs>
                        <linearGradient id="paint0_linear_2575_7330" x1="23.0249" y1="-0.924134" x2="2.52488" y2="21.0759" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#4839C3" />
                            <stop offset="1" stop-color="#3CE682" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_2575_7330" x1="15.3944" y1="0.957489" x2="3.02489" y2="15.5759" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#4839C3" />
                            <stop offset="1" stop-color="#3CE682" />
                        </linearGradient>
                    </defs>
                </svg>
                <span> Главная</span>
            </a>
            <a class="navigation__item ps-toggle--sidebar" onclick="onPsBlockRight()" href="enter-profile">
                <svg style="margin: 0 auto;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.22582 3.34825C4.53799 3.34825 2.35834 5.50552 2.35834 8.16706C2.35834 10.3156 3.21015 15.4147 11.5949 20.5694C11.7451 20.6608 11.9175 20.7091 12.0933 20.7091C12.2691 20.7091 12.4415 20.6608 12.5917 20.5694C20.9765 15.4147 21.8283 10.3156 21.8283 8.16706C21.8283 5.50552 19.6486 3.34825 16.9608 3.34825C14.273 3.34825 12.0933 6.26874 12.0933 6.26874C12.0933 6.26874 9.91364 3.34825 7.22582 3.34825Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span> Избранное</span>
            </a>
            <a class="navigation__item" href="{base_url}index.php/main/recipe">
                <svg style="margin: 0 auto; color: A8A8A8;" width="24px" height="24px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-camera">
                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                    <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                </svg>
                <span> э-Рецепт</span>
            </a>
            <a class="navigation__item ps-toggle--sidebar" href="#cart-mobile">
                <svg style="margin: 0 auto;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.7636 9.07788H2.28568C1.79794 9.07788 1.40256 9.52268 1.40256 10.0714V10.7337C1.40256 11.2824 1.79794 11.7272 2.28568 11.7272H2.58005L3.54089 19.294C3.66522 20.2729 4.41043 21 5.28939 21H18.7106C19.5896 21 20.3348 20.2729 20.4591 19.294L21.4199 11.7272H21.7143C22.2021 11.7272 22.5974 11.2824 22.5974 10.7337V10.0714C22.5974 9.52268 22.2021 9.07788 21.7143 9.07788H19.2364L15.3073 3M4.7636 9.07788L8.69275 3.00004M4.7636 9.07788H19.0213M8.55866 13.0674V17.5727M12.0491 13.0674V17.5727M15.5395 13.0674V17.5727" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <span> Корзина</span>
                <span class="footer_cart_tot_span">
                    <i id="total_count_in_cart_footer">0</i>
                </span>
            </a>
            <a class="navigation__item" onclick="onPsBlockRight()"  href="#" id="enter-profile">
                <svg style="margin: 0 auto;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0001 11.3412C10.894 11.3412 9.83316 10.9018 9.05102 10.1196C8.26888 9.33751 7.82948 8.2767 7.82948 7.17059C7.82948 6.06448 8.26888 5.00368 9.05102 4.22154C9.83316 3.4394 10.894 3 12.0001 3C13.1062 3 14.167 3.4394 14.9491 4.22154C15.7313 5.00368 16.1707 6.06448 16.1707 7.17059C16.1707 8.2767 15.7313 9.33751 14.9491 10.1196C14.167 10.9018 13.1062 11.3412 12.0001 11.3412Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M4.54742 21V19.7579C4.54742 18.4402 5.07087 17.1765 6.00262 16.2447C6.93437 15.313 8.19809 14.7896 9.51578 14.7896H14.4841C15.8018 14.7896 17.0655 15.313 17.9973 16.2447C18.929 17.1765 19.4525 18.4402 19.4525 19.7579V21" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <span> Профиль</span>
            </a>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="<?= base_url("main/searchProductResult") ?>" method="get">
                <div class="form-group--nest">
                    <input class="form-control srch_pr_inp_mobile_aside" name="srch_pr_inp" onkeyup="input_type_mobile('srch_pr_inp_mobile_aside', 'sidebar')" type="text" placeholder="Искать по названию среди 5 000 лекарств и товаров...">
                    <button type="submit" class="search_icon_btn"><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="srch-results_mobile srch-res_mob_sidebar">

        </div>
        <div class="navigation__content"></div>
    </div>

    <div class="toast toast_empty fade hide">
        <div class="toast-body">
            <i class="fa fa-exclamation-triangle"></i>
            Корзина пуста!
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <!-- <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="toast fade show" style="position: absolute; top: 0; right: 0;">

            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div> -->
    <!--nav class="navigation--mobile-product"><a class="ps-btn ps-btn--black" href="shopping-cart.html">Add to cart</a><a class="ps-btn" href="checkout.html">Buy Now</a></nav-->
</body>
  <style>
        .enter-btn-bg {
            justify-content: center;
            align-items: center;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 10000;
            background: red;
            width: 100vw;
            height: 100vh;
            background: #a8a8a8a8;
            transition: 1000ms;
            display: none;
        }

        .ver-form {
            display: none;
        }

        .pass-form {
            display: none;
        }

        .user-phone {}

        .verification-form {
            position: absolute;
        }

        .active-animation {
            animation: showOpacity 0.3s forwards alternate linear;
        }

        .disactive-animation {
            animation: hideOpacity 0.3s forwards alternate linear;
        }

        @keyframes showOpacity {
            from {
                opacity: 0.3;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes hideOpacity {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        body {
            margin: 0;
        }

        .page-content {
            width: 100%;
            margin: 0 auto;
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -o-justify-content: center;
            -ms-justify-content: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            align-items: center;
            -o-align-items: center;
            -ms-align-items: center;
            -moz-align-items: center;
            -webkit-align-items: center;
        }

        .form-v8-content {
            background: #fff;
            border-radius: 8px;
            -o-border-radius: 8px;
            -ms-border-radius: 8px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            margin: 177px 0;
            font-family: 'Source Sans Pro', sans-serif;
            color: #444444;
            position: relative;
            display: flex;
            display: -webkit-flex;
        }

        .form-v8-content .form-left {
            margin-bottom: -4px;
        }

        .form-v8-content .form-left img {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        .form-v8-content .enter-form {
            position: relative;
            width: 100%;
            padding: 35px 40px;
            background: #fff;
            border-radius: 5px;
        }

        .form-v8-content .tab {
            margin: 5px 0 26px;
            width: 100%;
            display: flex;
            display: -webkit-flex;
            justify-content: space-between;
            -o-justify-content: space-between;
            -ms-justify-content: space-between;
            -moz-justify-content: space-between;
            -webkit-justify-content: space-between;
        }

        .form-check {
            padding: 10px 0 20px 0;
        }

        .form-v8-content .tab .tab-inner {
            width: 100%;
        }

        .form-v8-content .tab .tablinks {
            background: transparent;
            border: none;
            outline: none;
            -o-outline: none;
            -ms-outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 26px;
            font-weight: 400;
            color: #444;
            border-bottom: 3px solid;
            border-bottom-color: rgba(255, 255, 255, 0.2);
            width: 100%;
        }

        .form-v8-content .tab .tablinks.active {
            font-weight: 500;
            color: #444444;
            border-bottom-color: #4839C3;
        }

        .form-v8-content .form-detail {}

        .form-v8-content .form-row {
            width: 100%;
            position: relative;
            display: block;
        }

        .form-v8-content .form-row .form-row-inner {
            position: relative;
        }

        .form-v8-content .form-row .form-row-inner .label {
            position: absolute;
            top: -2px;
            left: 10px;
            font-size: 18px;
            color: #a8a8a8;
            padding: 10px;
            font-weight: 400;
            transform-origin: 0 0;
            transition: all .2s ease;
            -moz-transition: all .2s ease;
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            -ms-transition: all .2s ease;
        }
        .forgot-pass_a a{
            color: #1EBEBE;
        }

        .text-label {
            padding: 10px 0;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 16px;
            color: #A8A8A8;
        }

        .form-check {
            display: inline-block;
        }

        .form-check-input {
            display: flex;
            width: 20px !important;
            margin: 0 5px 5px 0;
        }

        .form-check-input:focus {
            box-shadow: none;
        }

        .form-check-label {
            padding: 0 30px;
            color: #A8A8A8;
        }

        .form-v8-content .form-row .form-row-inner .border {
            position: absolute;
            bottom: 31px;
            left: 0;
            height: 1px;
            width: 100%;
            background: #53c83c;
            transform: scaleX(0);
            -moz-transform: scaleX(0);
            -webkit-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform-origin: 0 0;
            transition: all .15s ease;
            -moz-transition: all .15s ease;
            -webkit-transition: all .15s ease;
            -o-transition: all .15s ease;
            -ms-transition: all .15s ease;
        }

        .form-v8-content .form-detail .input-text {
            border: 1px solid #E0E0E0;
            border-radius: 3px;
            height: 45px;
            width: 350px;
            padding: 5px 0 0 20px;
        }

        .form-v8-content .form-detail input {
            width: 100%;
            border-bottom-color: rgba(255, 255, 255, 0.2);
            background: transparent;
            color: #333;
        }

        .enter-reg_btn {
            margin-right: 0 !important;
            width: 350px !important;
        }
        
        .form-v8-content .form-detail .enter {
            background: #1EBEBE;
            border-radius: 5px;
            color: #fff;
            width: 160px;
            height: 44px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            font-size: 18px;
            margin-right: 15px;
        }

        .form-v8-content .form-detail .register {
            border-radius: 5px;
            border: 1px solid #1EBEBE !important;
            color: #1EBEBE;
            width: 160px;
            height: 44px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            font-size: 18px;
        }

        .form-v8-content .form-detail .enter:hover {
            background: #18A1A1;
            border-radius: 5px;
            color: #fff;
        }

        .form-v8-content .form-detail .register:hover {
            background: #1EBEBE;
            color: #fff;
        }


        /* Responsive */
        @media screen and (max-width: 991px) {
            .form-v8-content {
                margin: 180px 20px;
                flex-direction: column;
                -o-flex-direction: column;
                -ms-flex-direction: column;
                -moz-flex-direction: column;
                -webkit-flex-direction: column;
            }

            .form-v8-content .form-left {
                width: 100%;
            }

            .form-v8-content .form-left img {
                width: 100%;
                border-bottom-left-radius: 5px;
                border-top-right-radius: 5px;
            }

            .form-v8-content .enter-form {
                width: auto;
                border-top-right-radius: 5px;
                border-bottom-left-radius: 5px;
            }

            .form-v8-content .tab {
                margin-top: 45px;
            }

            .form-v8-content .form-detail .register {
                margin-bottom: 80px;
            }
        }

        @media screen and (max-width: 325px) {
            .form-v8-content .tab {
                flex-direction: column;
                -o-flex-direction: column;
                -ms-flex-direction: column;
                -moz-flex-direction: column;
                -webkit-flex-direction: column;
            }
        }
    </style>
    <script>
        function remove_from_header_cart(id) {

            var mydata = $.parseJSON(localStorage.getItem("product_list"));

            if (mydata.length == 1) {
                // $.removeCookie('product_list', {
                //     path: '/'
                // });
                localStorage.removeItem("product_list")
                $('.pr-list').html('');
                if (typeof goHome == 'function') {
                    goHome();
                }
                // $.cookie('product_list', '', {expires: -1});
            } else {
                mydata.forEach(function(elem, index) {
                    if (elem.product_id == id) {
                        mydata.splice(index, 1);
                        $('#prod_list' + id).remove();
                    }
                });
                // $.cookie("product_list", JSON.stringify(mydata), {
                //     path: '/'
                // });
                localStorage.setItem("product_list", JSON.stringify(mydata))
            }
            set_prods_header();
            if (typeof product_list == "function") {
                product_list();
            };
            if (typeof set_pr_checkout == "function") {
                set_pr_checkout();
            };
            if (typeof set_pr_checkout == "function") {
                total_sum();
            };

        }
        
        let isShowPass = false;
        let isShowPass2 = false;
        let isShowPass3 = false;

        function showPass() {
            isShowPass = !isShowPass;
            if (isShowPass) {
                document.querySelector(".hide-pass").type = "text";
                hidePass1.src = "{base_url}img/hide-pass.svg";
            } else {
                document.querySelector(".hide-pass").type = "password";
                hidePass1.src = "{base_url}img/show-pass.svg";
            }
        }
        function showPass2() {
            isShowPass2 = !isShowPass2;
            if (isShowPass2) {
                document.querySelector(".hide-pass2").type = "text";
                hidePass2.src = "{base_url}img/hide-pass.svg";
            } else {
                document.querySelector(".hide-pass2").type = "password";
                hidePass2.src = "{base_url}img/show-pass.svg";
            }
        }

        function showPass3() {
            isShowPass3 = !isShowPass3;
            if (isShowPass3) {
                document.querySelector(".hide-pass3").type = "text";
                hidePass3.src = "{base_url}img/hide-pass.svg";
            } else {
                document.querySelector(".hide-pass3").type = "password";
                hidePass3.src = "{base_url}img/show-pass.svg";
            }
        }

        function set_prods_header() {

            if (localStorage.getItem("product_list")) {
                $('.checkout').show();
                $('.ps-cart__footer').find('h3').show();
                $('.ps-cart__footer').find('.cart_empty_text').remove();
                $('.ps-cart__footer').css('text-align', '');
                $('.ps-cart__footer').find('figure').css('justify-content', '');

                var mydata = $.parseJSON(localStorage.getItem("product_list"));
                var total_sum = 0;
                var arr = [];
                mydata.forEach(function(item, index) {
                    total_sum += (item.product_count * item.product_price);
                });
                $('.total_cart_sum').text(total_sum + ' сом');

                $('#total_count_in_cart_header').text(mydata.length);
                $('#total_count_in_cart_footer').text(mydata.length);
                if (mydata.length > 2) {
                    mydata.splice(2);
                }
                $('.ps-cart__items').html('');
                mydata.forEach(function(item) {
                    html = "<div class=\"ps-product--cart-mobile\" id=\"prod_list" + item.product_id + "\">\n" +
                        "        <div class=\"ps-product__thumbnail hover01\">\n" +
                        "            <a href=\"<?= $base_url ?>upload_product/" + item.product_pic + "\">\n" +
                        "                <img src=\"<?= $base_url ?>upload_product/" + item.product_pic + "\" alt=\"\"></a>\n" +
                        "        </div>\n" +
                        "        <div class=\"ps-product__content\">\n" +
                        "            <i style=\"cursor:pointer\" class=\"ps-product__remove icon-cross\" id=\"ps-product__remove\" onclick=\"remove_from_header_cart(" + item.product_id + ")\"></i>\n" +
                        "            <a href=\"<?= $base_url ?>index.php/product/" + item.product_id + "\">" + item.product_name + "</a>\n" +
                        "            <p>" + item.product_brand + "</p><small>" + item.product_count + " x " + item.product_price + " c.</small>\n" +
                        "        </div>\n" +
                        "    </div>";


                    $('.ps-cart__items').append(html);
                });

                if (($.parseJSON(localStorage.getItem("product_list"))).length > 2) {
                    var more = "<div><a style=\"float:right;font-size:16px;color:#33c6a5\" href=\"<?= $base_url ?>index.php/main/cart_shopping\">Все продукты <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>\n</a></div>";
                    $('.ps-cart__items').append(more);
                }
            } else {
                $('.ps-cart__items').html('');
                $('.total_cart_sum').html('');
                $('.checkout').hide();
                $('.ps-cart__footer').find('h3').hide();
                $('.ps-cart__footer').prepend("<h3 class=\"cart_empty_text\">Корзина пуста <i class=\"fa fa-shopping-cart\"></i></h3>");
                $('.ps-cart__footer').find('h3.cart_empty_text').css('color', 'gray');
                $('.ps-cart__footer').css('text-align', 'center');
                $('.ps-cart__footer').find('figure').css('justify-content', 'center');
                $('#total_count_in_cart_header').html('0');
                $('#total_count_in_cart_footer').html('0');
            }
        }

        function input_type() {
            $('.srch_pr_inp').keyup(function() {
                if ($('.srch_pr_inp').val() == '') {
                    $('.srch-results_mobile').hide();
                }
                $('.srch-results').html('');
                $('.srch-results').css('display', 'none');

                $.getJSON("{base_url}index.php/main/search_product?q=" + $('.srch_pr_inp').val(), function(data, status) {
                    var res = data;
                    if (res.length == 0) {
                        var html_empty = "<div class=\"srch-results-empty\">" +
                            "<div>" +
                            "<strong id=\"res-prod-empty\">Ничего не найдено ...</strong>" +
                            "</div>" +
                            "</div>";
                        $('.srch-results').html('');

                        $('.srch-results').append(html_empty);
                    } else {
                        $('.srch-results').html('');
                        if (res.length > 5) {
                            res.splice(5);
                        }
                        res.forEach(function(prod, index, arr) {

                            var html_list;
                            if (prod.product_old_price != 0) {
                                html_list =
                                    "<a href=\"{base_url}index.php/main/product/" + prod.id + "\">" +
                                    "<div class=\"ps-product--cart-mobile srch_prod_list\">\n" +
                                    "        <div class=\"ps-product__content srch_ps-product__content\">\n" +
                                    "            <div class=\"prod_pic\"><img src=\"<?= $base_url ?>upload_product/" + prod.product_pic + "\"></div>" +
                                    "            <div class=\"srch_prod_price \">" + prod.product_name + "\n" +
                                    "                <p class=\"ps-product__price sale\">" + prod.product_price + " сом <del>" + prod.product_old_price + "</del></p>" +
                                    "            </div>\n" +
                                    "        </div>\n" +
                                    "    </div>" +
                                    "</a>";
                            } else {
                                html_list =
                                    "<a href=\"{base_url}index.php/main/product/" + prod.id + "\">" +
                                    "<div class=\"ps-product--cart-mobile srch_prod_list\">\n" +
                                    "        <div class=\"ps-product__content srch_ps-product__content\">\n" +
                                    "            <div class=\"prod_pic\"><img src=\"<?= $base_url ?>upload_product/" + prod.product_pic + "\"></div>" +
                                    "            <div class=\"srch_prod_price \">" + prod.product_name + "\n" +
                                    "                <p class=\"ps-product__price  sale\">" + prod.product_price + " сом</p>" +
                                    "            </div>\n" +
                                    "        </div>\n" +
                                    "    </div>" +
                                    "</a>";
                            }
                            // "<a href=\"{base_url}index.php/main/product/" + prod.id + "\">" +
                            //     "<div class=\"each_prod d-flex align-items-center justify-content-between\">" +
                            //     "<div class=\"prod_pic\"><img src=\"{base_url}upload_product/" + prod.product_pic + "\" alt=\"pic\"></div>" +
                            //     "<strong class=\"align-self-center\" id=\"res-prod-name\">" + prod.product_name + "</strong>" +
                            //     "<strong class=\"align-self-center\" id=\"res-prod-price\">" + prod.product_price + " cом.</strong>" +
                            //     "</div>" +
                            //     "</a>";
                            // "<div class=\"d-flex align-items-center justify-content-end\"><i onclick=\"add_to_cart(" + prod.id + ")\" style=\"cursor:pointer\" class=\"fa fa-plus add_icon\"></i>";

                            $('.srch-results').append(html_list);
                            if (index != arr.length - 1) {
                                $('.srch_prod_list').css({
                                    'cssText': 'border-bottom: 1px solid #e1e1e1 !important'
                                });
                            }
                        });
                    }
                    $('.srch-results').css('display', 'block');

                });
                $(document).click(function(event) {
                    if (!$(event.target).is(".srch_pr_inp, .srch-results, .res-prod-empty, .add_pr_to_cart, add_icon")) {
                        $(".srch-results").css('display', 'none');
                        $(".srch-results").html('');
                    }
                });
            });
            // if ()
        }

        function input_type_mobile(cl, type) {
            $('.srch-results_mobile').html('');
            $('.srch-results_mobile').css('display', 'none');

            $.getJSON("{base_url}index.php/main/search_product?q=" + $('.' + cl).val(), function(data, status) {
                var res = data;
                if (res.length == 0) {
                    var html_empty = "<div class=\"srch-results-empty_mobile\">" +
                        "<div>" +
                        "<strong id=\"res-prod-empty_mobile\">Ничего не найдено ...</strong>" +
                        "</div>" +
                        "</div>";

                    $('.srch-results_mobile').html('');

                    $('.srch-results_mobile').append(html_empty);
                } else {
                    if (res.length > 10) {
                        res.splice(10);
                    }
                    $('.srch-results_mobile').html('');

                    res.forEach(function(prod, index, arr) {

                        var html_list;
                        if (prod.product_old_price != 0) {
                            html_list =
                                "<a href=\"{base_url}index.php/main/product/" + prod.id + "\">" +
                                "<div class=\"ps-product--cart-mobile srch_prod_list\">\n" +
                                "        <div class=\"ps-product__content srch_ps-product__content\">\n" +
                                "            <div class=\"prod_pic_mobile\"><img src=\"<?= $base_url ?>upload_product/" + prod.product_pic + "\"></div>" +
                                "            <div class=\"srch_prod_price\">" + prod.product_name + "\n" +
                                "                <p class=\"ps-product__price sale\">" + prod.product_price + " сом <del>" + prod.product_old_price + "</del></p>" +
                                "            </div>\n" +
                                "        </div>\n" +
                                "    </div>" +
                                "</a>";
                        } else {
                            html_list =
                                "<a href=\"{base_url}index.php/main/product/" + prod.id + "\">" +
                                "<div class=\"ps-product--cart-mobile srch_prod_list\">\n" +
                                "        <div class=\"ps-product__content srch_ps-product__content\">\n" +
                                "            <div class=\"prod_pic_mobile\"><img src=\"<?= $base_url ?>upload_product/" + prod.product_pic + "\"></div>" +
                                "            <div class=\"srch_prod_price cust\">" + prod.product_name + "\n" +
                                "                <p class=\"ps-product__price sale\">" + prod.product_price + " сом</p>" +
                                "            </div>\n" +
                                "        </div>\n" +
                                "    </div>" +
                                "</a>";
                        }

                        $('.srch-results_mobile').append(html_list);
                        if (index != arr.length - 1) {
                            $('.each_prod_mobile').css('border-bottom', '1px solid #e1e1e1');
                        }
                    });
                }
                if (type == 'mobile') {
                    $('.srch-results-mobile__header').css('display', 'block');
                } else {
                    $('.srch-res_mob_sidebar').css('display', 'block');
                }
            });
            // WRITTEN IN MAIN JS 
            // if (! $('.ps-toggle--sidebar').hasClass('active')) {
            // $('.srch-results_mobile').html('');
            // $('.srch_pr_inp_mobile').val('');
            // }
        }
        
        function change_z_index_on_scroll() {
            $(window).scroll(function() {
                var currentPosition = $(this).scrollTop();
                if ($('.header--mobile').hasClass('header--sticky')) {
                    $('.srch_inp_div').css('z-index', '0');
                    $('.srch_inp_header_div').css({
                        'cssText': 'padding: 10px 30px !important'
                    });
                }
                if ($(window).width() < 480) {
                    if ($(this).scrollTop() > 50) {
                        $('.srch_inp_div').css({
                            'cssText': 'z-index:0 !important'
                        });
                        $('.srch_inp_header_div').css({
                            'cssText': 'padding: 10px 30px !important'
                        });
                    } else {
                        $('.srch_inp_header_div').css({
                            'cssText': 'padding-bottom: 70px !important'
                        });
                        $('.srch_inp_div').css('z-index', '1000');
                    }
                }
            });
        }
        $(document).ready(function() {
            input_type();
            change_z_index_on_scroll();
            set_prods_header();
            $('.srch-results_mobile').html('');
            $('.srch-results_mobile').css('display', 'none');
            $('a.checkout').click(function(e) {
                if (!localStorage.getItem("product_list")) {
                    e.preventDefault();
                    $('.toast_empty').toast({
                        delay: 1500
                    });
                    $('.toast_empty').toast('show');
                }
            });
        });

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function verForm() {
            document.querySelector(".user-phone").style.display = "none";
            document.querySelector(".ver-form").style.display = "block";

        }

        function passForm() {
            document.querySelector(".ver-form").style.display = "none";
            document.querySelector(".pass-form").style.display = "block";

        }

        // Get the element with id="defaultOpen" and click on it
        /*document.getElementById("defaultOpen").click();*/

        function onPsBlockRight() {
    
            $(".enter-form").css("display","block");
            document.querySelector(".enter-btn-bg").style.display = "flex";
            document.querySelector(".enter-btn-bg").classList.add("active-animation");
            document.querySelector(".enter-btn-bg").classList.remove("disactive-animation");
        }
        let __min = 1;
        let __sec = 59;
        $('.min-time').text(`${__min}`);
        $('.sec-time').text(`${__sec}`);
        const userTimer = () =>{
           const countDown = setInterval(function(){
            __sec--;
            if(__min === 0 && __sec === 0) {
                $('.showTimer').css("display","none");
                $('.hideTimer').css("display","flex");
                __min = 1;
                $('.min-time').text(`${__min}`);
                __sec = 59;
                clearInterval(countDown);
            }
            if(__sec === 0){
                __min = 0;
                $('.min-time').text(`${__min}`);
                __sec = 59;
                __sec--;
            }
            $('.sec-time').text(`${__sec}`);
        },1000);
        }
        
        $("#form1").submit((e) =>{
            e.preventDefault();
            onPost();
        })
        $(".hideTimer_a").click(() =>{
            sendSms();
            $(".showTimer").css("display","block");
            $(".hideTimer").css("display","none");
            userTimer();
        })
        $(".rf1").click((e) =>{
            e.preventDefault();
            $(".efr1").hide();
            $(".efr3").css("display","block");
            userTimer();
        })
        $("#form3").submit((e) =>{
            e.preventDefault();
            verSms();
        })
        $("#form4").submit((e) =>{
            e.preventDefault();
        })
        $(".rf2").click((e) =>{
            e.preventDefault();
            $(".efr2").hide();
            $(".efr1").css("display","block");
        })
        $(".rf3").click((e) =>{
            e.preventDefault();
            $(".efr3").hide();
            $(".efr1").css("display","block");
        })
        $(".rf4").click((e) =>{
            e.preventDefault();
            $(".efr4").hide();
            $(".efr1").css("display","block");
        })
        document.querySelector(".enter-btn-bg").addEventListener('click', ({
            target
        }) => {
            if (target.classList.contains("enter-btn-bg")) {
                document.querySelector(".enter-btn-bg").classList.remove("active-animation");
                document.querySelector(".enter-btn-bg").classList.add("disactive-animation");
                document.querySelector(".enter-btn-bg").style.display = "none";
            }
        })
        $('.ef1').on('click',() =>{
            localStorage.setItem("ver-number",$('#tel-number').val());
        })

        $("#form2").on("submit",(e) => {
            console.log()
            e.preventDefault();
            $.ajax({
            type:"POST",
            url:"{base_url}/users/login",
            headers:{
                "Accept":"application/json",
            },
            data:{
                phone:Number(localStorage.getItem("ver-number")),
                password:$("#enter-password").val()
            },
            success:function(result){
                $(".validate-text").text("");
                userInfo();
            },
            error:function(error){
                $(".validate-text").text("Неправильный логин или пароль");
            }
        })
        })
        
        function sendSms(){
        $.ajax({
            type:"POST",
            url:"{base_url}/users/resend_sms",
            headers:{
                "Accept":"application/json",
            },
            data:{
                phone:Number(localStorage.getItem("ver-number")),
            },
            success:function(result){
                
            },
            error:function(error){
            }
        })
     }
  
        function userInfo(){
        fetch("{base_url}/users")
        .then(resp => resp.json())
        .then(resp =>{
            resp.filter(elem =>{
                if(elem.login === String(localStorage.getItem("ver-number"))){
                    return userId(44)
                }
            })
        })
         }
         
         function userId(id){
            console.log(id)
         fetch("{base_url}/users/show/44")
         .then(res => res.json())
         .then(resp => console.log(resp))
         }
        
         
        function verSms(){
        $.ajax({
            type:"POST",
            url:"{base_url}/users/check_register_code",
            headers:{
                "Accept":"application/json",
            },
            data:{
                phone:Number(localStorage.getItem("ver-number")),
                confirm_code:$("#ver-sms").val()
            },
            success:function(result){
                $(".efr3").hide();
                $(".efr4").css("display","block");
                $(".validate-text").text("");
            },
            error:function(error){
                $(".validate-text").text("Введен неправильный код.");
            }
        })
     }
        function onPost(){
        $.ajax({
            type:"POST",
            url:"{base_url}/users/check_phone",
            headers:{
                "Accept":"application/json",
            },
            data:{phone:Number($("#tel-number").val())},
            success:function(result){
                    $('.efr2').css("display","block");
                    $('.efr1').css("display","none");
            },
            error:function(error){
                    $('.efr3').css("display","block");
                    $('.efr1').css("display","none");
                    sendSms();
                    userTimer();
            }
        })
    }
    function onRegister(){
        $.ajax({
            type:"POST",
            url:"{base_url}/users/register",
            headers:{
                "Accept":"application/json",
            },
            data:{
                phone:Number(localStorage.getItem("ver-number")),
                password:$("#first-password").val()
            },
            success:function(result){
                   
            },
            error:function(error){
                
            }
        })
    }
    $("#second-password").on('input',() =>{
       if($("#second-password").val() !==  $("#first-password").val()){
        $(".validate-text").text("Пароли не совпадают");
       }else{
        $(".validate-text").text("");
        onRegister();
       }
    })
    

    </script>

   