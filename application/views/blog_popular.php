<div id="homepage-3">
        <div class="ps-breadcrumb">
                <div class="container">
                        <div class="ps-container category-products_breadcrumb padding">
                                <ul class="breadcrumb">
                                        <li><a href="{base_url}index.php/main">Главная /</a></li>
                                        <li>
                                                Блог </li>
                                        <li>
                                                Все статьи </li>
                                </ul>
                        </div>
                </div>
        </div>
        <div class="container mt-5">
                <h2 class="mb-5">Полулярное</h2>
                <div class="popular-blogs row">
                        <article class="popular-blogs_content pbc_blog col-lg-4 col-md-8 col-sm-12 col-xs-12 post">
                                <img src="{base_url}img/vacsina.jpg" class="img-fluid h-10" style="height: 150px;" alt="...">
                                <a href="{base_url}main/blogInfo">
                                        <h3 class="blog_title">Семь основных причин, почему вакцинироваться должен каждый </h3>
                                </a>
                                <span class="blog_created_at">25.09.2021</span>
                                <p class="text-justify blog_about">Ежегодно иммунизация спасает жизни более 3 миллионов человек во всем мире, а также спасает еще больше миллионов людей от болезней и пожизненной инвалидизации (Расчетные данные ВОЗ, 2009 г.).<a href="{base_url}main/blogInfo"> читать дальше ...</a></p>
                        </article>
                        <article class="popular-blogs_content col-lg-2 col-md-4 col-sm-12 col-xs-12 post">
                                <img src="{base_url}img/drug1-min.jpg" class="img-fluid" alt="...">
                                <a href="{base_url}main/blogInfo">
                                        <h3 class="blog_title">Витамин С - мощный союзник человека </h3>
                                </a>
                                <span class="blog_created_at">25.09.2021</span>
                                <p class="text-justify blog_about">Благодаря эффективным программам вакцинации большинство населения никогда не ....<a href="{base_url}main/blogInfo"> читать дальше ...</a></p>
                        </article>
                </div>
        </div>
</div>

<script>
        function getBlog() {
                $.ajax({
                        type: "GET",
                        url: "{base_url}blogs/blog_popular",
                        headers: {
                                "Accept": "application/json",
                        },
                        success: function(blogShow) {
                                console.log(blogShow.content)
                                $(".blog_created_at").text(blogShow.content[0].blog_created_at);
                                $(".blog_title").text(blogShow.content[0].blog_title);
                                $(".blog_about").html(blogShow.content[0].blog_about);

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