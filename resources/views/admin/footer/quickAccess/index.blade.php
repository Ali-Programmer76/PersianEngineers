@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات فوتر - بخش دسترسی سریع</h3>
            <div>
                <a href="{{ route('footerQuickAccess.create') }}">تنظیم دسترسی سریع</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان بخش دسترسی سریع</th>
                        <th>لینک بخش دسترسی سریع</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($footerQuickAccesses as $key => $footerQuickAccess)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $footerQuickAccess->title }}</td>
                            <td>{{ $footerQuickAccess->link }}</td>
                            <td>
                                <a href="{{ route('footerQuickAccess.edit', $footerQuickAccess->id) }}"
                                    class="text-success"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('footerQuickAccess.destroy', $footerQuickAccess->id) }}"
                                    onclick="destroyItem(event,{{ $footerQuickAccess->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('footerQuickAccess.destroy', $footerQuickAccess->id) }}"
                                    method="post" id="destroy-item-{{ $footerQuickAccess->id }}">
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
            {{ $footerQuickAccesses->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات فوتر - بخش دسترسی سریع با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات فوتر - بخش دسترسی سریع با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات فوتر - بخش دسترسی سریع با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
