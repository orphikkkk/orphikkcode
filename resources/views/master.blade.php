<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('page_title','Orphikk Code')</title>
        {{--CSS--}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('css')
    </head>
    <body>
        @yield('header')
        @yield('content')
        @yield('footer')
        <!-- Javascript Libs -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @yield('javascript')
        @stack('javascript')
    </body>
</html>
f
