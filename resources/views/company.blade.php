<!-- @include("/Bulletin_board/form") -->
@extends('layouts.app')

@section('company_info')
<div class="mx-auto mt-10 p-8 w-2/4 bg-white border-4 border-double border-indigo-500">
    <div class="mx-auto text-2xl font-bold bg-indigo-500 w-1/2 text-white text-center rounded p-3">
    銭湯情報の入力フォーム
    </div>
    <form action="#" method="POST" >
    @csrf
    <ul class="text-center mx-auto">
        <li class="text-xl font-semibold mt-7 text-gray-400">
            <label for="photo">ホーム画像</label>
            <div class="text-white bg-indigo-300 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn">
                ファイルを選択<input type="file" id="avatar" name="photo" accept="image/png, image/jpeg">
            </div>
        </li>
        <li class="text-xl font-semibold mt-3 text-gray-400">
            <label for="name">銭湯名</label> 
            <input name="name" type="text" class="border-black border-solid">
        </li>
        <li class="text-xl font-semibold mt-3 text-gray-400">
            <label for="time">営業時間</label> 
            <input name="time" type="text">
        </li>

        <li class="text-xl font-semibold mt-3 text-gray-400">
            <label for="promotion">PR</label> 
            <input name="promotion" type="text">
        </li>

        <li class="text-xl font-semibold mt-3 text-gray-400">
            <label for="setsubi">設備</label> 
            <input type="checkbox" name="riyu1" value="1" checked="checked">露天風呂
            <input type="checkbox" name="riyu2" value="2">サウナ
            <input type="checkbox" name="riyu3" value="3">電気風呂
        </li>

        <li class="text-xl font-semibold mt-3 text-gray-400">
            <label for="access">アクセス</label> 
            <input name="access" type="text">
            <!-- <textarea name="title" rows="4" cols="40" ></textarea>
                <br>
                住所:
                <input name="address" type="text">
                <textarea name="address" rows="4" cols="40" ></textarea> -->
            </li>
            <div class="box13">
                <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn mt-5">提出</button>
            </div>
        </div>
        </ul>
    </form>
</div>
@endsection