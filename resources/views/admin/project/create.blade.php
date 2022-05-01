@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ساخت بخش پروژه</h3>
        </div>
        <div class="my-2">
            {!! Form::open(['method' => 'POST', 'route' => 'project.store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر پروژه') !!}
                {!! Form::file('image', null) !!}
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('alt', 'توضیحات تصویر پروژه') !!}
                {!! Form::text('alt', null, ['placeholder' => 'توضیحات تصویر پروژه را وارد کنید...']) !!}
                @error('alt')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('title', 'عنوان پروژه') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان پروژه را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'درباره پروژه') !!}
                {!! Form::text('description', null, ['placeholder' => 'درباره این پروژه شرکت بنویسید...']) !!}
                @error('description')
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
