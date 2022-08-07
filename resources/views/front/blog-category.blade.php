@extends('front.layouts.master')

@section('style')
    <title>بلاگ ها</title>
@endsection

@section('content')
    @include('front.partials.top-header')
    @include('front.partials.header')
    <main class="detail-website py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <main class="blog">
                        <div class="row">
                            @forelse ($blogs as $blog)
                                <div class="col-md-6 mt-4">
                                    <div class="main-blog-item bg-white p-3">
                                        <img src="{{ asset('admin/images/blog/' . $blog->image) }}"
                                            alt="{{ $blog->alt }}" class="img-fluid w-100 img-thumbnail">
                                        <h6 class="text-dark fs-5 fw-bold my-2">{{ $blog->subject }}</h6>
                                        <p class="text-muted my-3">{{ Str::limit($blog->description, 100, '...') }}</p>
                                        <a href="{{ route('blog.detail', $blog->id) }}" class="text-primary">مشاهده
                                            بیشتر</a>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-12 mt-4 text-center">
                                    <div class="main-blog-item bg-white p-5">
                                        <h6 class="text-dark fs-5 fw-bold mb-4">محتوایی برای نمایش وجود ندارد.</h6>
                                        <a href="{{ route('blog') }}" class="btn btn-primary">بازگشت</a>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </main>
                    <div class="pagination my-3">
                        {{ $blogs->links() }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <div class="sidebar-item bg-white p-3">
                                    <div class="sidebar-item-title my-3">
                                        <h6 class="text-dark fs-5 fw-bold mb-3">دسته بندی بلاگ ها</h6>
                                    </div>
                                    @foreach ($categories as $category)
                                        <div class="sidebar-item-text d-flex align-items-center mt-4">
                                            <p class="pe-3">
                                                <a href="{{ route('blog.category', $category->id) }}"
                                                    class="text-muted">{{ $category->name }}</a>
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
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
