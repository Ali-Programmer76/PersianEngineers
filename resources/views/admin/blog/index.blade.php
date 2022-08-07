@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش بلاگ ها</h3>
            <div>
                <a href="{{ route('blogs.create') }}">تنظیم بلاگ</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>تصویر بلاگ</th>
                        <th>نویسنده بلاگ</th>
                        <th>موضوع بلاگ</th>
                        <th>دسته بندی بلاگ</th>
                        <th>درباره بلاگ</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $key => $blog)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ asset('admin/images/blog/' . $blog->image) }}" width="100px" alt="">
                            </td>
                            <td>{{ $blog->user->name }}</td>
                            <td>{{ $blog->subject }}</td>
                            <td>{{ $blog->category->name }}</td>
                            <td>{{ Str::limit($blog->body, 30, '...') }}</td>
                            <td>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('blogs.destroy', $blog->id) }}"
                                    onclick="destroyItem(event,{{ $blog->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="post"
                                    id="destroy-item-{{ $blog->id }}">
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
            {{ $blogs->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات بلاگ با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات بلاگ با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات بلاگ با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
