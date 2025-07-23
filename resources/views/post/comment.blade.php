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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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

        .forum_card_section .card-list .card .card-item .image {
            text-align: center;
        }

        .forum_card_section .card-list .card .card-item .image img {
            width: 100%;
            height: 250px;
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
            color: #2c347e;
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

        .ck-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 10px auto;
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
    <section class="forum_section">
        <div class="container">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Forum</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </div>
            <div class="forum_list">
                <div class="forum_item">
                    <div class="title mb-3">
                        <h2>{{ $post->title }}</h2>
                    </div>
                    <div class="image">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" width="100%">
                    </div>

                    <div class="description text-light">
                        <p>
                            {!! $post->desc !!}
                        </p>
                    </div>
                </div>
                <div class="comment_list">
                    <h3>মন্তব্য লিখুন</h3>
                    <div class="comment">
                        <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="post_slug" value="{{ $post->slug }}">
                            <div class="form-group">
                                <label for="title">নাম<span class="text-danger">*</span></label>
                                <input type="title" class="form-control" id="title" placeholder="আপনার নাম লিখুন"
                                    name="title" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="mt-3">ইমেইল<span class="text-danger">*</span></label>
                                <input type="email" name="email" value="" class="form-control"
                                    placeholder="আপনার ইমেইল লিখুন">
                            </div>
                            <div class="form-group">
                                <label for="comment" class="mt-3">মন্তব্য<span class="text-danger">*</span></label>
                                <textarea name="comment" class="form-control" id="comment" placeholder="আপনার মন্তব্য লিখুন"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success submitBtn">Submit</button>
                            </div>
                        </form>
                    </div>
                    @foreach ($post->comments as $comment)
                        <div class="comment_item">
                            <div class="commenter">
                                <h3>{{ $comment->title }}</h3>
                            </div>
                            <div class="comment_details">
                                <p>{{ $comment->comment }}</p>
                            </div>
                            <div class="reply text-end">
                              
                                <a href="javascript:void(0);" onclick="toggleReplyForm('{{ $comment->slug }}')">উত্তর দিন</a>
                            </div>
                            <div id="reply-form-{{ $comment->slug }}" style="display: none; margin-top: 10px;">
                                <form action="{{ route('comments.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="post_slug" value="{{ $post->slug }}">
                                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                    <div class="form-group">
                                        <label for="title">নাম<span class="text-danger">*</span></label>
                                        <input type="name" class="form-control" id="name"
                                            placeholder="আপনার নাম লিখুন" name="title" value="" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="email" class="mt-3">ইমেইল<span
                                                class="text-danger">*</span></label>
                                        <input type="email" name="email" value="" class="form-control"
                                            placeholder="আপনার ইমেইল লিখুন">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment" class="mt-3">মন্তব্য<span
                                                class="text-danger">*</span></label>
                                        <textarea name="comment" class="form-control" id="comment" placeholder="আপনার মন্তব্য লিখুন"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success submitBtn">Submit</button>
                                    </div>
                                </form>
                            </div>
                            @if ($comment->replies)
                                <div class="replies" style="margin-left: 50px; margin-top: 10px;">
                                    @foreach ($comment->replies as $reply)
                                        <div class="reply_item">
                                            <h5>{{ $reply->title }}</h5>
                                            <p>{{ $reply->comment }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
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


    <script>
        function toggleReplyForm(commentId) {
            const form = document.getElementById('reply-form-' + commentId);
            form.style.display = (form.style.display === 'none') ? 'block' : 'none';
        }
    </script>
     <script>
        $(document).ready(function() {
            $('#title').on('input', function() {
                slugGenerate($(this));
            });
        });

        function slugGenerate(title) {
            let inputTitle = title.val();
            let slug = inputTitle
                .toLowerCase()
                .replace(/[^\w ]+/g, '') // Remove special characters
                .replace(/ +/g, '-'); // Replace spaces with hyphens
            $('#slug').val(slug);
        }
    </script>
     <script>
        $(document).ready(function() {
            $('#name').on('input', function() {
                slugGenerate($(this));
            });
        });

        function slugGenerate(name) {
            let inputName = name.val();
            let slug = inputName
                .toLowerCase()
                .replace(/[^\w ]+/g, '') // Remove special characters
                .replace(/ +/g, '-'); // Replace spaces with hyphens
            $('#slug').val(slug);
        }
    </script>

</body>

</html>
