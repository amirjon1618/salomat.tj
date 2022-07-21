<div class="ps-tabs">
    <div class="ps-tab active" id="tab-1">
        <div class="ps-shopping-product">
            <div class="row">
                <?php foreach ($category_products['products'] as $cat_p) : ?>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 pb-5">
                        <div class="ps-products">
                            <div class="ps-product__thumbnail hover01">
                                <a href="{base_url}main/product/<?= $cat_p['id'] ?>/<?= $category_id ?>">
                                    <img class="category_imgs" src="<?= $cat_p['base_url'] ?>upload_product/<?= $cat_p['product_pic'] ?>" alt="">
                                </a>
                            </div>
                            <div class="ps-product__container">
                                <div class="ps-product__content">
                                    <a class="ps-product__title product_title_new" href="{base_url}main/product/<?= $cat_p['id'] ?>/<?= $category_id ?>"><?= $cat_p['product_name'] ?></a>
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
                                    <p class="ps-product__price sale prods_slider"><span class="ps-product__price-span"><?= $cat_p['product_price'] ?> c.</span><a class="ps-product__price-links " href="#">В корзину</a> <?php if ($cat_p['product_old_price'] != 0) : ?> <del><?= $cat_p['product_old_price'] ?> </del><?php endif; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="ps-pagination">
            <ul class="pagination">
                <?php if (isset($category_products['prev_page'])) : ?>
                    <li><a href="javascript:topage(<?= $category_products['prev_page'] ?>)">
                            <i class="icon-chevron-left" style="margin-right:4px;margin-left:0;"></i>Пред. стр.</a></li>
                <?php endif; ?>
                <?php foreach ($category_products['pages'] as $page) : ?>
                    <li class="<?= $page['current'] ?>"><a href="javascript:topage(<?= $page['page'] ?>)"><?= $page['page'] ?></a></li>
                <?php endforeach; ?>
                <?php if (isset($category_products['next_page'])) : ?>
                    <li><a href="javascript:topage(<?= $category_products['next_page'] ?>)">След. стр.<i class="icon-chevron-right"></i></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="ps-tab" id="tab-2">
        <div class="ps-shopping-product">
            <?php foreach ($category_products['products'] as $cat_p) : ?>
                <div class="ps-product ps-product--wide">
                    <div class="ps-product__thumbnail">
                        <a href="{base_url}main/product/<?= $cat_p['id'] ?>/<?= $category_id ?>">
                            <img class="prod_img_in_categ_by_list" src="<?= $cat_p['base_url'] ?>upload_product/<?= $cat_p['product_pic'] ?>" alt="">
                        </a>
                    </div>
                    <div class="ps-product__container">
                        <div class="ps-product__content">
                            <a class="ps-product__title product_info_long" href="{base_url}main/product/<?= $cat_p['id'] ?>/<?= $category_id ?>">
                                <?= $cat_p['product_name'] ?>
                            </a>
                            <!-- <p class="ps-product__vendor">Sold by:<a href="#">ROBERT’S STORE</a></p> -->
                            <ul class="ps-product__desc">
                                <!-- ..................................... -->
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
                                    </select><span class="review_count_bold"><b>(<?= $cat_p['review_count'] ?>)</b></span>
                                    <div class="product_articule">
                                        <p class="text-muted">Арт. <?= $cat_p['product_articule'] ?></p>
                                    </div>
                                </div>
                                <ul class="ps-list--dot nobull">
                                    <li> Действующее вещество (МНН):
                                        <?php for ($i = 0; $i < sizeof($cat_p['active_substance']); $i++) : ?>
                                            <a href="#">
                                                <?= $cat_p['active_substance'][$i]['tag_name'] ?>
                                            </a><?php if (($i + 1) != sizeof($cat_p['active_substance'])) : ?>,
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    </li>
                                    <li> Производитель: <?= $cat_p['product_brand']['brand_name'] ?>
                                    </li>
                                    <li> Категория:
                                        <?php for ($i = 0; $i < sizeof($cat_p['categories']); $i++) : ?>
                                            <a href="{base_url}main/categoryProducts/<?= $cat_p['categories'][$i]['id'] ?>">
                                                <?= $cat_p['categories'][$i]['category_name'] ?>
                                            </a><?php if (($i + 1) != sizeof($cat_p['categories'])) : ?>,
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                        <div class="ps-product__shopping">
                            <p class="ps-product__price product_long_format_price">
                                <span><?= $cat_p['product_price'] ?> <span>с.</span></span>
                                <?php if ($cat_p['product_old_price'] != 0) : ?>
                                    <del><?= $cat_p['product_old_price'] ?> c.</del>
                                <?php endif; ?>
                            </p>
                            <?php 
                                $char = "\"";
                                $charHtml = "&quot;";
                            ?>
                            <button class="ps-btn" onclick="add_to_cart(
                            '<?= $cat_p['id'] ?>',
                            '<?= str_replace($char, $charHtml,$cat_p['product_name']) ?>',
                            '<?= $cat_p['product_old_price'] ?>',
                            '<?= $cat_p['product_price'] ?>',
                            '<?= $cat_p['product_brand']['id'] ?>',
                            '<?= $cat_p['product_pic'] ?>',
                            '<?= $cat_p['total_count_in_store'] ?>',
                            '<?= $cat_p['product_articule'] ?>'
                        )" style="background: #4839C3;">В корзину</button>
                            <ul class="ps-product__actions">
                                <!-- <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li> -->
                                <!-- <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="ps-pagination">
            <ul class="pagination">
                <?php if (isset($category_products['prev_page'])) : ?>
                    <li><a href="javascript:topage(<?= $category_products['prev_page'] ?>)">
                    <i class="icon-chevron-left" style="margin-right:4px;margin-left:0;"></i>Пред. стр.</a></li>
                <?php endif; ?>
                <?php foreach ($category_products['pages'] as $page) : ?>
                    <li class="<?= $page['current'] ?>"><a href="javascript:topage(<?= $page['page'] ?>)"><?= $page['page'] ?></a></li>
                <?php endforeach; ?>
                <?php if (isset($category_products['next_page'])) : ?>
                    <li><a href="javascript:topage(<?= $category_products['next_page'] ?>)">След. стр.<i class="icon-chevron-right"></i></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="product_add_notification_div" style="display: none;">
    <i class="fa fa-check-circle" aria-hidden="true"></i>
    <span class="prod_add_notification_text">"<span class="span_added_prod_name"></span>" успешно добавлен в вашу корзину.</span>
</div>

<div class="product_add_notification_div_error" style="display: none;">
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
    <span class="prod_add_notification_text">К сожалению товар нет в наличии. Помощь по телефону 9990</span>
</div>
<script>
    var max_count_reached = false;
    function add_to_cart(id, name, old_price, price, brand, pic, total_count, product_articule) {
        max_count_reached = false;
        var array = [];
        var count = 1;
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
                        //     alert('Максимальное количество товаров');
                        //     max_count_reached = true;
                        // }
                        mydata[index] = elem;
                        found = true;
                    }
                });
                if (!found) {
                    mydata.push(obj);
                }
                // $.cookie("product_list", JSON.stringify(mydata));
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
    $('.sort_by_price, .sort_by_price_mobile').click(function() {
        if ($('.ps-filter--sidebar') && $('.ps-filter--sidebar').hasClass("active")) {
            if ($('.ps-site-overlay') && $('.ps-site-overlay').hasClass("active")) {
                $('.ps-site-overlay').removeClass("active");
            }
            $('.ps-filter--sidebar').removeClass("active");
        }
        $('.sort_by_price, .sort_by_price_mobile').css({
            'cssText': 'background: #89e486 !important;outline:none !important'
        })
    });
</script>