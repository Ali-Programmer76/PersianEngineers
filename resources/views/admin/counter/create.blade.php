@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ساخت بخش شمارنده</h3>
        </div>
        <div class="my-2">
            {!! Form::open(['method' => 'POST', 'route' => 'counter.store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر بخش شمارنده') !!}
                {!! Form::file('image', null) !!}
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('title', 'عنوان شمارنده') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان شمارنده را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'توضیحات شمارنده') !!}
                {!! Form::text('description', null, ['placeholder' => 'توضیحات شمارنده را وارد کنید...']) !!}
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
