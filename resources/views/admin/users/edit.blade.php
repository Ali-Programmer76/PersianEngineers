@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <h3>ویرایش اطلاعات کاربر</h3>
        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">نام و نام خانوادگی</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}">
                @error('name')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="mobile">تلفن همراه</label>
                <input type="number" name="mobile" id="mobile" value="{{ $user->mobile }}">
                @error('mobile')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">ایمیل</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}">
                @error('email')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">سطح دسترسی</label>
                <select name="role" id="role">
                    <option value="user" @if ($user->role === 'user') selected @endif>کاربر عادی</option>
                    <option value="author" @if ($user->role === 'author') selected @endif>نویسنده</option>
                    <option value="admin" @if ($user->role === 'admin') selected @endif>مدیر سایت</option>
                </select>
                @error('role')
                    <p class="text-danger my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" class="btn-form" value="ذخیره">
            </div>
        </form>
    </div>
@endsection
