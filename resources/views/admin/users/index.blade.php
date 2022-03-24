@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <h3>لیست کاربران سایت</h3>
        <div class="table-responsive my-2">
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
                            <td>{{ $user->persianDate() }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="text-white"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>-</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination">
            {{ $users->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'اطلاعات کاربر با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
@endsection
