@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ساخت فوتر - بخش دسترسی سریع</h3>
        </div>
        <div class="my-2">
            {!! Form::open(['method' => 'POST', 'route' => 'footerQuickAccess.store']) !!}
            <div class="form-group">
                {!! Form::label('title', 'عنوان دسترسی سریع') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان دسترسی سریع را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('link', 'لینک دسترسی سریع') !!}
                {!! Form::text('link', null, ['placeholder' => 'لینک دسترسی سریع را وارد کنید...']) !!}
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
