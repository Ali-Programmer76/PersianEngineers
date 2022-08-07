@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>تنظیمات بخش نظرات مشتریان</h3>
            <div>
                <a href="{{ route('testimonial.create') }}">تنظیم نظر مشتری</a>
            </div>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>تصویر مشتری</th>
                        <th>نام و نام خانوادگی مشتری</th>
                        <th>سمت شغلی مشتری</th>
                        <th>نظر مشتری</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $key => $testimonial)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ asset('admin/images/testimonial/' . $testimonial->image) }}" width="100px"
                                    alt="">
                            </td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->job }}</td>
                            <td>{{ Str::limit($testimonial->description, 50, '...') }}</td>
                            <td>
                                <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="text-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('testimonial.destroy', $testimonial->id) }}"
                                    onclick="destroyItem(event,{{ $testimonial->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="post"
                                    id="destroy-item-{{ $testimonial->id }}">
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
            {{ $testimonials->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('create'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات نظر مشتری با موفقیت تکمیل شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'تبریک!',
                text: 'تنظیمات نظر مشتری با موفقیت ویرایش شد.',
                confirmButtonText: 'تأیید',
            });
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'تنظیمات نظر مشتری با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
