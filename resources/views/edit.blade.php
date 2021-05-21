<html>
<body>
@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

@if(Session::has('name'))
<h2>{{ session('name') }}さんの直前の投稿</h2>
{{ session('comment') }}
<br><hr>
@endif


<!-- 投稿画面 -->
<form action="/users/edit" method="post" enctype='multipart/form-data'> 
    {{ csrf_field() }}
    <p>口コミ投稿フォーム</p>
    <input type="text" name="name"><br><br>
    <textarea name="comment" rows="8" cols="40">
    </textarea><br><br>
    <!-- 画像アップロード -->
    <div>
        <input type="hidden" name="id" value="">
    </div>
    <div>
        <input type="file" name="image">
    </div>
    <input type="submit" value="投稿する">
</form>
</body>
</html>
