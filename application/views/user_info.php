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
                <div class="up-left-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12 p-0 mb-3">
                        <ul class="user-info_ul nav nav-pills d-block" id="myTab" role="tablist">
                            <li class="nav-item5" role="presentation"><a id="webdisign-tab" data-toggle="tab" href="#user-info" role="tab" aria-controls="webdisign" aria-selected="true"><img src="{base_url}img/up-user.svg" alt="Icon">Личная информация</a></li>
                            <li class="nav-item5" role="presentation"><a id="webdisign-tab" data-toggle="tab" href="#user-order" role="tab" aria-controls="webdisign" aria-selected="true"><img src="{base_url}img/up-cart.svg" alt="Icon">Мои заказы</a></li>
                            <li class="nav-item5" role="presentation"><a id="webdisign-tab" data-toggle="tab" href="#user-favorite" role="tab" aria-controls="webdisign" aria-selected="true"><img src="{base_url}img/up-like.svg" alt="Icon">Избранное</a></li>
                            <li class="nav-item5" role="presentation"><a id="webdisign-tab" data-toggle="tab" href="#user-save" role="tab" aria-controls="webdisign" aria-selected="true"><img src="{base_url}img/up-save.svg" alt="Icon">Безопасность</a></li>
                        </ul>
                    </div>
                    <?php if (isset($auth)) : ?>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="user-info" role="tabpanel" aria-labelledby="webdisign-tab">
                                <div class="up-content col-lg-6 col-md-6 col-sm-12 col-xs-12 p-4 mb-3">
                                    <div class="up-content-info">
                                        <h2>Личная информация</h2>
                                        <form action="{base_url}users/update_user" method="post" class="up-content-info_form">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-col">
                                                    <label for="validationCustom01">Имя*</label>
                                                    <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Имя Фамилия" required value="<?php echo $name ?>">
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
                                                    <select class="custom-select" name="gender">
                                                        <?php if ($gender == 'male') : ?>
                                                            <option selected value="male">Мужской</option>
                                                            <option value="female">Женский</option>
                                                        <?php elseif ($gender == 'famale') : ?>
                                                            <option selected value="female">Женский</option>
                                                            <option value="male">Мужской</option>
                                                        <?php else : ?>
                                                            <option selected value="female">Женский</option>
                                                            <option value="male">Мужской</option>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-col">
                                                    <label for="validationCustom01">Дата рождения</label>
                                                    <input type="date" class="form-control" id="validationCustom01" name="birth_date" value="<?php echo $birth_date ?>">

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
                                                    <input type="text" class="form-control" id="validationTooltiAddress" name="address" placeholder="А.Навои 34/2" aria-describedby="validationTooltipAddress" value="<?php echo $address ?>" required>
                                                </div>
                                            </div>
                                            <button class="form-btn my-4 mx-3">Сохранить</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="up-right-sidebar col-lg-2 col-md-2 col-sm-12 col-xs-12 p-4">
                                    <div class="text-center">
                                        <img src="{base_url}img/user.png" alt="Icon" class="rounded-circle" style="width: 100px;">
                                        <form class="form-del">
                                            <div class="input__wrapper">
                                                <input name="file" type="file" name="file" id="input__file" class="input input__file" onchange="uploadIMG(this)" multiple>
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
                                <div class="up-content col-lg-8 col-md-8 col-sm-12 col-xs-12 p-4">
                                    <div class="table-title">
                                        <h2 class="pb-5">Мои заказы</h2>
                                    </div>
                                    <?php if (!empty($orders)) : ?>
                                        <?php foreach ($orders as $order) : ?>
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
                                                        <tr data-toggle="collapse" class="accordion-toggle">
                                                            <td class="table-id"><?php echo $order['order']->id; ?></td>
                                                            <td><?php echo $order['order']->created_at;
                                                                $price = 0;  ?></td>
                                                            <td><span class="status-delivered"><?php echo $order['status'][0]->status_text; ?></span></td>
                                                            <?php foreach ($order['products'] as $product) : ?>
                                                                <?php $price = $price + $product->product_sold_price ?>
                                                            <?php endforeach; ?>
                                                            <td class="text-success"><?php echo $price + $order['delivery'][0]->delivery_price; ?></td>

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
                                                                                            <?php foreach ($order['products'] as $product) : ?>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row"><img style="max-width: 100px" src="{base_url}upload_product/<?php echo $product->product_pic; ?>" alt="IMG"></th>
                                                                                                        <td class="align-middle"><?php echo $product->product_name; ?></td>
                                                                                                        <td class="align-middle"><?php echo $product->total_count; ?> шт</td>
                                                                                                        <td class="align-middle"><?php echo $product->product_sold_price; ?> сом</td>
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
                                                                                <td class="font-weight-bold"> <?php echo $price + $order['delivery'][0]->delivery_price; ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                </table>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tbody>
                                            <tr>
                                                <td>Заказов нет! </td>
                                            </tr>
                                        </tbody>
                                    <?php endif; ?>

                                </div>

                            <?php endif; ?>
                            </div>

                            <div class="tab-pane fade show" id="user-favorite" role="tabpanel">

                                <div class="up-content col-lg-8 col-md-8 col-sm-12 col-xs-12 p-3">

                                    <div class="favorite-title pb-5">
                                        <h2 class="border-bottom pb-4">Избранное</h2>
                                    </div>

                                    <?php if (isset($auth) && !empty($favorites)) : ?>
                                        <?php foreach ($favorites as $favorite) : ?>

                                            <div class="favorite-content">
                                                <div class="d-flex col-lg-3 col-md-6 col-sm-6 col-xs-12 pb-5">
                                                    <div class="ps-product ps-product--inner ps-product_of_the_day">
                                                        <label>
                                                            <input value="<?php $favorite['id'] ?>" <?php echo $favorite['id']  ?  'checked' : null  ?> type="checkbox" id="red">
                                                            <svg id="shape" fill="none" data-id="<?= $favorite['id']   ?>" data-like="0" class="likeClick" width="24" height="24" style="cursor: pointer; float: right;" viewBox="0 0 22 19" xmlns="http://www.w3.org/2000/svg">
                                                                <path class="seat" d="M6.20208 0.884277C3.51425 0.884277 1.33459 3.04155 1.33459 5.70309C1.33459 7.85159 2.1864 12.9508 10.5711 18.1054C10.7213 18.1968 10.8938 18.2452 11.0696 18.2452C11.2454 18.2452 11.4178 18.1968 11.568 18.1054C19.9527 12.9508 20.8045 7.85159 20.8045 5.70309C20.8045 3.04155 18.6249 0.884277 15.937 0.884277C13.2492 0.884277 11.0696 3.80477 11.0696 3.80477C11.0696 3.80477 8.8899 0.884277 6.20208 0.884277Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </label>

                                                        <div class="ps-product__thumbnail ps-product__thumbnail_img_div  hover01">
                                                            <a href="{base_url}index.php/main/product/2997?from=main">
                                                                <img class="imgs" src="{base_url}upload_product/<?php echo $favorite['product_pic'] ?>" alt="">
                                                            </a>
                                                        </div>

                                                        <div class="ps-product__container">
                                                            <div class="ps-product__content"><a class="ps-product__title product_title_new" href="{base_url}index.php/main/product/2997">
                                                                    <?php echo $favorite['product_name'] ?></a>
                                                                <div class="ps-product__rating">
                                                                    <select class="ps-rating" data-read-only="true">

                                                                        <?php if (!isset($favorite['review_count'])) : ?>
                                                                            <?php for ($i = 1; $i <= $favorite['prod_rating_average']; $i++) : ?>
                                                                                <option value="1"></option>
                                                                            <?php endfor; ?>
                                                                            <?php for ($i = ($favorite['prod_rating_average'] + 1); $i <= 5; $i++) : ?>
                                                                                <option value="<?= $i ?>"><?= $i ?></option>
                                                                            <?php endfor; ?>
                                                                        <?php else : ?>
                                                                            <!-- <option value="" selected disabled hidden></option> -->
                                                                            <option value="0">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        <?php endif; ?>
                                                                    </select><span>(1)</span>
                                                                </div>
                                                                <p class="ps-product__price sale prods_slider"> <span class="ps-product__price-span price-span_favorite">
                                                                        <input class="form-control height50" id="count_input" type="number" value="1" style="display: none;">
                                                                        <?php if ($favorite['product_old_price'] != 0) : ?><del><?= $favorite['product_old_price'] ?> </del><?php endif; ?>
                                                                        <?= $favorite['product_price'] ?>c. </span><button onclick='addToCart(res = <?= json_encode($favorite) ?>)' class="ps-btn btn-cart_cat">В корзину</button></p>

                                                            </div>
                                                            <div class="product_add_notification_div" style="display: none;">
                                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                                <span class="prod_add_notification_text">"<span class="span_added_prod_name"></span>" успешно добавлен в вашу корзину.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="user-save" role="tabpanel">
                                <div class="up-content col-lg-8 col-md-8 col-sm-12 col-xs-12 p-3">
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
                                                        <input type="password" class="form-control form-control-save" name="password_confirm" id="validationCustom02" placeholder="Введите повторно пароль" required>
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
<script>
    let imgVal;
    async function postData(url = '', data = {}) {
        // Default options are marked with *
        // console.log(JSON.stringify(data));
        const response = await fetch(url, {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            headers: {
                'Content-Type': 'application/json'
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },

            body: data // body data type must match "Content-Type" header
        });
        return await response.json(); // parses JSON response into native JavaScript objects
    }

    function uploadIMG(e) {

        var data = new FormData()
        console.log(e.files[0]);

        fetch('<?= base_url() ?>users/user_img?type=save', {
            method: 'POST',
            body: {
                name: 'photo_2022-07-13_16-07-06.jpg',
                lastModified: 1661747805931,
                lastModifiedDate: 'Mon Aug 29 2022 09: 36: 45 GMT + 0500(Узбекистан, стандартное время)',
                webkitRelativePath: '',
                size: 58981,
            }
        })
        //postData('<? //= base_url() 
                    ?>///users/user_img?type=save', [{name:'Komyob'}])
        //    .then((data) => {
        //        console.log(data); // JSON data parsed by `response.json()` call
        //    })
        //    .catch(res => {
        //        console.log(res)
        //    });
    }

    $(document).ready(function() {
        var os = '<?php if (isset($os)) echo $os; ?>';
        if (os == 1) {
            $('.toast_success').toast({
                delay: 2500
            });
            $('.toast_success').toast('show');
        }
    });
    const __likeClicks = document.getElementsByClassName("likeClick")
    for (let i = 0; i < __likeClicks.length; i++) {
        __likeClicks[i].addEventListener('click', function() {
            this.setAttribute('id', 'shape');
            this.dataset.like === "0" ? (this.dataset.like = "1") : (this.dataset.like = "0");
            let isLike = Boolean(Number(this.dataset.like));
            let _like = window.getComputedStyle(this);
            if (localStorage.getItem("userId")) {
                if (_like.fill === "none") {
                    $.ajax({
                        type: "POST",
                        url: "{base_url}favorites",
                        headers: {
                            "Accept": "application/json",
                        },
                        data: {
                            user_id: JSON.parse(localStorage.getItem("userId")).user_id,
                            product_id: Number(this.getAttribute("data-id")),
                        },
                    })

                } else {
                    $.ajax({
                        type: "POST",
                        url: "{base_url}favorites/delete",
                        headers: {
                            "Accept": "application/json",
                        },
                        data: {
                            user_id: JSON.parse(localStorage.getItem("userId")).user_id,
                            product_id: Number(this.getAttribute("data-id")),
                        },
                    })
                }
            } else {
                this.removeAttribute('id');
                $(".enter-form").css("display", "block");
                document.querySelector(".enter-btn-bg").style.display = "flex";
                document.querySelector(".enter-btn-bg").classList.add("active-animation");
                document.querySelector(".enter-btn-bg").classList.remove("disactive-animation");
            }
        })
    }
    const __toggles = document.getElementsByClassName("accordion-toggle");
    for (let i = 0; i < __toggles.length; i++) {
        __toggles[i].addEventListener('click', function() {
            this.classList.toggle("user-active");
        })
    }

    $(".user-info_ul a").on("click", function() {
        $(".user-info_ul").find(".nav-item").removeClass("nav-item");
        $(this).parent().addClass("nav-item");
    });

    function decrease_count() {
        $('#decrease_count').on('click', function() {
            count--;
            if (count < 1) {
                count = 1;
            }
            $('#count_input').val(count);
        })
    }

    function increase_count() {
        $('#increase_count').on('click', function() {
            // if (count < total_count_global) {
            count++;
            // }
            $('#count_input').val(count);
        })
    }

    function change_count() {
        $('#count_input').change(function() {
            // console.log('total_count_global:'+$('#count_input').val());
            // if(Number($('#count_input').val()) > total_count_global){
            //     // console.log('total_count_global:'+total_count_global);
            //     count = total_count_global
            //     $('#count_input').val(count);
            // } else 
            if ($('#count_input').val() > 0) {
                count = $('#count_input').val();
            } else {
                count = 1;
                $('#count_input').val(count);
            }
            // else if ($('#count_input').val() < 1 || Number($('#count_input').val()) == 0)
        })
    }

    function addToCart(res) {
        max_count_reached = false;
        var array = [];
        var id = res.id;
        var count = Number($('#count_input').val());
        var price = res.product_price;
        var old_price = res.product_old_price;
        var brand = res.product_brand;
        var pic = res.product_pic;
        var name = res.product_name;
        var total_count = res.product_total_count;
        var product_articule = res.product_articule;
        var obj = {
            product_id: id,
            product_name: name,
            product_count: count,
            product_old_price: old_price,
            product_price: price,
            product_brand: brand,
            product_pic: pic,
            product_total_count: total_count,
            prod_articule: product_articule
        };

        var found = false;
        if (total_count <= 0) {
            $('.product_add_notification_div_error').css({
                'cssText': 'display: flex !important'
            });
            setTimeout(function() {
                $('.product_add_notification_div_error').hide();
            }, 2500)
        } else {
            if (localStorage.getItem("product_list")) {
                var mydata = $.parseJSON(localStorage.getItem("product_list"));
                mydata.forEach(function(elem, index) {
                    if (elem.product_id == id) {
                        elem.product_count += count;

                        // if (elem.product_count > total_count) {
                        //     elem.product_count = total_count;
                        // $('.product_add_notification_div_error').css({
                        //     'cssText': 'display: flex !important'
                        // });
                        // setTimeout(function() {
                        //     $('.product_add_notification_div_error').hide();
                        // }, 2500)
                        // max_count_reached = true;
                        // }
                        mydata[index] = elem;
                        found = true;
                    }
                });
                if (!found) {
                    mydata.push(obj);
                }
                // $.cookie("product_list", JSON.stringify(mydata), {
                //     path: '/'
                // });
                localStorage.setItem("product_list", JSON.stringify(mydata))
            } else {
                array.push(obj);
                // $.cookie("product_list", JSON.stringify(array), {
                //     path: '/'
                // });
                localStorage.setItem("product_list", JSON.stringify(array))
            }
            if (!max_count_reached) {
                $('.span_added_prod_name').text('' + name);
                $('.product_add_notification_div').css({
                    'cssText': 'display: flex !important'
                });
                setTimeout(function() {
                    $('.product_add_notification_div').hide();
                }, 1000)
            }
            set_prods_header();
        }
    }
</script>

<style>
    label {
        display: block;
    }

    #red {
        display: none;
    }

    #red:checked+#shape {
        fill: #DD2E44;
        stroke: #DD2E44 !important;
    }

    #red:checked+#shape path {
        fill: #DD2E44;
        stroke: #DD2E44 !important;
    }
    .nav-item {
        background: rgba(188, 189, 255, 0.2);
        border-radius: 4px 4px 0px 0px;
        border-right: 3px solid #4839C3;
    }
    .user-active + tr div{
        display: block !important;
    }
</style>