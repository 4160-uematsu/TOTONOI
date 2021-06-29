@extends('layouts.app')

@section('edit')
<!-- 投稿画面 -->
<section class="text-gray-600 body-font">
    @if ($errors->any())
        <div class="text-center">
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mx-auto mt-10 p-8 text-center w-1/4 bg-white border-4 border-double border-indigo-500">
        <form action="/users/edit" method="post" enctype='multipart/form-data'>
        {{ csrf_field() }} 
            <h1 class="font-bold text-3xl">口コミ投稿フォーム</h1><br>
            <label for="name">名前</label><br>
                <input type="text" name="name"><br><br>
            <label for="comment">コメント</label><br>
                <textarea name="comment" rows="8" cols="40">
            </textarea>
            <!-- 画像内容 -->
            <div>
                <input type="hidden" name="id" value="">
            </div>
            <div class="mt-4 flex justify-center">
                <div class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                    <input type="file" name="image">ファイル選択
                </div>
                <div class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                    <input type="submit" value="">投稿する
                </div>
            </div>
        </form>
    </div>

    <div class="mt-12 mx-auto w-1/2 bg-white">
        <h2 class="font-bold text-3xl text-center">口コミ投稿履歴</h2><br>
        <ul class="text-center">
            @if (Session::has('message'))
                <li>{{ session('message') }}</li>
            @endif
        </ul>
        <div class="mt-3">
            @if(Session::has('name'))
                <!-- <h2 class="font-bold text-3xl">{{ session('name') }}の口コミ投稿履歴</h2> -->
                <p class="mx-3 border-t-2 border-b-2">
                {{ session('comment') }}
                </p>
            @endif
            <!-- <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center"> -->
            @if(Session::has('image')) 
                <img class="object-center transform scale-90" src="{{ asset("/storage/avatar") }}/{{ session('image') }}" alt=""> 
            @endif
            </div>
        </div> 
    </div>
</section>
@endsection