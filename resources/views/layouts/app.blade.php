<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.header')
    <title>Dashboard</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
    </div>

    @include('layouts.scripts')


</body>

</html>
