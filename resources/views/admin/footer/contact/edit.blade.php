@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش فوتر - بخش ارتباط با ما</h3>
        </div>
        <div class="my-2">
            {!! Form::model($footerContact, ['method' => 'PUT', 'route' => ['footerContact.update', $footerContact->id]]) !!}
            <div class="form-group">
                {!! Form::label('address', 'آدرس شرکت') !!}
                {!! Form::textarea('address', null, ['placeholder' => 'آدرس شرکت را وارد کنید...']) !!}
                @error('address')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('phone', 'شماره تلفن شرکت') !!}
                {!! Form::text('phone', null, ['placeholder' => 'شماره تلفن شرکت را وارد کنید...']) !!}
                @error('phone')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email', 'آدرس ایمیل شرکت') !!}
                {!! Form::text('email', null, ['placeholder' => 'آدرس ایمیل شرکت را وارد کنید...']) !!}
                @error('email')
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
