@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش بخش بلاگ</h3>
        </div>
        <div class="my-2">
            {!! Form::model($blog, ['method' => 'PUT', 'route' => ['blogs.update', $blog->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر بلاگ') !!}
                {!! Form::file('image', null) !!}
                <p class="mt-2">
                    <img src="{{ asset('admin/images/blog/' . $blog->image) }}" width="150px" alt="">
                </p>
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('alt', 'توضیحات تصویر بلاگ') !!}
                {!! Form::textarea('alt', null, ['placeholder' => 'توضیحات تصویر بلاگ خود را وارد کنید...']) !!}
                @error('alt')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('subject', 'موضوع بلاگ') !!}
                {!! Form::text('subject', null, ['placeholder' => 'موضوع بلاگ خود را وارد کنید...']) !!}
                @error('subject')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('body', 'درباره بلاگ') !!}
                {!! Form::textarea('body', null, ['placeholder' => 'درباره بلاگ خود بنویسید...']) !!}
                @error('body')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('title', 'عنوان سئوی بلاگ') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان لازم برای سئوی بلاگ خود را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'توضیحات سئوی بلاگ') !!}
                {!! Form::textarea('description', null, ['placeholder' => 'توضیحات لازم برای سئوی بلاگ خود را وارد کنید...']) !!}
                @error('description')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('keywords', 'کلمات کلیدی سئوی بلاگ') !!}
                {!! Form::text('keywords', null, ['placeholder' => 'کلمات کلیدی لازم برای سئوی بلاگ خود را وارد کنید...']) !!}
                @error('keywords')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::submit('ثبت اطلاعات', ['class' => 'btn-form']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
