@extends('admin.layouts.master')

@section('content')
    <div class="content-item">
        <h3>آخرین پروژه های انجام شده</h3>
        <table>
            <tbody>
                <tr>
                    <th>کارفرما</th>
                    <th>نوع پروژه</th>
                    <th>کشور</th>
                </tr>
                <tr>
                    <td>شرکت میهن وب هاست</td>
                    <td>ملی</td>
                    <td>ایران</td>
                </tr>
                <tr>
                    <td>شرکت دیجیکالا</td>
                    <td>فروشگاهی</td>
                    <td>ایران</td>
                </tr>
                <tr>
                    <td>شرکت گرین وب</td>
                    <td>دانشجویی</td>
                    <td>ایران</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
