@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش منوی بالایی</h3>
            <div>
                <a href="{{ route('topHeader.create') }}">تنظیم منو</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>آدرس ایمیل</th>
                        <th>شماره تلفن</th>
                        <th>آدرس اینستاگرام</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topHeaders as $key => $topHeader)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $topHeader->email }}</td>
                            <td>{{ $topHeader->phone }}</td>
                            <td>{{ $topHeader->instagram }}</td>
                            <td>
                                <a href="{{ route('topHeader.edit', $topHeader->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('topHeader.destroy', $topHeader->id) }}"
                                    onclick="destroyItem(event,{{ $topHeader->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('topHeader.destroy', $topHeader->id) }}" method="post"
                                    id="destroy-item-{{ $topHeader->id }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination">
            {{ $topHeaders->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات منو با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات منو با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات منو با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
