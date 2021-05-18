@if (Session::has('message'))
    <p>{{ session('message') }}</p>
@endif

<form action="/users/edit" method="post" enctype='multipart/form-data'> 
        {{ csrf_field() }}
        <div>
            <input type="hidden" name="id" value="">
        </div>
        <div>
            <input type="file" name="image">
        </div>
        <input type="submit" value="画像を送信する">
</form>