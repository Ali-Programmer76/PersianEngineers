@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ویرایش بخش شمارنده</h3>
        </div>
        <div class="my-2">
            {!! Form::model($counter, ['method' => 'PUT', 'route' => ['counter.update', $counter->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر بخش شمارنده') !!}
                {!! Form::file('image', null) !!}
                <p class="mt-2">
                    <img src="{{ asset('admin/images/counter/' . $counter->image) }}" width="150px" alt="">
                </p>
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('title', 'عنوان شمارنده') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان شمارنده را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'توضیحات شمارنده') !!}
                {!! Form::text('description', null, ['placeholder' => 'توضیحات شمارنده را وارد کنید...']) !!}
                @error('description')
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
