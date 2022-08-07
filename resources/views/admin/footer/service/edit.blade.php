@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش فوتر - بخش خدمات ما</h3>
        </div>
        <div class="my-2">
            {!! Form::model($footerService, ['method' => 'PUT', 'route' => ['footerService.update', $footerService->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر بخش خدمات ما') !!}
                {!! Form::file('image', null) !!}
                <p class="mt-2">
                    <img src="{{ asset('admin/images/footer/service/' . $footerService->image) }}" width="150px" alt="">
                </p>
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('alt', 'توضیحات تصویر بخش خدمات ما') !!}
                {!! Form::textarea('alt', null, ['placeholder' => 'توضیحات تصویر بخش خدمات ما را وارد کنید...']) !!}
                @error('alt')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('title', 'عنوان بخش خدمات ما') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان بخش خدمات ما را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('link', 'لینک بخش خدمات ما') !!}
                {!! Form::text('link', null, ['placeholder' => 'لینک بخش خدمات ما را وارد کنید...']) !!}
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
