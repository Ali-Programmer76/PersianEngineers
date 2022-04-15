@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش مقدمه</h3>
            <div>
                <a href="{{ route('introduction.create') }}">تنظیم مقدمه</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>تصویر بخش مقدمه</th>
                        <th>عنوان بخش مقدمه</th>
                        <th>درباره شرکت</th>
                        <th>لینک بخش مقدمه</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($introductions as $key => $introduction)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ asset('admin/images/introduction/' . $introduction->image) }}" width="100px"
                                    alt="">
                            </td>
                            <td>{{ Str::limit($introduction->title, 30, '...') }}</td>
                            <td>{{ $introduction->description }}</td>
                            <td>{{ $introduction->link }}</td>
                            <td>
                                <a href="{{ route('introduction.edit', $introduction->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('introduction.destroy', $introduction->id) }}"
                                    onclick="destroyItem(event,{{ $introduction->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('introduction.destroy', $introduction->id) }}" method="post"
                                    id="destroy-item-{{ $introduction->id }}">
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
            {{ $introductions->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات مقدمه با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات مقدمه با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات مقدمه با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
