@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش سئو</h3>
            <div>
                <a href="{{ route('seo.create') }}">تنظیم سئو</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام شرکت</th>
                        <th>درباره شرکت</th>
                        <th>نام وبسایت</th>
                        <th>آدرس وبسایت</th>
                        <th>نام توییتر شرکت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seos as $key => $seo)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $seo->title }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($seo->description, 20, '...') }}</td>
                            <td>{{ $seo->site_name }}</td>
                            <td>{{ $seo->site_url }}</td>
                            <td>{{ $seo->twitter_name }}</td>
                            <td>
                                <a href="{{ route('seo.edit', $seo->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('seo.destroy', $seo->id) }}"
                                    onclick="destroySeo(event,{{ $seo->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('seo.destroy', $seo->id) }}" method="post"
                                    id="destroy-seo-{{ $seo->id }}">
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
            {{ $seos->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات سئو با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات سئو با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات سئو با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
