@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات فوتر - بخش درباره ما</h3>
            <div>
                <a href="{{ route('footerAbout.create') }}">تنظیم درباره ما</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان درباره ما</th>
                        <th>توضیحات درباره ما</th>
                        <th>آدرس اینستاگرام شرکت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($footerAbouts as $key => $footerAbout)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $footerAbout->title }}</td>
                            <td>{{ Str::limit($footerAbout->description, 30, '...') }}</td>
                            <td>{{ $footerAbout->instagram }}</td>
                            <td>
                                <a href="{{ route('footerAbout.edit', $footerAbout->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('footerAbout.destroy', $footerAbout->id) }}"
                                    onclick="destroyItem(event,{{ $footerAbout->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('footerAbout.destroy', $footerAbout->id) }}" method="post"
                                    id="destroy-item-{{ $footerAbout->id }}">
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
            {{ $footerAbouts->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات فوتر - بخش درباره ما با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات فوتر - بخش درباره ما با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات فوتر - بخش درباره ما با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
