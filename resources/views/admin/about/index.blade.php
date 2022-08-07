@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش درباره ما</h3>
            <div>
                <a href="{{ route('about.create') }}">تنظیم درباره ما</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>تصویر بخش درباره ما</th>
                        <th>عنوان بخش درباره ما</th>
                        <th>درباره شرکت</th>
                        <th>سال تجربه کاری</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $key => $about)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ asset('admin/images/about/' . $about->image) }}" width="100px" alt="">
                            </td>
                            <td>{{ $about->title }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($about->description, 40, '...') }}</td>
                            <td>{{ $about->experience_title }}</td>
                            <td>
                                <a href="{{ route('about.edit', $about->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('about.destroy', $about->id) }}"
                                    onclick="destroyItem(event,{{ $about->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('about.destroy', $about->id) }}" method="post"
                                    id="destroy-item-{{ $about->id }}">
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
            {{ $abouts->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات درباره ما با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات درباره ما با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات درباره ما با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
