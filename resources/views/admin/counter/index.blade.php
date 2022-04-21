@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش شمارنده</h3>
            <div>
                <a href="{{ route('counter.create') }}">تنظیم شمارنده</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        {{-- <div class="pagination">
            {{ $services->links() }}
        </div> --}}
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات شمارنده با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات شمارنده با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات شمارنده با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
