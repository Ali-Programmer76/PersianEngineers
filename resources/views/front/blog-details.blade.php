@extends('front.layouts.master')

@section('style')
    @if (!empty($blog))
        <meta name="description" content="{{ $blog->description }}">
        <meta name="keywords" content="{{ $blog->keywords }}">
        <meta property="og:title" content="{{ $blog->title }}">
        <meta property="og:description" content="{{ $blog->description }}">
        <title>{{ $blog->title }}</title>
    @else
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta property="og:site_name" value="">
        <meta property="og:title" content="">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <title></title>
    @endif
@endsection

@section('content')
    @include('front.partials.top-header')
    @include('front.partials.header')
    <main class="detail-website py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <main class="blog-details">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <div class="blog-details-item bg-white p-3">
                                    <div
                                        class="blog-details-item-header d-flex align-items-center justify-content-between my-3">
                                        <h4 class="text-dark fs-4 fw-bold">{{ $blog->subject }}</h4>
                                        <h6 class="text-primary">
                                            <i class="fas fa-user"></i>
                                            <span>{{ $blog->user->name }}</span>
                                        </h6>
                                    </div>
                                    <div class="blog-details-item-body">
                                        <div class="blog-item-img">
                                            <img src="{{ asset('admin/images/blog/' . $blog->image) }}"
                                                alt="{{ $blog->alt }}" class="img-fluid img-thumbnail w-100">
                                        </div>
                                        <div
                                            class="blog-item-date d-flex justify-content-end d-flex justify-content-between">
                                            <h5 class="text-primary fs-6 fw-bold py-3">{{ $blog->category->name }}</h5>
                                            <h5 class="text-primary fs-6 fw-bold py-3">{{ $blog->persianDate() }}</h5>
                                        </div>
                                        <div class="blog-item-text my-4 py-2">
                                            <p class="text-muted">{{ $blog->description }}</p>
                                        </div>
                                        <h2 class="mt-5 fs-3 fw-bold">نظرات کاربران</h2>
                                        <div class="blog-item-comment my-5">
                                            @foreach ($comments as $comment)
                                                <div class="comment-write bg-light mt-3 p-3 shadow-sm">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="comment-write-img">
                                                                <img src="{{ asset('front/images/testimonial/1.webp') }}"
                                                                    class="rounded-circle img-fluid img-thumbnail w-100"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="comment-write-text">
                                                                <div
                                                                    class="comment-write-text-title d-flex justify-content-between align-items-center mt-2 mt-sm-0">
                                                                    <h6 class="text-primary">{{ $comment->user->name }}
                                                                    </h6>
                                                                    <a class="text-primary"
                                                                        onclick="setReply({{ $comment->id }})"
                                                                        href="#comment-reply">پاسخ</a>
                                                                </div>
                                                                <div class="comment-write-text-description mt-3">
                                                                    <p class="text-muted">{{ $comment->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach ($comment->children as $child)
                                                    <div class="comment-reply bg-dark mt-3 p-3 shadow-sm">
                                                        <div class="row">
                                                            <div class="col-sm-2">
                                                                <div class="comment-reply-img">
                                                                    <img src="{{ asset('front/images/testimonial/2.webp') }}"
                                                                        class="rounded-circle img-fluid img-thumbnail w-75"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <div class="comment-reply-text">
                                                                    <div class="comment-reply-text-title mt-2 mt-sm-0">
                                                                        <h6 class="text-primary">{{ $child->user->name }}
                                                                        </h6>
                                                                    </div>
                                                                    <div class="comment-reply-text-description mt-3">
                                                                        <p class="text-white">{{ $child->description }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        </div>
                                        @if (auth()->check())
                                            <div class="blog-item-send-comment mt-5">
                                                <form action="{{ route('comment.ajax') }}" method="post"
                                                    id="form-comment-ajax">
                                                    @csrf
                                                    <div class="row input-group">
                                                        <div class="col-md-12 mt-4">
                                                            <textarea name="description" class="form-control comment-description p-3" placeholder="لطفاً نظر خود را وارد کنید..."></textarea>
                                                        </div>
                                                        <input type="hidden" name="blog_id"
                                                            value="{{ $blog->id }}"></input>
                                                        <input type="hidden" name="parent_id" value=""
                                                            id="comment-reply"></input>
                                                        <div class="col-md-12 mt-4">
                                                            <button type="submit"
                                                                class="bg-primary text-dark px-5 py-2 border-0">ارسال</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @else
                                            <div class="text-center p-4 bg-primary">
                                                <p>برای ثبت نظر شما باید ابتدا وارد حساب کاربری خود شوید.</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <div class="sidebar-item bg-white p-3">
                                    <div class="sidebar-item-title my-3">
                                        <h6 class="text-dark fs-5 fw-bold mb-3">آخرین پروژه ها</h6>
                                    </div>
                                    @foreach ($projects as $project)
                                        <div class="sidebar-item-text d-flex align-items-center mt-4">
                                            <img src="{{ asset('admin/images/project/' . $project->image) }}"
                                                alt="{{ $project->alt }}" class="img-fluid img-thumbnail">
                                            <p class="pe-3">
                                                <a href="" class="text-muted">{{ $project->description }}</a>
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
    @include('front.partials.footer')
@endsection

@section('javaScript')
    <script>
        $('#form-comment-ajax').submit(function(e) {
            e.preventDefault();
            let description = $('textarea[name=description]').val();
            let blog_id = $('input[name=blog_id]').val();
            let parent_id = $('input[name=parent_id]').val();
            let token = $('input[name=_token]').val();
            let url = $('#form-comment-ajax').attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    'description': description,
                    'blog_id': blog_id,
                    'parent_id': parent_id,
                    '_token': token
                },
                success: function(response) {
                    if (response) {
                        $.toast({
                            heading: 'با تشکر از شما',
                            text: 'نظر شما با موفقیت ارسال شد و پس از تأیید از سوی مدیریت به نمایش گذاشته خواهد شد.',
                            showHideTransition: 'slide',
                            hideAfter: 5000,
                            position: 'bottom-right',
                            icon: 'success'
                        });
                        $('textarea[name=description]').val("");
                    }
                }
            });
        });
    </script>
    <script>
        function setReply(id) {
            document.querySelector('#comment-reply').value = id;
            let comment_description = document.querySelector('.comment-description');
            comment_description.classList.add('display');
        }
    </script>
@endsection
