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
    <body class="bg-sassyblue flex flex-col h-screen">
        @yield('header')

{{--        Header section--}}
        <header class="border-b-4 border-sassygreen h-24 bg-white">
            <div class="grid grid-cols-6 gap-3">
                <div class="col-start-2 col-span-4 flex place-content-center h-auto">
                    <div class="grid grid-cols-3">
                        <div id="menu1" class="mt-10">
                            <ul class="flex">
                                <li class="mr-6 border-t hover:border-b-2 hover:border-t-0 border-black">
                                    <a class="text-black-500" href="#">Blog</a>
                                </li>
                                <li class="border-t hover:border-b-2 hover:border-t-0 border-black">
                                    <a class="text-black-500" href="#">Projects</a>
                                </li>
                            </ul>
                        </div>
                        <div id="orphikkLogo" class="ml-6">
                            <img src="{{ asset('/img/smallBlack.png') }}" alt="orphikk-logo" class="w-16 h-20">
                        </div>
                        <div id="menu2" class="mt-10">
                            <ul class="flex">
                                <li class="mr-6 border-t hover:border-b-2 hover:border-t-0 border-black">
                                    <a class="text-black-500" href="#">Shop</a>
                                </li>
                                <li class="border-t hover:border-b-2 hover:border-t-0 border-black">
                                    <a class="text-black-400" href="#">Contact Me</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            @yield('content')
        <div class="container">

        </div>
        @yield('footer')
        {{--Footer--}}
        <footer class="h-38 bg-obsblack">
            <div class="grid grid-cols-6 gap-4 py-12">
                <div class="col-start-2 col-span-1 flex place-content-center h-auto">
                    <ul>
                        <li>
                            <a class="text-white" href="#">Home</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Projects</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Blogs</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Contact Me</a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-1 flex place-content-center h-auto">
                    <ul>
                        <li>
                            <a class="text-white" href="#">LinkedIn</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Twitter</a>
                        </li>
                        <li>
                            <a class="text-white" href="#">Github || Gitlab</a>
                        </li>
                    </ul>
                </div>
                <div class="col-start-5 col-span-1 text-sassygreen">
                    <a href="#">@orphikk.code</a>
                </div>
            </div>
        </footer>

        <!-- Javascript Libs -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @yield('javascript')
        @stack('javascript')
    </body>
</html>

