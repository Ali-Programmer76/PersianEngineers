@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>ساخت بخش سؤال</h3>
        </div>
        <div class="my-2">
            {!! Form::open(['method' => 'POST', 'route' => 'faq.store']) !!}
            <div class="form-group">
                {!! Form::label('title', 'عنوان بخش سؤالات متداول') !!}
                {!! Form::text('title', null, ['placeholder' => 'عنوان بخش سؤالات متداول را وارد کنید...']) !!}
                @error('title')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('description', 'درباره بخش سؤالات متداول') !!}
                {!! Form::textarea('description', null, ['placeholder' => 'درباره بخش سؤالات متداول بنویسید...']) !!}
                @error('description')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('faq_title_first', 'عنوان سؤال اول') !!}
                {!! Form::text('faq_title_first', null, ['placeholder' => 'عنوان سؤال اول را وارد کنید...']) !!}
                @error('faq_title_first')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('faq_description_first', 'پاسخ سؤال اول') !!}
                {!! Form::textarea('faq_description_first', null, ['placeholder' => 'پاسخ سؤال اول را وارد کنید...']) !!}
                @error('faq_description_first')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('faq_title_second', 'عنوان سؤال دوم') !!}
                {!! Form::text('faq_title_second', null, ['placeholder' => 'عنوان سؤال دوم را وارد کنید...']) !!}
                @error('faq_title_second')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('faq_description_second', 'پاسخ سؤال دوم') !!}
                {!! Form::textarea('faq_description_second', null, ['placeholder' => 'پاسخ سؤال دوم را وارد کنید...']) !!}
                @error('faq_description_second')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('faq_title_third', 'عنوان سؤال سوم') !!}
                {!! Form::text('faq_title_third', null, ['placeholder' => 'عنوان سؤال سوم را وارد کنید...']) !!}
                @error('faq_title_third')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('faq_description_third', 'پاسخ سؤال سوم') !!}
                {!! Form::textarea('faq_description_third', null, ['placeholder' => 'پاسخ سؤال سوم را وارد کنید...']) !!}
                @error('faq_description_third')
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
