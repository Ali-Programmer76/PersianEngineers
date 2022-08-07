@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <h3>وضعیت پیام کاربران</h3>
        <form action="{{ route('comment.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="status">وضعیت پیام</label>
                <select name="status" id="status">
                    <option value="0" @if ($comment->status === 0) selected @endif>تأیید نشده</option>
                    <option value="1" @if ($comment->status === 1) selected @endif>تأیید شده</option>
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
