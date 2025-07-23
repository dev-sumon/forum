<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forum</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CKEditor 5 Classic CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <style>
        textarea {
            height: 400px;
            max-height: 600px;
        }
    </style>

</head>

<body>
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span class="float-left card-title">
                            <h4>{{ __('Create new Admin') }}</h4>
                        </span>
                        <span class="float-right">
                            <a href="" class="btn btn-info">{{ __('back') }}</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 m-auto">
                                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category">{{ __('category') }} <span
                                                class="text-danger">*</span></label>

                                        <select name="category_id" id="category" class="form-control">
                                            <option value="">-- Select Category --</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                                                    {{ $cat->title }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('category_id'))
                                            <div class="text-danger">{{ $errors->first('category_id') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="title">{{ __('Title') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter Post Title" name="title" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <div class="text-danger">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">{{ __('Slug') }}</label>
                                            <input type="text" name="slug" class="form-control" id="slug"
                                                value="{{ old('slug') }}">
                                            @error('slug')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Description</label>
                                        <textarea name="desc" id="editor" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">{{ __('Image') }}</label>
                                        <input type="file" class="form-control h-auto" id="image"
                                            placeholder="Enter Stand Image" name="image" value="{{ old('image') }}">
                                        @if ($errors->has('image'))
                                            <div class="text-danger">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success w-100 submitBtn">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        ClassicEditor
            .create(document.querySelector('#editor'), {
                mediaEmbed: {
                    previewsInData: true
                },
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload') . '?_token=' . csrf_token() }}"
                }
            })
            .then(editor => {
                console.log('Editor initialized:', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
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
                .replace(/[^\w ]+/g, '') 
                .replace(/ +/g, '-');
            $('#slug').val(slug);
        }
    </script>
</body>
</html>
