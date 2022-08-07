@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش بخش دسته بندی</h3>
        </div>
        <div class="my-2">
            {!! Form::model($category, ['method' => 'PUT', 'route' => ['category.update', $category->id]]) !!}
            <div class="form-group">
                {!! Form::label('name', 'نام دسته بندی') !!}
                {!! Form::text('name', null, ['placeholder' => 'نام دسته بندی مورد نظر خود را وارد کنید...']) !!}
                @error('name')
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
