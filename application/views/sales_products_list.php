<div class="ps-tabs">
    <div class="ps-tab active" id="tab-1">
        <div class="ps-shopping-product">
        <div class="row">
            <?php foreach ($total_products['total_prods'] as $cat_p) : ?>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 pb-5">
                        <div class="ps-products">
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
</script>