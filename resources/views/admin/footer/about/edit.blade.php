@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش فوتر - بخش درباره ما</h3>
        </div>
        <div class="my-2">
            {!! Form::model($footerAbout, ['method' => 'PUT', 'route' => ['footerAbout.update', $footerAbout->id]]) !!}
            <div class="form-group">
                {!! Form::label('title', 'عنوان درباره ما') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان درباره ما را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'توضیحات درباره ما') !!}
                {!! Form::textarea('description', null, ['placeholder' => 'توضیحات درباره ما را وارد کنید...']) !!}
                @error('description')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('instagram', 'آدرس اینستاگرام شرکت') !!}
                {!! Form::text('instagram', null, ['placeholder' => 'آدرس اینستاگرام شرکت را وارد کنید...']) !!}
                @error('instagram')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('twitter', 'آدرس توییتر شرکت') !!}
                {!! Form::text('twitter', null, ['placeholder' => 'آدرس توییتر شرکت را وارد کنید...']) !!}
                @error('twitter')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('telegram', 'آدرس کانال تلگرام شرکت') !!}
                {!! Form::text('telegram', null, ['placeholder' => 'آدرس کانال تلگرام شرکت را وارد کنید...']) !!}
                @error('telegram')
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
