@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <div class="content-header my-2">
            <h3>بخش پیام های کاربران</h3>
        </div>
        <div class="table-responsive my-2">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>نام و نام خانوادگی کاربر</th>
                        <th>آدرس ایمیل کاربر</th>
                        <th>موضوع پیام</th>
                        <th>متن پیام</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $key => $contact)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $contact->fullname }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ Str::limit($contact->description, 100, '...') }}</td>
                            <td>
                                <a href="{{ route('contact.destroy', $contact->id) }}"
                                    onclick="destroyItem(event,{{ $contact->id }})" class="text-danger"><i
                                        class="fas fa-trash-alt"></i></a>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="post"
                                    id="destroy-item-{{ $contact->id }}">
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
            {{ $contacts->links() }}
        </div>
    </div>
@endsection

@section('javaScript')
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
