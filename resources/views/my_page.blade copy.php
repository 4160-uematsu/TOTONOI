@extends('layouts.app')
<!-- <style>
    label>input{
        display:none;
    } -->
</style>
<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="ヒーロー" src="https://dummyimage.com/720x600">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
        <font style="vertical-align: inherit;"></font>
        <br class="hidden lg:inline-block">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">TOTONOI</font>
          <font style="vertical-align: inherit;">マイページ</font>
        </font>
      </h1>
      <p class="mb-8 leading-relaxed">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">名前：{{ $my_user->name }}</font><br>
          <font style="vertical-align: inherit;">メールアドレス：{{ $my_user->email }}</font>
        </font>
      </p>
        <form action="/my_page2" method="post" enctype='multipart/form-data'> 
                {{ csrf_field() }}
            <div class="flex justify-center">
                <div class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                    <input type="file" name="top_image">ファイル選択
                </div>
        
                <div class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                    <input type="submit" value="">変更する
                </div>
            </div>
            <P>選択されていません</P>
        </form>
    </div>
  </div>
</section>

@section('my_page')
    @if (Session::has('message'))
        <p>{{ session('message') }}</p>
    @endif
    <div class="flex items-stretch">
        <div class="flex-1 px-4 py-2 m-2 border-gray-200">
        @if (Session::has('top_image_pass'))
            <img class="object-center transform scale-75" src="{{ asset('/storage/top_file') }}/{{ session('top_image_pass') }}" alt=""> 
            
        @elseif ($my_user->profile_photo_path == "/def_img/noimage.png")
            <p><img class="object-center transform scale-75" src="{{ $my_user->profile_photo_path }}" alt=""> </p>

        @else
            <p><img class="object-center transform scale-75" src="{{ asset('/storage/top_file') }}/{{ $my_user->profile_photo_path }}" alt=""> </p>
        @endif
        </div>
        <div class="text-current font-medium text-xl flex-1 px-4 py-2 m-2">
            <div class="bg-gray-200 mt-20 px-4 py-4 rounded-lg w-3/4">
                <p class="mt-5">名前：{{ $my_user->name }}</p>
                <p class="my-4">メールアドレス：{{ $my_user->email }}</p>
            </div>
        </div>
    </div>

    <body>
        <!-- マイページ変更画面 -->
        <form action="/my_page2" method="post" enctype='multipart/form-data'> 
            {{ csrf_field() }}
            <!-- 画像内容 -->
            <div class="m-20">
                <div>
                    <label name="top_image">
                        <input class="btn rounded-md mx-4" type="file" name="top_image">
                    </label>
                </div>
                <div>
                    <label name="submit">
                        <input class="btn bg-indigo-700 m-4 p-2 text-white rounded-md" name="submit" type="submit" value="変更する">
                    </label>
                </div>
            </div>
        </form> 
    </body>
@endsection

