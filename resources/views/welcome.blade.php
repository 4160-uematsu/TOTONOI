@extends('layouts.lp')
@section('welcome')
<main class="pt-10 css-selector relative overflow-hidden h-screen">
    <div class="flex relative z-20 items-center overflow-hidden">
        <div class="container mx-auto px-6 flex relative py-16">
            <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
                <h1 class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none text-gray-600">
                    あなたの日常に
                    <span class="text-5xl sm:text-7xl">
                        ひとときの安らぎを
                    </span>
                </h1>
                <p class="text-sm sm:text-base text-gray-700 dark:text-white mt-5">
                    銭湯検索メディアTOTONOI<br>
                    たまにはスマホから解放されてほっと一息つきませんか？
                </p>
                <div class="flex mt-8">
                @if (Route::has('login'))
                    @auth
                    @else
                        <a href="{{ route('login') }}" class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">ログイン</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-pink-500 text-pink-500 dark:text-white hover:bg-pink-500 hover:text-white text-md">アカウント作成</a>
                        @endif
                    @endauth
                @endif
                </div>
            </div>
            <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative pt-10">
                <img src="{{ asset('/storage/LP/LPpng.jpg') }}" class="transform scale-150 max-w-xs md:max-w-sm m-auto"/>
            </div>
        </div>
    </div>
</main>
@endsection                 
                

                            
                            