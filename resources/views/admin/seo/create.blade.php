@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ساخت بخش سئو</h3>
        </div>
        <div class="my-2">
            {!! Form::open(['method' => 'POST', 'route' => 'seo.store']) !!}
            <div class="form-group">
                {!! Form::label('title', 'نام شرکت') !!}
                {!! Form::text('title', null, ['placeholder' => 'نام شرکت خود را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'درباره شرکت') !!}
                {!! Form::textarea('description', null, ['placeholder' => 'درباره شرکت خود بنویسید...']) !!}
                @error('description')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('keywords', 'کلمات کلیدی وبسایت') !!}
                {!! Form::textarea('keywords', null, ['placeholder' => 'کلمات کلیدی وبسایت خود را میتوانید با ، از هم جدا کنید...']) !!}
                @error('keywords')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('site_name', 'نام وبسایت') !!}
                {!! Form::text('site_name', null, ['placeholder' => 'نام وبسایت خود را وارد کنید...']) !!}
                @error('site_name')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('site_url', 'آدرس وبسایت') !!}
                {!! Form::text('site_url', null, ['placeholder' => 'آدرس وبسایت خود را وارد کنید...']) !!}
                @error('site_url')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('twitter_name', 'نام توییتر شرکت') !!}
                {!! Form::text('twitter_name', null, ['placeholder' => 'نام توییتر شرکت خود را وارد کنید...']) !!}
                @error('twitter_name')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('twitter_description', 'درباره شرکت در توییتر') !!}
                {!! Form::textarea('twitter_description', null, ['placeholder' => 'درباره شرکت خود در توییتر بنویسید...']) !!}
                @error('twitter_description')
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
