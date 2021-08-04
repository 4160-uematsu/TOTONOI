<!-- @include("/Bulletin_board/form") -->
<h2>銭湯の人の入力</h2>
<form action="/company_info" method="POST" >
@csrf
<br>
    店の写真:
    <input type="file"
        id="avatar" name="photo"
        accept="image/png, image/jpeg">
    <br>
    銭湯名:
    <input name="name">
    <br>
    営業時間:
    <input name="time">
    <br>
    宣伝:
    <input name="promotion">
    <br>
    <input type="checkbox" name="riyu1" value="1" checked="checked">露天風呂
    <input type="checkbox" name="riyu2" value="2">サウナ
    <input type="checkbox" name="riyu3" value="3">電気風呂
    </p>
    <br>
    アクセス:
    <input name="title">
    <!-- <textarea name="title" rows="4" cols="40" ></textarea> -->
        <br>
        住所:
        <input name="address">
        <!-- <textarea name="address" rows="4" cols="40" ></textarea> -->
        <br>

    <div class="box13">
        <button class="btn btn-success">
        <p>提出</p>
    </button>
    </div>
</form>