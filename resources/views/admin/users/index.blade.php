@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <h3>لیست کاربران سایت</h3>
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام و نام خانوادگی</th>
                        <th>تلفن همراه</th>
                        <th>نقش کاربری</th>
                        <th>تاریخ عضویت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->userRole() }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="" class="text-success"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>-</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
