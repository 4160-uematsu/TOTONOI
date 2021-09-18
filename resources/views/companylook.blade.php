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
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
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
                        
<div>
    <nav>
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex items-center justify-between h-16">
                <div class="w-full justify-between flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/log" class="text-gray-300 dark:text-white  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium text-xl">投稿掲示板</a>
                            <a href="{{ route('logout') }}" class="text-gray-300  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium text-xl">ログアウト</a> 
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="ml-4 flex items-center md:ml-6">
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button class="text-gray-800 dark:text-white hover:text-gray-300 inline-flex items-center justify-center p-2 rounded-md focus:outline-none">
                        <svg width="20" height="20" fill="currentColor" class="h-8 w-8" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                    Home
                </a>
                <a class="text-gray-800 dark:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                    Gallery
                </a>
                <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                    Content
                </a>
                <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                    Contact
                </a>
            </div>
        </div>
    </nav>
</div>

            <button class="lg:hidden flex flex-col ml-4">
                <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                </span>
                <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                </span>
                <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                </span>
            </button>
        </div>
    </div>
</header> 
<section class="text-gray-600 body-font"> 
<div class="mt-24 container mx-auto flex px-5 py-24 items-center bg-white border-4 border-double border-indigo-500">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0"> 
    @isset ($info->photo)
                <p class="text-center text-xl font-semibold">ホーム写真</p>
                <img src="{{ asset("/storage/company_promotion") }}/{{ optional($info) -> photo}}" alt="">
    @endisset
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <dl>
            <dd>
            <dt  class="text-2xl font-semibold midashi">銭湯名</dt>
            <li>{{ optional($info)->name }}</li>
            </dd>
        </dl>
        <dl class="text-xl font-semibold">
            <dd>
                <dt class="midashi">営業時間</dt>    
                <li>{{ optional($info)->time }}</li>
            </dd>
        </dl>
        <dl class="text-xl font-semibold">
            <dd>
                <dt class="midashi">PR</dt>
                <li>{{ optional($info)->promotion }}</li>
            </dd>
        </dl>
        <dl class="text-xl font-semibold">
            <dd>
            <dt class="midashi">住所</dt>
            <li>{{ optional($info)-> address}}</li>
            </dd>
        </dl>  
        
        <dl class="text-xl font-semibold">
            <dd>
                <dt class="midashi">設備</dt>

            @if ($info->riyu1 === '1')
                <li>露天風呂あり</li>
                @endif

                @if ($info->riyu2 === '2')
                <li>サウナあり</li>
                @endif 

                @if ( $info->riyu3 === '3')
                <li>電気風呂あり</li>
                @endif   
        </dl>
        
        <dt class="midashi">最近のコメント</dt>
                @isset ($info2)

                    @foreach($info2 as $row)
                        銭湯名
                        <p >{{ $row->companyname }}</p>
                        <p >Name</p>
                        <p >{{ $row->author }}</p>
                        <p >Title</p>
                        <p >{{ $row->title }}</p>
                        <p >Comment</p>
                        <p > {{ $row->body }}</p>
                    @endforeach

                @endisset
    </div>
</div>
</section>