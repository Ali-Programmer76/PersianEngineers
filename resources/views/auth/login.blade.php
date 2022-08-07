@extends('front.layouts.master');

@section('style')
    <title>صفحه ی ورود کاربران</title>
@endsection

@section('content')
    @include('front.partials.top-header')
    @include('front.partials.header')
    <div class="auth">
        <div class="container py-5 my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center text-dark fw-bold mb-5">ورود به حساب کاربری</h3>
                    <form action="{{ route('login.store') }}" method="post">
                        @csrf
                        <input type="text" name="email" placeholder="ایمیل یا موبایل" class="form-control mt-3 p-2">
                        @error('email')
                            <p class="text-danger my-2">{{ $message }}</p>
                        @enderror
                        <input type="password" name="password" placeholder="رمز عبور" class="form-control mt-3 p-2">
                        @error('password')
                            <p class="text-danger my-2">{{ $message }}</p>
                        @enderror
                        <label for="remember" class="mt-3">
                            <input type="checkbox" name="remember" id="remember">
                            <span class="remember">مرا بخاطر بسپار</span>
                        </label>
                        <button type="submit" class="btn btn-primary text-dark w-100 mt-3 border-0">ورود</button>
                        <a href="{{ route('register') }}" class="btn btn-success text-white w-100 mt-3 border-0">صفحه ثبت
                            نام</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('front.partials.footer')
@endsection
