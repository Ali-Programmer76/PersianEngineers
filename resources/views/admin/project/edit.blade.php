@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش بخش تیم ما</h3>
        </div>
        <div class="my-2">
            {!! Form::model($team, ['method' => 'PUT', 'route' => ['team.update', $team->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر کارمند شرکت') !!}
                {!! Form::file('image', null) !!}
                <p class="mt-2">
                    <img src="{{ asset('admin/images/team/' . $team->image) }}" width="150px" alt="">
                </p>
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('alt', 'توضیحات تصویر بخش تیم ما') !!}
                {!! Form::textarea('alt', null, ['placeholder' => 'توضیحات تصویر بخش تیم ما را وارد کنید...']) !!}
                @error('alt')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('name', 'نام و نام خانوادگی کارمند شرکت') !!}
                {!! Form::text('name', null, ['placeholder' => 'نام و نام خانوادگی کارمند شرکت را وارد کنید...']) !!}
                @error('name')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('job', 'سمت شغلی') !!}
                {!! Form::text('job', null, ['placeholder' => 'سمت شغلی را وارد کنید...']) !!}
                @error('job')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('instagram', 'آدرس اینستاگرام کارمند شرکت') !!}
                {!! Form::text('instagram', null, ['placeholder' => 'آدرس اینستاگرام کارمند شرکت را وارد کنید...']) !!}
                @error('instagram')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('twitter', 'آدرس توییتر کارمند شرکت') !!}
                {!! Form::text('twitter', null, ['placeholder' => 'آدرس توییتر کارمند شرکت را وارد کنید...']) !!}
                @error('twitter')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('linkedin', 'آدرس لینکداین کارمند شرکت') !!}
                {!! Form::text('linkedin', null, ['placeholder' => 'آدرس لینکداین کارمند شرکت را وارد کنید...']) !!}
                @error('linkedin')
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
