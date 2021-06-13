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
        <x-jet-banner/>
        <header class="text-4xl text-white text-center font-bold bg-indigo-500 p-5">
            <h1>TOTONOI</h1>
        </header>
        @yield('my_page')
            <!-- @livewire('navigation-menu')変えました-->
            
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
