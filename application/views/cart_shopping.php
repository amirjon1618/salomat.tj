<div class="container main-mycart p-0">
    <div class="toast toast_empty2 fade hide">
        <div class="toast-body">
            <i class="fa fa-exclamation-triangle"></i>
            Корзина пуста!
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    
    <div class="mycart col-lg-8 col-md-6 col-sm-12 col-xs-12 p-0">

            <div class="ps-section--shopping ps-shopping-cart">
                <div class="container">
                    <div class="ps-section__header">
                        <h3>Моя корзина</h3>
                    </div>
                    <div class="ps-section__content">
                        <div class="table-responsive">
                            <table class="table ps-table--shopping-cart col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <thead>
                                    <tr>
                                        <th>Товар</th>
                                        <th>Цена</th>
                                        <th>Кол-во</th>
                                        <th>Итого</th>
                                    </tr>
                                </thead>
                                <tbody class="pr-list">
                                    <!--PRODUCT LIST-->

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <div class="mycart col-lg-4 col-md-6 col-sm-12 col-xs-12" style="display: flex; justify-content: center; align-items: center; padding-top: 9%;">
        <div class="toast toast_empty2 fade hide">
            <div class="toast-body">
                <i class="fa fa-exclamation-triangle"></i>
                Корзина пуста!
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="ps-page--simple">
            <div class="ps-section--shopping ps-shopping-cart">
                <div class="order-content">
                    <div class="ps-section__content ps-section__border">
                        <div class="ps-section__header">
                            <h3 class="px-5 fw-bold">Ваш заказ</h3>
                        </div>
                        <div class="price-product px-4 justify-content-between">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="border-0 fw-bolder table-text-bold" style="font-weight: 500;">Стоимост товаров: </td>
                                        <td class="border-0 table-text-end table-text-bold"><span class="number-currency">150 </span><span class="text-currency">TJS</span></td>
                                    </tr>
                                    <!--<tr>
                                        <td class="border-0">Стоимост доставки: </td>
                                        <td class="border-0 table-text-end table-text-bold">10 <span class="text-currency">TJS</span></td>
                                    </tr>-->
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4">
                        <table class="table py-5 justify-content-between">
                            <tbody>
                                <tr>
                                    <td class="border-0 table-text-bold" style="font-weight: 500;">Итого: </td>
                                    <td class="border-0 table-text-end table-text-bold"><span class="number-currency">150</span><span class="text-currency">TJS</span></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        </div>
                        <div class="price-text p-5">
                            <input type="text" class="border price-text__input" placeholder="Активировать промо код">
                            <button class="price-text__btn"><img src="{base_url}img/right-arrow.svg" alt=""></button>
                        </div>
                        
                    </div>
                    <div class="ps-section__cart-actions">
                        <a class="ps-btn ps-btn--outline checkout" href="{base_url}index.php/main/checkout">
                                Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function decrease_count_cart(id) {

        var mydata = $.parseJSON(localStorage.getItem("product_list"));
        mydata.forEach(function(item, index) {
            if (item.product_id == id) {
                item.product_count--;
                if (item.product_count < 1) {
                    item.product_count = 1;
                }
                mydata[index] = item;
                // $.cookie("product_list", JSON.stringify(mydata), {
                //     path: '/'
                // });
                localStorage.setItem("product_list", JSON.stringify(mydata))
                $('#count_input_ps' + id).val(item.product_count);
            }
        });
        product_list();
        set_prods_header();

    }

    function increase_count_cart(id) {
        var mydata = $.parseJSON(localStorage.getItem("product_list"));
        mydata.forEach(function(item, index) {
            if (item.product_id == id) {
                item.product_count++;
                // if (item.product_count > item.product_total_count) {
                //    item.product_count = item.product_total_count;
                // }
                mydata[index] = item;

                localStorage.setItem("product_list", JSON.stringify(mydata))
                $('#count_input_ps' + id).val(item.product_count);
            }
        });
        product_list();
        set_prods_header();
    }

    function change_count_cart(id) {
        var mydata = $.parseJSON(localStorage.getItem("product_list"));
        mydata.forEach(function(item, index) {
            if (item.product_id == id) {
                // if ($('#count_input_ps'+id).val() > item.product_total_count) {
                //     item.product_count = item.product_total_count;
                //     $('#count_input_ps'+id).val(item.product_total_count);
                // } else if ($('#count_input_ps'+id).val() < 1 || ! $.isNumeric($('#count_input_ps'+id).val())) {
                //     item.product_count = 1;
                //     $('#count_input_ps'+id).val(1);
                // } else {
                //     item.product_count = $('#count_input_ps'+id).val();
                // }
                if ($('#count_input_ps' + id).val() > 0) {
                    item.product_count = $('#count_input_ps' + id).val();
                } else {
                    item.product_count = 1;
                    $('#count_input_ps' + id).val(1);
                }
                mydata[index] = item;
                $('#count_input_ps' + id).val(item.product_count);
                // $.cookie("product_list", JSON.stringify(mydata), {
                //     path: '/'
                // });
                localStorage.setItem("product_list", JSON.stringify(mydata))
            }
        });
        product_list();
    }

    function remove_from_cart(id) {

        var mydata = $.parseJSON(localStorage.getItem("product_list"));
        if (mydata.length == 1) {
            // $.removeCookie('product_list', {
            //     path: '/'
            // });
            localStorage.removeItem("product_list")
            $('.pr-list').html('');
        } else {
            mydata.forEach(function(elem, index) {
                if (elem.product_id == id) {
                    mydata.splice(index, 1);
                    $('.pr-list-tr' + id).remove();
                }
            });
            // $.cookie("product_list", JSON.stringify(mydata), {
            //     path: '/'
            // });
            localStorage.setItem("product_list", JSON.stringify(mydata))
        }
        product_list();
        set_prods_header();
    }

    function product_list() {
        if (localStorage.getItem("product_list")) {
            var mydata = $.parseJSON(localStorage.getItem("product_list"));
            $('.pr-list').html('');
            mydata.forEach(function(item) {
                var tr = document.createElement('tr');
                tr.classList.add("pr-list-tr" + item.product_id);
                var td1 = document.createElement('td');
                var div1 = "<div class=\"ps-product--cart\">" +
                    "<div class=\"ps-product__thumbnail\">" +
                    "<a href=\"<?= $base_url ?>upload_product/" + item.product_pic + "\">" +
                    "<img src=\"<?= $base_url ?>upload_product/" + item.product_pic + "\" alt=\"\">" +
                    "</a>" +
                    "</div>" +
                    "<div class=\"ps-product__content\">" +
                    "<a href=\"<?= $base_url ?>index.php/main/product/" + item.product_id + "\">" +
                    item.product_name +
                    "</a>" +
                    "<p>" + item.product_brand + "</p>" +
                    "</div>" +
                    "</div>";
                td1.innerHTML += div1;
                var td2 = document.createElement('td');
                if (item.product_old_price != 0) {
                    var div2 = "<p class=\"margBot0\">" +
                        "<del>" + item.product_old_price + " c.</del>\n" +
                        "</p>" + item.product_price + " c.";
                } else {
                    var div2 = "<p class=\"margBot0\">" +
                        "</p>" + item.product_price + " c.";
                }
                td2.innerHTML += div2;
                var td3 = document.createElement('td');
                var dv3 = " <div class=\"form-group--number\">" +
                    "<button class=\"up_count\" onclick=\"increase_count_cart(" + item.product_id + ")\">+</button>" +
                    "<button class=\"down_count\" onclick=\"decrease_count_cart(" + item.product_id + ")\">-</button>" +
                    "<input class=\"form-control\" id=\"count_input_ps" + item.product_id + "\" onchange=\"change_count_cart(" + item.product_id + ")\" type=\"text\" placeholder=\"1\" value=\" " + item.product_count + "\">" +
                    "</div>";
                td3.innerHTML += dv3;
                var td4 = document.createElement('td');
                var text = document.createTextNode(item.product_count * item.product_price + ' c');
                td4.appendChild(text);

                var td5 = document.createElement('td');
                var tag5 = "<i style=\"cursor:pointer\" class=\"icon-cross\"  onclick=\"remove_from_cart(" + item.product_id + ")\"></i>";
                td5.innerHTML += tag5;
                tr.appendChild(td1);
                tr.appendChild(td2);
                tr.appendChild(td3);
                tr.appendChild(td4);
                tr.appendChild(td5);
                $('.pr-list').append(tr);
                $('.pr-list').find('td').css('text-align', 'center');
            })
        } else {
            $('.table-responsive').css('display', 'none');
            $('.checkout').css('display', 'none');
            $('.ps-section__cart-actions').css('justify-content', 'center');
            $('.ps-section__header').find('h1').append(" пуста <i class=\"fa fa-shopping-cart\"></i>");
            $('.ps-section__header').find('h1').css('color', 'gray');

            $('.pr-list').html('');
        }
    }


    $(document).ready(function() {
        set_prods_header();
        product_list();
        $('a.checkout').click(function(e) {
            if (!localStorage.getItem("product_list")) {
                e.preventDefault();
                $('.toast_empty2').toast({
                    delay: 1500
                });
                $('.toast_empty2').toast('show');
            }
        });
    })
</script>