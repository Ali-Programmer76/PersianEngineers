<section class="blog py-5">
    <div class="container-lg py-5">
        <div class="blog-header">
            <h6 class="text-primary text-center fs-6 fw-bold">وبلاگ ما</h6>
            <h1 class="text-dark text-center fw-bold mt-3">بلاگ های اخیر</h1>
        </div>
        <div class="blog-body my-5">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 mt-4 mt-md-0">
                        <div class="blog-item bg-white">
                            <div class="blog-item-img">
                                <a href="{{ route('blog.detail', $blog->id) }}">
                                    <img src="{{ asset('admin/images/blog/' . $blog->image) }}" alt="" />
                                    <div class="blog-item-img-date">{{ $blog->persianDate() }}</div>
                                </a>
                            </div>
                            <div class="blog-item-text px-4 py-3">
                                <div class="blog-item-text-information d-flex">
                                    <div class="blog-author d-flex">
                                        <i class="fas fa-user"></i>
                                        <h6 class="pe-1 fw-bold">{{ $blog->user->name }}</h6>
                                    </div>
                                    <div class="blog-comment pe-3 d-flex text-primary">
                                        <i class="fas fa-bars"></i>
                                        <h6 class="pe-1 fw-bold">{{ $blog->category->name }}</h6>
                                    </div>
                                </div>
                                <div class="blog-item-text-title my-3">
                                    <a href="{{ route('blog.detail', $blog->id) }}">
                                        <h2 class="fs-5 fw-bold">{{ $blog->subject }}</h2>
                                    </a>
                                </div>
                                <div class="blog-item-text-description">
                                    <p class="text-muted">{{ Str::limit($blog->body, 100, '...') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="blog-footer">
            <div class="text-center">
                <a href="{{ route('blog') }}" class="btn bg-primary text-dark fs-6 fw-bold px-5 py-2">تمام بلاگ ها</a>
            </div>
        </div>
    </div>
</section>
