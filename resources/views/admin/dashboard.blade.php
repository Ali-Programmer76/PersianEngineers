@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <h3>آخرین کاربران وبسایت</h3>
        <table>
            <tbody>
                <tr>
                    <th>#</th>
                    <th>نام کاربر</th>
                    <th>ایمیل کاربر</th>
                    <th>شماره موبایل کاربر</th>
                </tr>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->mobile }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
