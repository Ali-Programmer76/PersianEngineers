@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش بخش خدمات</h3>
        </div>
        <div class="my-2">
            {!! Form::model($service, ['method' => 'PUT', 'route' => ['service.update', $service->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر بخش خدمات') !!}
                {!! Form::file('image', null) !!}
                <p class="mt-2">
                    <img src="{{ asset('admin/images/service/' . $service->image) }}" width="150px" alt="">
                </p>
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('alt', 'توضیحات تصویر بخش خدمات') !!}
                {!! Form::text('alt', null, ['placeholder' => 'توضیحات تصویر بخش خدمات را وارد کنید...']) !!}
                @error('alt')
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
                {!! Form::textarea('service_description_first', null, ['placeholder' => 'درباره خدمت اول خود بنویسید...']) !!}
                @error('service_description_first')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_link_first', 'لینک خدمت اول') !!}
                {!! Form::text('service_link_first', null, ['placeholder' => 'لینک خدمت اول را وارد کنید...']) !!}
                @error('service_link_first')
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
                {!! Form::textarea('service_description_second', null, ['placeholder' => 'درباره خدمت دوم خود بنویسید...']) !!}
                @error('service_description_second')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_link_second', 'لینک خدمت دوم') !!}
                {!! Form::text('service_link_second', null, ['placeholder' => 'لینک خدمت دوم را وارد کنید...']) !!}
                @error('service_link_second')
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
                {!! Form::textarea('service_description_third', null, ['placeholder' => 'درباره خدمت سوم خود بنویسید...']) !!}
                @error('service_description_third')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('service_link_third', 'لینک خدمت سوم') !!}
                {!! Form::text('service_link_third', null, ['placeholder' => 'لینک خدمت سوم را وارد کنید...']) !!}
                @error('service_link_third')
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
