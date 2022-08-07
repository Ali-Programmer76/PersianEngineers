@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>بخش نظرات کاربران</h3>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <td>نام کاربر</td>
                        <th>متن پیام</th>
                        <th>وضعیت پیام</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $key => $comment)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $comment->user->name }}</td>
                            <td>{{ $comment->description }}</td>
                            <td>
                                <a href="{{ route('comment.edit', $comment->id) }}" class="text-decoration-none">
                                    @if ($comment->status === 0)
                                        <span class="badge bg-danger">تأیید نشده</span>
                                    @else
                                        <span class="badge bg-success">تأیید شده</span>
                                    @endif
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('comment.destroy', $comment->id) }}"
                                    onclick="destroyItem(event,{{ $comment->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('comment.destroy', $comment->id) }}" method="post"
                                    id="destroy-item-{{ $comment->id }}">
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
            {{ $comments->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
    @if (Session::has('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'ویرایش',
                text: 'عملیات ویرایش با موفقیت انجام شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
    @if (Session::has('delete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'حذف',
                text: 'پیام کاربر با موفقیت حذف شد.',
                confirmButtonText: 'تأیید'
            })
        </script>
    @endif
@endsection
