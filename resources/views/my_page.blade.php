@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

<p>名前:{{ $my_user->name }}</p>
<p>メールアドレス:{{ $my_user->email }}</p>

@if (Session::has('top_image_pass'))
    <img src="{{ asset('/storage/top_file') }}/{{ session('top_image_pass') }}" alt=""> 

@elseif ($my_user->profile_photo_path == "/def_img/noimage.png")
    <p><img src="{{ $my_user->profile_photo_path }}" alt=""> </p>

@else
    <p><img src="{{ asset('/storage/top_file') }}/{{ $my_user->profile_photo_path }}" alt=""> </p>

@endif

<!DOCTYPE html>
<html lang="ja">
<body>
<!-- マイページ変更画面 -->
<form action="/my_page2" method="post" enctype='multipart/form-data'> 
    {{ csrf_field() }}
    <!-- 画像内容 -->
    <div>
        <input type="file" name="top_image">
    </div>
    <input type="submit" value="変更する">
</form>

</body>
</html>