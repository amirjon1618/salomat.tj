<div id="homepage-3">
    <div class="ps-home-banner">

        <div class="container recipe_container_div">
            <div class="recipe_div_main" col="12">
                <div class="recipe_sheet_div">
                    <a href="{base_url}index.php/main/recipe"><img src="/img/photo.svg" alt="Recept" style="padding-right: 15px;"> Фото рецепта</a>
                </div>
            </div>
        </div>

        <div class="container main-banner_container">
            <div class="ps-section__left">
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                    <?php foreach ($main_slider as $slider) : ?>
                        <a href="<?= $slider['slider_link'] ?>">
                            <img class="slider_img" src="<?= $slider['base_url'] ?>upload_banner/<?= $slider['slider_pic'] ?>" alt=""></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="ps-section__right main-ad_div">
                <?php if (sizeof($ad_mini) != 0) : ?>
                    <a class="ps-collection" href="<?= $ad_mini[0]['advertisement_link'] ?>">
                        <img class="ad_mini_img" src="<?= $ad_mini[0]['base_url'] ?>upload_banner/<?= $ad_mini[0]['advertisement_pic'] ?>" alt="">
                    </a>
                    <?php if (isset($ad_mini[1])) : ?>
                        <a class="ps-collection margin-top20 main-second_banner" href="<?= $ad_mini[1]['advertisement_link'] ?>">
                            <img class="ad_mini_img" src="<?= $ad_mini[1]['base_url'] ?>upload_banner/<?= $ad_mini[1]['advertisement_pic'] ?>" alt="">
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="ps-deal-of-day">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="ps-block--countdown-deal">
                    <div class="ps-block__left">
                        <h3>Товары дня</h3>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                    <?php foreach ($prods_of_the_day as $prod_of_the_day) : ?>
                        <div class="ps-product ps-product--inner ps-product_of_the_day">
                            <label>
                                <input value="<?php $prod_of_the_day['id'] ?>" <?php echo $prod_of_the_day['is_favorite'] == 1 ?  'checked' : null  ?> type="checkbox" id="red">
                                <svg id="shape" fill="none" data-id="<?= $prod_of_the_day['id']   ?>" data-like="0" class="likeClick" width="24" height="24" style="cursor: pointer; float: right;" viewBox="0 0 22 19" xmlns="http://www.w3.org/2000/svg">
                                    <path class="seat" d="M6.20208 0.884277C3.51425 0.884277 1.33459 3.04155 1.33459 5.70309C1.33459 7.85159 2.1864 12.9508 10.5711 18.1054C10.7213 18.1968 10.8938 18.2452 11.0696 18.2452C11.2454 18.2452 11.4178 18.1968 11.568 18.1054C19.9527 12.9508 20.8045 7.85159 20.8045 5.70309C20.8045 3.04155 18.6249 0.884277 15.937 0.884277C13.2492 0.884277 11.0696 3.80477 11.0696 3.80477C11.0696 3.80477 8.8899 0.884277 6.20208 0.884277Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </label>
                            <div class="ps-product__thumbnail ps-product__thumbnail_img_div  hover01">
                                <a href="<?= $base_url ?>index.php/main/product/<?= $prod_of_the_day['id'] ?>?from=main">
                                    <img class="imgs" src="<?= $base_url ?>upload_product/<?= $prod_of_the_day['product_pic'] ?>" alt="Product IMG">
                                </a>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content"><a class="ps-product__title product_title_new" href="<?= $base_url ?>index.php/main/product/<?= $prod_of_the_day['id'] ?>">
                                        <?= $prod_of_the_day['product_name'] ?></a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <?php if ($prod_of_the_day['review_count'] != 0) : ?>
                                                <?php for ($i = 1; $i <= $prod_of_the_day['prod_rating_average']; $i++) : ?>
                                                    <option value="1"></option>
                                                <?php endfor; ?>
                                                <?php for ($i = ($prod_of_the_day['prod_rating_average'] + 1); $i <= 5; $i++) : ?>
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
                                        </select><span>(<?= $prod_of_the_day['review_count'] ?>)</span>
                                    </div>
                                    <p class="ps-product__price sale prods_slider"> <span class="ps-product__price-span">
                                            <?php if ($prod_of_the_day['product_old_price'] != 0) : ?><del><?= $prod_of_the_day['product_old_price'] ?> </del><?php endif; ?>
                                            <?= $prod_of_the_day['product_price'] ?> c. </span><a class="ps-product__price-link" href="<?= $base_url ?>index.php/main/product/<?= $prod_of_the_day['id'] ?>?from=main">В корзину</a></p>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--gray">
        <div class="container">
            <?php foreach ($categories_for_main_page as $cat) : ?>
                <div class="ps-block--products-of-category">
                    <div class="ps-block__categories">
                        <div class="accordion" id="accordionExample">
                            <div style="border: none;" class="card">
                                <div style="background-color: #fff; border: none; padding: 0;" class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h3 style="display: flex; justify-content: space-between; align-items: center;" class="burger-mobail_icon"><?php echo $cat['categ']['category_name'] ?><i class="fa fa-bars" aria-hidden="true"></i></h3>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <?php if (sizeof($cat['categ']['sub_cat']) > 12) : ?>
                                                <?php for ($i = 0; $i <= 12; $i++) : ?>
                                                    <li class="d-flex justify-content-between"><a href="<?= $cat['categ']['base_url'] ?>index.php/main/categoryProducts/<?= $cat['categ']['sub_cat'][$i]['id'] ?>">
                                                            <?= $cat['categ']['sub_cat'][$i]['category_name'] ?>
                                                        </a><img src="{base_url}img/arrow-left.svg" alt=">"></li>
                                                <?php endfor; ?>
                                            <?php else : ?>
                                                <?php for ($i = 0; $i < sizeof($cat['categ']['sub_cat']); $i++) : ?>
                                                    <li class="d-flex justify-content-between"><a href="<?= $cat['categ']['base_url'] ?>index.php/main/categoryProducts/<?= $cat['categ']['sub_cat'][$i]['id'] ?>">
                                                            <?= $cat['categ']['sub_cat'][$i]['category_name'] ?></a><img src="{base_url}img/arrow-left.svg" alt=">"></li>
                                                <?php endfor; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="ps-block__slider">
                        <div style="height: 100%;" class="ps-carousel--product-box owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="500" data-owl-mousedrag="off">
                            <?php foreach ($cat['categ_slider'] as $cat_slider) : ?>
                                <a href="<?= $cat_slider['slider_link'] ?>">
                                    <img style="height: 100%;" src="<?= $base_url ?>upload_banner/<?= $cat_slider['slider_pic'] ?>" alt="">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="ps-block__product-box">
                        <?php foreach ($cat['categ_prods'] as $cat_p) : ?>
                            <div class="ps-product ps-product--simple hover01">
                                <label>
                                    <input value="<?php $prod_of_the_day['id'] ?>" <?php echo $prod_of_the_day['is_favorite'] == 1 ?  'checked' : null  ?> type="checkbox" id="red">
                                    <svg id="shape" fill="none" data-id="<?= $prod_of_the_day['id']   ?>" data-like="0" class="likeClick" width="24" height="24" style="cursor: pointer; float: right;" viewBox="0 0 22 19" xmlns="http://www.w3.org/2000/svg">
                                        <path class="seat" d="M6.20208 0.884277C3.51425 0.884277 1.33459 3.04155 1.33459 5.70309C1.33459 7.85159 2.1864 12.9508 10.5711 18.1054C10.7213 18.1968 10.8938 18.2452 11.0696 18.2452C11.2454 18.2452 11.4178 18.1968 11.568 18.1054C19.9527 12.9508 20.8045 7.85159 20.8045 5.70309C20.8045 3.04155 18.6249 0.884277 15.937 0.884277C13.2492 0.884277 11.0696 3.80477 11.0696 3.80477C11.0696 3.80477 8.8899 0.884277 6.20208 0.884277Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </label>
                                <div class="ps-product__thumbnail ">
                                    <a href="{base_url}main/product/<?= $cat_p['id'] ?>">
                                        <img class="category_imgs" src="<?= $cat_p['base_url'] ?>upload_product/<?= $cat_p['product_pic'] ?>" alt="">
                                    </a>
                                </div>
                                <div class="ps-product__container">
                                    <div class="ps-product__content" data-mh="garden">
                                        <a class="ps-product__title product_title_new
                                        " href="{base_url}main/product/<?= $cat_p['id'] ?>"><?= $cat_p['product_name'] ?></a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <?php if ($cat_p['review_count'] != 0) : ?>
                                                    <?php for ($i = 1; $i <= $cat_p['prod_rating_average']; $i++) : ?>
                                                        <option value="1"></option>
                                                    <?php endfor; ?>
                                                    <?php for ($i = ($cat_p['prod_rating_average'] + 1); $i <= 5; $i++) : ?>
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
                                            </select><span>(<?= $cat_p['review_count'] ?>)</span>
                                        </div>
                                        <p class="ps-product__price sale prods_slider"><span class="ps-product__price-span"><?= $cat_p['product_price'] ?> c.</span> <?php if ($cat_p['product_old_price'] != 0) : ?> <?php endif; ?><a class="ps-product__price-link " href="<?= $base_url ?>index.php/main/product/<?= $prod_of_the_day['id'] ?>?from=main">В корзину</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php if ($cat['categ']['id'] == 4) : ?>
                    <div class="ps-block--products-of-category blog-articles">
                        <div class="content-bg">
                            <div class="blog-articles__nav">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-content bg-white">
                                        <li class="breadcrumb-item ba-first"><a href="#">Блог </a></li>
                                        <a href="{base_url}main/blogpopular">
                                            <li class="active ba-last" aria-current="page" style="padding: 0 10px;">все статьи ></li>
                                        </a>
                                    </ol>
                                </nav>
                            </div>
                            <div class="blog-articles-blog">
                                <div class="blog-articles_left col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <img class="blog_pic img-fluid pb-5" src="{base_url}upload_blog/" alt="...">
                                    <h3 class="blog_title"></h3>
                                    <span class="blog_created_at"></span>
                                    <p class="text-justify blog_about-main"></p>
                                    <a href="{base_url}main/blogInfo"> читать дальше</a>
                                    <div class="blog-articles-btn">
                                        <a href="{base_url}main/blogpopular"><button type="button" class="btn btn-info btn-lg">Все статьи</button></a>
                                        <a href="https://www.t.me/Salomat9990" target="_blank">
                                            <img src="{base_url}img/telegram.svg" alt=""></a>
                                        <a href="salomat.tj" target="_blank">
                                            <img src="{base_url}img/facebook.svg" alt=""></a>
                                        <a href="https://www.instagram.com/salomat.tj" target="_blank">
                                            <img src="{base_url}img/instagram.svg" alt=""></a>
                                        <a href="https://salomat.tj" target="_blank">
                                            <img src="{base_url}img/link.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="blog-articles_right col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="blog-articles-mini">
                                        <h3 class="blog_title"> </h3>
                                        <span class="blog_created_at"></span>
                                        <p class="text-justify blog_about"></p>
                                        <a href="{base_url}main/blogInfo"> читать дальше</a>
                                    </div>
                                    <div class="blog-articles-mini">
                                        <h3 class="blog_title"> </h3>
                                        <span class="blog_created_at"></span>
                                        <p class="text-justify blog_about"></p>
                                        <a href="{base_url}main/blogInfo"> читать дальше</a>
                                    </div>
                                    <div class="blog-articles-mini">
                                        <h3 class="blog_title"> </h3>
                                        <span class="blog_created_at"></span>
                                        <p class="text-justify blog_about"></p>
                                        <a href="{base_url}main/blogInfo"> читать дальше</a>
                                    </div>
                                    <div class="blog-articles-btn bab_mobile">
                                        <a href="{base_url}main/blogpopular"><button type="button" class="btn btn-info btn-lg">Все статьи</button></a>
                                        <a href="https://www.t.me/Salomat9990" target="_blank">
                                            <img src="{base_url}img/telegram.svg" alt=""></a>
                                        <a href="salomat.tj" target="_blank">
                                            <img src="{base_url}img/facebook.svg" alt=""></a>
                                        <a href="https://www.instagram.com/salomat.tj" target="_blank">
                                            <img src="{base_url}img/instagram.svg" alt=""></a>

                                        <a href="https://salomat.tj" target="_blank">
                                            <img src="{base_url}img/link.svg" alt=""></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </div>
