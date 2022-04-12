@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش بخش درباره ما</h3>
        </div>
        <div class="my-2">
            {!! Form::model($about, ['method' => 'PUT', 'route' => ['about.update', $about->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر بخش درباره ما') !!}
                {!! Form::file('image', null) !!}
                <p class="mt-2">
                    <img src="{{ asset('admin/images/about/' . $about->image) }}" width="150px" alt="">
                </p>
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('alt', 'توضیحات تصویر بخش درباره ما') !!}
                {!! Form::text('alt', null, ['placeholder' => 'توضیحات تصویر بخش درباره ما را وارد کنید...']) !!}
                @error('alt')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('title', 'عنوان بخش درباره ما') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان بخش درباره ما را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('subtitle', 'درباره عنوان شرکت') !!}
                {!! Form::text('subtitle', null, ['placeholder' => 'درباره عنوان شرکت خود بنویسید...']) !!}
                @error('subtitle')
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
                {!! Form::label('help', 'عنوان بخش خدمات') !!}
                {!! Form::text('help', null, ['placeholder' => 'عنوان بخش خدمات را وارد کنید...']) !!}
                @error('help')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_title_first', 'عنوان خدمت اول') !!}
                {!! Form::text('service_title_first', null, ['placeholder' => 'عنوان خدمت اول را وارد کنید...']) !!}
                @error('service_title_first')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_description_first', 'درباره خدمت اول') !!}
                {!! Form::text('service_description_first', null, ['placeholder' => 'درباره خدمت اول خود بنویسید...']) !!}
                @error('service_description_first')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_title_second', 'عنوان خدمت دوم') !!}
                {!! Form::text('service_title_second', null, ['placeholder' => 'عنوان خدمت دوم را وارد کنید...']) !!}
                @error('service_title_second')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_description_second', 'درباره خدمت دوم') !!}
                {!! Form::text('service_description_second', null, ['placeholder' => 'درباره خدمت دوم خود بنویسید...']) !!}
                @error('service_description_second')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_title_third', 'عنوان خدمت سوم') !!}
                {!! Form::text('service_title_third', null, ['placeholder' => 'عنوان خدمت سوم را وارد کنید...']) !!}
                @error('service_title_third')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_description_third', 'درباره خدمت سوم') !!}
                {!! Form::text('service_description_third', null, ['placeholder' => 'درباره خدمت سوم خود بنویسید...']) !!}
                @error('service_description_third')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_title_fourth', 'عنوان خدمت چهارم') !!}
                {!! Form::text('service_title_fourth', null, ['placeholder' => 'عنوان خدمت چهارم را وارد کنید...']) !!}
                @error('service_title_fourth')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_description_fourth', 'درباره خدمت چهارم') !!}
                {!! Form::text('service_description_fourth', null, ['placeholder' => 'درباره خدمت چهارم خود بنویسید...']) !!}
                @error('service_description_fourth')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('experience_title', 'سال تجربه کاری شرکت') !!}
                {!! Form::text('experience_title', null, ['placeholder' => 'سال تجربه کاری شرکت خود را وارد کنید...']) !!}
                @error('experience_title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('experience_description', 'درباره تجربه کاری شرکت') !!}
                {!! Form::text('experience_description', null, ['placeholder' => 'درباره تجربه کاری شرکت خود بنویسید...']) !!}
                @error('experience_description')
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
