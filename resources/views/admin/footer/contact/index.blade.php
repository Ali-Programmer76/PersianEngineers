@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات فوتر - بخش ارتباط با ما</h3>
            <div>
                <a href="{{ route('footerContact.create') }}">تنظیم ارتباط با ما</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>آدرس شرکت</th>
                        <th>شماره تلفن شرکت</th>
                        <th>آدرس ایمیل شرکت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($footerContacts as $key => $footerContact)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $footerContact->address }}</td>
                            <td>{{ $footerContact->phone }}</td>
                            <td>{{ $footerContact->email }}</td>
                            <td>
                                <a href="{{ route('footerContact.edit', $footerContact->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('footerContact.destroy', $footerContact->id) }}"
                                    onclick="destroyItem(event,{{ $footerContact->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('footerContact.destroy', $footerContact->id) }}" method="post"
                                    id="destroy-item-{{ $footerContact->id }}">
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
            {{ $footerQuickAccesses->links() }}
        </div> --}}
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات فوتر - بخش ارتباط با ما با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات فوتر - بخش ارتباط با ما با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات فوتر - بخش ارتباط با ما با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
