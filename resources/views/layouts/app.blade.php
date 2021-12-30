<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - @yield('page_name')</title>
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon.png') }}" />

    {{-- CSS --}}

    @include('layouts.inc.styles')

</head>

<body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        @include('layouts.inc.sidebar')
        <div class="relative md:ml-64 bg-blueGray-50">
            <div class=" hidden sm:hidden md:block">
                @include('layouts.inc.navbar')
            </div>
            <div class="p-5 container mx-auto bg-slate-100">
                @yield('content')
            </div>
            @include('layouts.inc.footer')

        </div>
    </div>

    <!-- Scripts -->
    @include('layouts.inc.scripts')
    <x-alert />
    @yield('js')
</body>

</html>
