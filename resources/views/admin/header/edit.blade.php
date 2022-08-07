@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش بخش منوی سایت</h3>
        </div>
        <div class="my-2">
            {!! Form::model($header, ['method' => 'PUT', 'route' => ['header.update', $header->id]]) !!}
            <div class="form-group">
                {!! Form::label('title', 'عنوان منوی سایت') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان منوی سایت را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('link', 'لینک منوی سایت') !!}
                {!! Form::text('link', null, ['placeholder' => 'لینک منوی سایت را وارد کنید...']) !!}
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
