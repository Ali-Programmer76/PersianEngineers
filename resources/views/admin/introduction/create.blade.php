@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ساخت بخش مقدمه</h3>
        </div>
        <div class="my-2">
            {!! Form::open(['method' => 'POST', 'route' => 'introduction.store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر بخش مقدمه') !!}
                {!! Form::file('image', null) !!}
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('title', 'عنوان بخش مقدمه') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان بخش مقدمه را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'درباره شرکت') !!}
                {!! Form::text('description', null, ['placeholder' => 'درباره شرکت خود بنویسید...']) !!}
                @error('description')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('link', 'لینک بخش مقدمه') !!}
                {!! Form::text('link', null, ['placeholder' => 'لینک بخش مقدمه را وارد کنید...']) !!}
                @error('link')
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
