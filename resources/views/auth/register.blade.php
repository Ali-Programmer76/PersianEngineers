@extends('front.layouts.master')

@section('style')
    <title>صفحه ی ثبت نام کاربران</title>
@endsection

@section('content')
    @include('front.partials.top-header')
    @include('front.partials.header')
    <div class="auth">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center text-dark fw-bold mb-5">ثبت نام</h3>
                    <form action="{{ route('register.store') }}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="نام و نام خانوادگی شما" class="form-control mt-3 p-2">
                        @error('name')
                            <p class="text-danger my-2">{{ $message }}</p>
                        @enderror
                        <input type="number" name="mobile" placeholder="شماره موبایل" class="form-control mt-3 p-2">
                        @error('mobile')
                            <p class="text-danger my-2">{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" placeholder="آدرس ایمیل" class="form-control mt-3 p-2">
                        @error('email')
                            <p class="text-danger my-2">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password" placeholder="رمز عبور" class="form-control mt-3 p-2">
                        @error('password')
                            <p class="text-danger my-2">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password_confirmation" placeholder="تکرار رمز عبور"
                            class="form-control mt-3 p-2">
                        <button type="submit" class="btn btn-primary text-dark w-100 mt-3 border-0">ثبت نام</button>
                        <a href="{{ route('login') }}" class="btn btn-success text-white w-100 mt-3 border-0">صفحه ورود به
                            حساب کاربری</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('front.partials.footer')
@endsection
