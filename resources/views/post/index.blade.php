
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Post</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Hind+Siliguri -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- OwlCarouse slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="style/style.css">

    <style>
        .forum_card_section {
            margin-top: 30px;
        }

        .forum_card_section .forum_title h2 {
            font-family: "Hind Siliguri", sans-serif;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .forum_card_section .card-list {
            display: flex;
            gap: 20px;
        }

        .forum_card_section .card-list .card .card-item {
            height: 500px;
            object-fit: cover;
        }
        .forum_card_section .card-list .card .card-item .image {
            text-align: center;
        }

        .forum_card_section .card-list .card .card-item .image img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .forum_card_section .card-list .card .card-item .title {
            padding: 10px;
        }

        .forum_card_section .card-list .card .card-item .title h2 a {
            text-decoration: none;
            color: #2c347e;
            font-family: "Hind Siliguri", sans-serif;
            font-weight: 600;
        }
        .forum_card_section .card-list .card .card-item .description {
            padding: 10px;
            color: #000;
            font-family: "Hind Siliguri", sans-serif;
            font-weight: 400;
        }

        .forum_section {
            padding: 100px 0px;
        }

        .forum_section .fourm {
            display: flex;
            gap: 3%;
        }

        .forum_section .fourm .forum_category {
            width: 50%;
        }

        .forum_section .fourm .forum_category .title {
            color: #e16127;
            font-weight: 600;
            font-family: "Hind Siliguri", sans-serif;
            border-bottom: 1px solid #fff;
        }

        .forum_section .fourm .forum_category .category_list ul {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .forum_section .fourm .forum_category .category_list ul li {
            margin-bottom: 10px;
            font-family: "Hind Siliguri", sans-serif;
        }

        .forum_section .fourm .forum_category .category_list ul li:last-child {
            margin-bottom: 0px;
        }

        .forum_section .forum_list .forum_item {
            padding: 5px 10px;
            border-bottom: 3px solid #2c347e;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .forum_section .forum_list .forum_item .title a {
            color: #2c347e;
            text-decoration: none;
            font-size: 36px;
            font-weight: 600;
            font-family: "Hind Siliguri", sans-serif;
            line-height: 30px;
            margin-bottom: 5px;
        }

        .forum_section .forum_list .forum_item .description p {
            color: #000;
            font-family: "Hind Siliguri", sans-serif;
            font-weight: 400;
            margin: 0;
        }

        .forum_section .forum_list .forum_item .comment {
            text-align: end;
        }

        .forum_section .forum_list .forum_item .comment a {
            text-decoration: none;
            color: #f08027;
            font-size: 20px;
        }

        .forum_section .forum_list .forum_item .title h2 {
            color: #2c347e;
        }

        .forum_section .forum_list .forum_item .image {
            margin-bottom: 20px;
            text-align: center;
        }

        .comment_list h3 {
            font-family: "Hind Siliguri", sans-serif;
        }

        .comment_list .comment_item .comment_details p {
            font-family: "Hind Siliguri", sans-serif;
        }

        .comment_list .comment_item .reply a {
            font-family: "Hind Siliguri", sans-serif;
        }

        .owl-carousel .item {
            height: 100%;
            overflow: hidden;
        }

        .card-item {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        @media(max-width:768px) {
            .forum_section .fourm {
                display: block;
            }
            .forum_section .fourm .forum_category {
                width: 100%;
                margin-bottom: 20px;
            }

        }
    </style>
</head>

<body>
    <section class="forum_card_section">
        <div class="container">
            <div class="forum_title">
                <h2>{{ __('টেন্ডিং ফোরাম') }}</h2>
            </div>
            <div class="card-list">
                <div class="owl-carousel owl-theme">
                    @foreach ($posts as $post)
                        <div class="card item">
                            <div class="card-item">
                                <div class="image">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="">
                                </div>
                                <div class="title">
                                    <h2><a href="{{ route('posts.single', $post->slug) }}">{{ $post->short_title }}</a>
                                    </h2>
                                </div>
                                <div class="description">
                                    {{ strip_tags($post->short_desc) }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="forum_section">
        <div class="container">
            <div class="fourm">
                <div class="forum_category">
                    <div class="card p-3">
                        <div class="title" id="categoryToggle">
                            <h2>{{ __('ক্যাটেগরি') }} <i class="fa-solid fa-angle-down"></i></h2>
                        </div>
                        <div class="category_list">
                            <ul>
                                @foreach ($categories as $key => $categorie)
                                    <li><a href="{{ route('categroy.post', $categorie->slug) }}">{{ $categorie->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="forum_list">
                    <div class="card p-3">
                        @foreach ($posts as $post)
                            <div class="forum_item mb-5">
                                <div class="title mb-3">
                                    <a href="{{ route('posts.single', $post->slug) }}">{{ $post->title }}</a>
                                </div>
                                <div class="description">
                                    {!! $post->short_desc !!}
                                </div>
                                <div class="comment text">
                                    <a href="{{ route('posts.comment', $post->slug) }}">
                                        <span>{{ $post->comments_count }}</span> <i
                                            class="fa-solid fa-message"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- Jquery cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/main.js"></script>


    <script>
        // category toggle
        document.addEventListener("DOMContentLoaded", function() {
            const toggle = document.getElementById("categoryToggle");
            const categoryList = document.querySelector(".category_list ul");

            if (window.innerWidth <= 768) {
                categoryList.style.display = "none"; // default hide

                toggle.addEventListener("click", function() {
                    if (categoryList.style.display === "none") {
                        categoryList.style.display = "block";
                    } else {
                        categoryList.style.display = "none";
                    }
                });
            }
        });
    </script>
    <script>
        // owl-carousel slider
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>

</html>
