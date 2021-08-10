<!-- 投稿フォーム -->
@extends('layouts.app')

@section('company log')
        @include("/Bulletin_board/form")
        <div class="mt-10 w-4/6 text-white font-semibold text-2xl bg-indigo-500 py-2 px-5 mx-auto flex md:flex-row flex-col">投稿一覧</div>

        @php
        $i = 0;
        @endphp

        @foreach ($item_list as $item)
        @php
            if ($i >= 3){
            break;
            }
        @endphp
        <!-- <div class="entry"> -->

        <div class="md:flex-row flex-col items-ceter mx-auto">
            <div class="container mx-auto flex md:flex-row flex-col items-center bg-white p-10 rounded-lg border-4 border-double border-indigo-500 mb-5">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 divide-y divide-light-blue-400"> 
                    <div class="rounded-lg bg-white text-2xl">
                    <p class="midashi">銭湯名</p>
                        <p class="balloon2-top text-xl">{{ $item->companyname }}</p>
                    <p class="midashi">Name</p>
                        <p class="balloon2-top text-xl">{{ $item->author }}</p>
                        <p class="midashi">Title</p>
                        <p class="balloon2-top text-xl">{{ $item->title }}</p>
                        <p class="midashi">Comment</p>
                        <p class="balloon2-top text-xl"> {!! nl2br(e($item->body)) !!}</p>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 lg:pl-24 md:pl-16 flex-row-reverse md:items-start md:text-left">
                    @if(!empty($item->image_path))
                        <img class="h-50 rounded-lg" src="{{ asset("/storage/company") }}/{{ $item->image_path }}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

    @php
        $i++;
    @endphp
@endforeach   

@if(count($item_list) < 1)
<p>投稿がありません</p>
@endif

@endsection