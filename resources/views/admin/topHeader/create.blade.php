@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ساخت بخش منوی بالایی</h3>
        </div>
        <div class="my-2">
            {!! Form::open(['method' => 'POST', 'route' => 'topHeader.store']) !!}
            <div class="form-group">
                {!! Form::label('email', 'آدرس ایمیل شرکت') !!}
                {!! Form::text('email', null, ['placeholder' => 'آدرس ایمیل شرکت را وارد کنید...']) !!}
                @error('email')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('phone', 'شماره تلفن شرکت') !!}
                {!! Form::text('phone', null, ['placeholder' => 'شماره تلفن شرکت را بنویسید...']) !!}
                @error('phone')
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
