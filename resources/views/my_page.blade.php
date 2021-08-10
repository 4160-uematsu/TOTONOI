@extends('layouts.app')

@section('my_page')
<section class="text-gray-600 body-font">
@if (Session::has('message'))
    <p class="text-center ">{{ session('message') }}</p>
@endif

<p><a href="/search">検索ページ</a><br>
<a href="/log">登録掲示板</a></p>


  <div class="mt-24 container mx-auto flex px-5 py-24 md:flex-row flex-col items-center bg-white border-4 border-double border-indigo-500">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0"> 
        @if (Session::has('top_image_pass'))
            <img class="object-center transform scale-90 "mx-auto object-cover rounded-full h-20 w-20 "" src="{{ asset('/storage/top_file') }}/{{ session('top_image_pass') }}" alt=""> 
              
        @elseif ($my_user->profile_photo_path == "/def_img/noimage.png")
            <p><img class="object-center transform scale-90" src="{{ $my_user->profile_photo_path }}" alt=""> </p>

        @else
            <p><img class="object-center transform scale-90" src="{{ asset('/storage/top_file') }}/{{ $my_user->profile_photo_path }}" alt=""> </p>
        @endif 
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
          <font style="vertical-align: inherit;"></font>
          <br class="hidden lg:inline-block">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">TOTONOIマイページ</font>
          </font>
      </h1>
      <p class="mb-8 ml-8 leading-relaxed text-aline">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">名前：{{ $my_user->name }}</font><br>
          <font style="vertical-align: inherit;">メールアドレス：{{ $my_user->email }}</font>
        </font>
      </p>
        <form action="/my_page2" method="post" enctype='multipart/form-data'> 
                {{ csrf_field() }}
            <div class="flex justify-center mt-2">
                <div class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                    <input type="file" id="selectFileSample1" name="top_image">ファイル選択
                </div>
                <div class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                    <input type="submit" value="">変更する
                </div>
            </div>
        </form>
    </div>
  </div>
  
  <div class="mt-10 w-4/6 text mx-auto border-4 border-double border-indigo-500">
    <h2 class="text-white font-semibold text-2xl bg-indigo-500 py-2 px-5 mx-auto flex md:flex-row flex-col">あなたの最新のコメント</h2>
  </div> 
  <div class="md:flex-row flex-col items-center mx-auto">
      <div class="container mx-auto flex md:flex-row flex-col items-center bg-white p-10 rounded-lg border-4 border-double border-indigo-500  ">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 divide-y divide-light-blue-400"> 
          <div class="rounded-lg bg-white text-2xl">
           <p class="midashi">銭湯名</p>
           <p class="balloon2-top text-xl">温泉</p
            <p class="midashi">Title</p>
            @if ($my_history === null)
                <p>最近のコメントなし</p>
            @else 
              <p class="balloon2-top text-xl">{{ $my_history->title }}</p>
              <p class="midashi">Comment</p>
              <p class="balloon2-top text-xl">{{ $my_history->body }}</p>
            @endif
          </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 lg:pl-24 md:pl-16 flex-row-reverse md:items-start md:text-left">
            @if(!empty($my_history->image_path))
              <img class="h-50 rounded-lg" src="{{ asset("/storage/company") }}/{{ $my_history->image_path }}" alt="">
            @endif
        </div>
      </div>
  </div>
</section>
@endsection
