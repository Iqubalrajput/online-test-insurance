<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Include Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Include Footer -->
    @include('layouts.footer')

    <!-- Include JS Files -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
