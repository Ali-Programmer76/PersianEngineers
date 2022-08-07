@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش منوی سایت</h3>
            <div>
                <a href="{{ route('header.create') }}">تنظیم منو</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان منوی سایت</th>
                        <th>لینک منوی سایت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($headers as $key => $header)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $header->title }}</td>
                            <td>{{ $header->link }}</td>
                            <td>
                                <a href="{{ route('header.edit', $header->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('header.destroy', $header->id) }}"
                                    onclick="destroyItem(event,{{ $header->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('header.destroy', $header->id) }}" method="post"
                                    id="destroy-item-{{ $header->id }}">
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
            {{ $headers->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات بخش منوی سایت با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات بخش منوی سایت با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات بخش منوی سایت با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
