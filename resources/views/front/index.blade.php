@extends('front.layouts.master')

@section('style')
    @include('front.partials.seo')
@endsection

@section('content')
    @include('front.partials.top-header')

    @include('front.partials.header')

    @include('front.partials.hero-wrap')

    @include('front.partials.about')

    @include('front.partials.introduction')

    @include('front.partials.service')

    @include('front.partials.counter')

    @include('front.partials.team')

    @include('front.partials.project')

    @include('front.partials.testimonial')

    @include('front.partials.blog')

    @include('front.partials.contact')

    @include('front.partials.footer')
@endsection
