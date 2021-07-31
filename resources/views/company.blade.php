@extends('layouts.app')

@section('company_register')
    @include("/Bulletin_board/form")
    <h2>銭湯の人の入力</h2>
    <form action="company" method="POST" name="hottab">
        <br>
        店の写真:
        <input type="file"
            id="avatar" name="cphoto"
            accept="image/png, image/jpeg">
        <br>
        銭湯名:
        <input name="cbath">
        <br>
        営業時間:
        <input name="ctime">
        <br>
        宣伝:
        <input name="cbody">
        <br>
        <input type="checkbox" name="riyu" value="1" checked="checked">露天風呂
        <input type="checkbox" name="riyu" value="2">サウナ
        <input type="checkbox" name="riyu" value="3">電気風呂
        </p>
        <br>
        アクセス:
        <textarea name="title" rows="4" cols="40" name='caccess'></textarea>
            <br>
            住所:
            <textarea name="title" rows="4" cols="40" name='caddress'></textarea>
            <br>

        <div class="box13">
            <button class="btn btn-success">
            <p>提出</p>
        </button>
        </div>

    </form>


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