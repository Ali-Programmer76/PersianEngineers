@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ساخت بخش نظر مشتری</h3>
        </div>
        <div class="my-2">
            {!! Form::open(['method' => 'POST', 'route' => 'testimonial.store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('image', 'تصویر مشتری') !!}
                {!! Form::file('image', null) !!}
                @error('image')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('alt', 'توضیحات تصویر مشتری') !!}
                {!! Form::text('alt', null, ['placeholder' => 'توضیحات تصویر مشتری را وارد کنید...']) !!}
                @error('alt')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('name', 'نام و نام خانوادگی مشتری') !!}
                {!! Form::text('name', null, ['placeholder' => 'نام و نام خانوادگی مشتری را وارد کنید...']) !!}
                @error('name')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('job', 'سمت شغلی مشتری') !!}
                {!! Form::text('job', null, ['placeholder' => 'سمت شغلی مشتری را وارد کنید...']) !!}
                @error('job')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'درباره نظر مشتری') !!}
                {!! Form::textarea('description', null, ['placeholder' => 'درباره نظر مشتری شرکت بنویسید...']) !!}
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
