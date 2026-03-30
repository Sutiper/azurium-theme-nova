<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', theme_config('server_name', site_name()))</title>
    <meta name="description" content="@yield('description', theme_config('hero_subtitle', ''))">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    {{-- Nova Theme CSS --}}
    <link rel="stylesheet" href="{{ theme_asset('css/style.css') }}">

    @stack('styles')
</head>
<body>

@include('partials.navbar')

<main id="content">
    @yield('content')
</main>

@include('partials.footer')

{{-- Bootstrap JS --}}
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{-- Nova Theme JS --}}
<script src="{{ theme_asset('js/app.js') }}"></script>

@stack('scripts')
</body>
</html>
