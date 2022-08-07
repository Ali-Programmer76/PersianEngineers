@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش بخش خانه</h3>
        </div>
        <div class="my-2">
            {!! Form::model($hero, ['method' => 'PUT', 'route' => ['home.update', $hero->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر بخش خانه') !!}
                {!! Form::file('image', null) !!}
                <p class="mt-2">
                    <img src="{{ asset('admin/images/hero/' . $hero->image) }}" width="150px" alt="">
                </p>
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('established', 'سال تأسیس شرکت') !!}
                {!! Form::text('established', null, ['placeholder' => 'سال تأسیس شرکت را وارد کنید...']) !!}
                @error('established')
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
                {!! Form::label('about', 'لینک درباره ما') !!}
                {!! Form::text('about', null, ['placeholder' => 'لینک بخش درباره ما را وارد کنید...']) !!}
                @error('about')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('question', 'لینک سؤالات متداول') !!}
                {!! Form::text('question', null, ['placeholder' => 'لینک بخش سؤالات متداول را وارد کنید...']) !!}
                @error('question')
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
