<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('/front/css/fontawesome.css') }}>
    <link rel="stylesheet" href={{ asset('/front/css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('/front/css/jquery.toast.css') }}>
    <link rel="stylesheet" href={{ asset('/front/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('/front/css/responsive.css') }}>
    @yield('style')
</head>

<body>

    @yield('content')

    <script src={{ asset('/front/js/jquery.js') }}></script>
    <script src={{ asset('/front/js/bootstrap.js') }}></script>
    <script src={{ asset('/front/js/fontawesome.js') }}></script>
    <script src={{ asset('/front/js/counter-up.js') }}></script>
    <script src={{ asset('/front/js/waypoints.js') }}></script>
    <script src={{ asset('/front/js/jquery.toast.js') }}></script>
    <script src={{ asset('/front/js/custom.js') }}></script>
    @yield('javaScript')

</body>

</html>
