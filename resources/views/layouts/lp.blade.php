<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('javascript-head')

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        @yield('css')

        <!-- @livewireStyles 変えました-->
        
    </head>
    <body class="font-sans antialiased bg-gray-200">
        <header class="h-24 sm:h-32 flex items-center z-30 w-full bg-indigo-500 p-5">
            <div class="container mx-auto px-6 flex items-center justify-between">
                <div class="text-6xl text-white font-bold title">
                    TOTONOI
                </div>
                <div class="flex items-center">
                    <nav class="text-white uppercase text-lg lg:flex items-center hidden">    
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/my_page2') }}" class="py-2 px-6 flex">マイページ</a>
                            @endauth
                        @endif
                    </nav>
                </div>
            </div>
        </header>
            <!-- @livewire('navigation-menu')変えました-->
            @yield('welcome')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
        </div>
        @stack('modals')

        <!-- @livewireScripts ここも変えました-->

    </body>
</html>
