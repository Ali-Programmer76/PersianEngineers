@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش سؤالات متداول</h3>
            <div>
                <a href="{{ route('faq.create') }}">تنظیم سؤال</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان بخش سؤالات متداول</th>
                        <th>درباره بخش سؤالات متداول</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faqs as $key => $faq)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $faq->title }}</td>
                            <td>{{ Str::limit($faq->description, 50, '...') }}</td>
                            <td>
                                <a href="{{ route('faq.edit', $faq->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('faq.destroy', $faq->id) }}"
                                    onclick="destroyItem(event,{{ $faq->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('faq.destroy', $faq->id) }}" method="post"
                                    id="destroy-item-{{ $faq->id }}">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="pagination">
            {{ $blogs->links() }}
        </div> --}}
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات سؤال با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات سؤال با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات سؤال با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
