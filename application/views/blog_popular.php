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

                        <!-- <article class="popular-blogs_content col-lg-2 col-md-4 col-sm-12 col-xs-12 post">
                                <img class="blog_pic img-fluid" src="{base_url}upload_blog/" alt="...">
                                <a href="{base_url}main/blogInfo">
                                        <h3 class="blog_title"></h3>
                                </a>
                                <span class="blog_created_at"></span>
                                <p class="text-justify blog_about"><a href="{base_url}main/blogInfo"> читать дальше ...</a></p>
                        </article> -->
                </div>
        </div>
</div>

<script>
        function getBlog() {
                $.ajax({
                        type: "GET",
                        url: "{base_url}blogs/blog_popular?page=1",
                        headers: {
                                "Accept": "application/json",
                        },
                        success: function(blogShow) {
                                // $(".blog_created_at").text(blogShow.content.blog_created_at);
                                // $(".blog_title").text(blogShow.content.blog_title);
                                // $(".blog_about").html(blogShow.content.blog_about);
                                blogShow.content.blogs.forEach((elem, ind) => {
                                        console.log(elem)
                                        const img = document.createElement("img");
                                        img.className += "blog_pic"
                                        img.src = "{base_url}upload_blog/" + elem.blog_pic;
                                        $(".bloginfo-imgs").append(img);
                                        console.log(elem.blog_pic);
                                        document.querySelector(".popular-blogs").innerHTML += `                 
                                                <article class="popular-blogs_content pbc_blog ${ind === 0 ? 'col-lg-4 col-md-8 col-sm-12 col-xs-12' : 'col-lg-2 col-md-4 col-sm-6 col-xs-6' } post">
                                                        <img class="blog_pic img-fluid" src="{base_url}upload_blog/${elem.blog_pic}" alt="...">
                                                        <a href="{base_url}main/blogInfo">
                                                                <h3 class="blog_title">${elem.blog_title}</h3>
                                                        </a>
                                                        <span class="blog_created_at">${elem.blog_created_at}</span>
                                                        <div class="blog-about_p">${elem.blog_about}</div>
                                                        <a href="{base_url}main/blogInfo"> читать дальше ...</a>
                                                </article> `;

                                })
                        }
                })

        }
        getBlog();
</script>
<style>
        .popular-blogs_content .blog-about_p {
                overflow: hidden;
                text-overflow: ellipsis;
                display: -moz-box;
                -moz-box-orient: vertical;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                -moz-line-clamp: 3;
                -moz-box-orient: vertical;
                line-clamp: 3;
                box-orient: vertical;
        }

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