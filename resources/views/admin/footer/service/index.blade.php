@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات فوتر - بخش خدمات ما</h3>
            <div>
                <a href="{{ route('footerService.create') }}">تنظیم خدمات ما</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>تصویر بخش خدمات ما</th>
                        <th>عنوان بخش خدمات ما</th>
                        <th>لینک بخش خدمات ما</th>
                        <th>نویسنده بخش خدمات ما</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($footerServices as $key => $footerService)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ asset('admin/images/footer/service/' . $footerService->image) }}"
                                    width="100px" alt="">
                            </td>
                            <td>{{ $footerService->title }}</td>
                            <td>{{ $footerService->link }}</td>
                            <td>{{ $footerService->author }}</td>
                            <td>
                                <a href="{{ route('footerService.edit', $footerService->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('footerService.destroy', $footerService->id) }}"
                                    onclick="destroyItem(event,{{ $footerService->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('footerService.destroy', $footerService->id) }}" method="post"
                                    id="destroy-item-{{ $footerService->id }}">
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
            {{ $footerServices->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات فوتر - بخش خدمات ما با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات فوتر - بخش خدمات ما با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات فوتر - بخش خدمات ما با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
