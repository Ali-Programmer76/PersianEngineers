<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/css/responsive.css') }}">
    <title>پنل مدیریت</title>
</head>

<body>

    @include('admin.layouts.sidebar')

    <div id="adminMain" class="main">
        @include('admin.layouts.header')
        @if (auth()->user()->role === 'admin' || auth()->user()->role === 'author')
            @include('admin.layouts.information')
            <div class="content">
                @yield('content')
            </div>
        @endif
    </div>

    <script src="{{ asset('/admin/js/jquery.js') }}"></script>
    <script src="{{ asset('/admin/js/fontawesome.js') }}"></script>
    <script src="{{ asset('/admin/js/sweetAlert.js') }}"></script>
    <script src="{{ asset('/admin/js/custom.js') }}"></script>

    @yield('javaScript')
</body>

</html>
