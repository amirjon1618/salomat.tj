<div class="ps-tabs">
    <div class="ps-tab active" id="tab-1">
        <div class="ps-shopping-product">
            <div class="row">
                <?php foreach ($total_products['total_prods'] as $cat_p) : ?>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 pb-5">
                        <div class="ps-products">
                            <label>
                                <input value="<?php $cat_p['id'] ?>" <?php echo $cat_p['is_favorite'] == 1 ?  'checked' : null  ?> type="checkbox" id="red">
                                <svg id="shape" fill="none" data-id="<?= $cat_p['id']   ?>" data-like="0" class="likeClick" width="24" height="24" style="cursor: pointer; float: right;" viewBox="0 0 22 19" xmlns="http://www.w3.org/2000/svg">
                                    <path class="seat" d="M6.20208 0.884277C3.51425 0.884277 1.33459 3.04155 1.33459 5.70309C1.33459 7.85159 2.1864 12.9508 10.5711 18.1054C10.7213 18.1968 10.8938 18.2452 11.0696 18.2452C11.2454 18.2452 11.4178 18.1968 11.568 18.1054C19.9527 12.9508 20.8045 7.85159 20.8045 5.70309C20.8045 3.04155 18.6249 0.884277 15.937 0.884277C13.2492 0.884277 11.0696 3.80477 11.0696 3.80477C11.0696 3.80477 8.8899 0.884277 6.20208 0.884277Z" stroke="#A8A8A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </label>
                            <div class="ps-product__thumbnail hover01">
                                <a href="{base_url}main/product/<?= $cat_p['id'] ?>/<?= $cat_p['category_id'] ?>">
                                    <img class="category_imgs" src="<?= $cat_p['base_url'] ?>upload_product/<?= $cat_p['product_pic'] ?>" alt="">
                                </a>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content">
                                    <a class="ps-product__title product_title_new" href="{base_url}main/product/<?= $cat_p['id'] ?>/<?= $cat_p['category_id'] ?>"><?= $cat_p['product_name'] ?></a>
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
                                    <p class="ps-product__price sale prods_slider"><span class="ps-product__price-span"><?= $cat_p['product_price'] ?> c.</span><a class="ps-product__price-links " href="#">В корзину</a> <?php if ($cat_p['product_old_price'] != 0) : ?><?php endif; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="ps-pagination">
            <ul class="pagination">
                <?php if (isset($total_products['prev_page'])) : ?>
                    <li><a href="javascript:topage(<?= $total_products['prev_page'] ?>)">
                            <i class="icon-chevron-left" style="margin-right:4px;margin-left:0;"></i>Пред. стр.</a></li>
                <?php endif; ?>
                <?php foreach ($total_products['pages'] as $page) : ?>
                    <li class="<?= $page['current'] ?>"><a href="javascript:topage(<?= $page['page'] ?>)"><?= $page['page'] ?></a></li>
                <?php endforeach; ?>
                <?php if (isset($total_products['next_page'])) : ?>
                    <li><a href="javascript:topage(<?= $total_products['next_page'] ?>)">След. стр.<i class="icon-chevron-right"></i></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<script>
    $('.sort_by_price, .sort_by_price_mobile').click(function() {
        $('.sort_by_price, .sort_by_price_mobile').css({
            'cssText': 'background: #89e486 !important;outline:none !important'
        })
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
                }
                console.log("Like");
            } else {
                this.removeAttribute('id');
                $(".enter-form").css("display", "block");
                document.querySelector(".enter-btn-bg").style.display = "flex";
                document.querySelector(".enter-btn-bg").classList.add("active-animation");
                document.querySelector(".enter-btn-bg").classList.remove("disactive-animation");
            }
        })
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
</style>