</div>









<!-- ********************************************************************************************************************** -->
<!-- ********************************************************************************************************************** -->
<!-- ********************************************************************************************************************** -->
<!-- ********************************************************************************************************************** -->



<div class="toast toast_success fade hide">
    <div class="toast-body">
        <i class="fa fa-check"></i>
        Заказ был успешным!
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<script>
    document.getElementsByClassName('blog_about').offsetWidth / 100;
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
            this.dataset.like === "0" ? (this.dataset.like = "1") : (this.dataset.like = "0");
            let isLike = Boolean(Number(this.dataset.like));
            let _like = window.getComputedStyle(this);
            console.log(_like.fill);
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
                console.log("Disike");

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
                console.log("Like");
            }
        })
    }

    function getBlog() {
        $.ajax({
            type: "GET",
            url: "{base_url}blogs/main_blog",
            headers: {
                "Accept": "application/json",
            },
            success: function(blogShow) {
                console.log(blogShow.content)
                document.querySelector(".blog_pic").src += `${blogShow.content[0].blog_pic}`;
                $(".blog_created_at").text(blogShow.content[0].blog_created_at);
                $(".blog_title").text(blogShow.content[0].blog_title);
                $(".blog_about").html(blogShow.content[0].blog_about);
                $(".blog_about-main").html(blogShow.content[0].blog_about);
            }
        })
    }
    getBlog();
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
</style>