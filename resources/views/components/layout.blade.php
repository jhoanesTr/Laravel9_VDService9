<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Espacio para título de página-->
    <title>VDService9:@yield('title_page')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
</head>
<body>

<!--Header-->
<x-inc.navheader></x-inc.navheader>

<main class="pb-5">
    <div class="px-xxl-5 ps-xl-5 ps-lg-5 ps-3 pt-xxl-4 pt-xl-4 pt-lg-4 pt-3">
        {{ $slot }}
    </div>
</main>

<!--Footer-->
<x-inc.footer></x-inc.footer>
<!-- Scripts -->
<script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
