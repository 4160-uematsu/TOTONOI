<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>


       <style type="text/css">

body
    {
     margin:0px;          /* ページ全体のmargin */
     padding:0px;         /* ページ全体のpadding */
     text-align:center;   /* 下記のautoに未対応用のセンタリング */
    }

h2 {color:blue; line-height:1.5;}

form {
    text-align:center;
    font-family:'Times New Roman', Times, serif;
}

.box13 {
    padding: 0.5em 5em;
    margin: 5em 50;
    color: #FFF;
    background: #6eb7ff;
    border-bottom: solid 6px #3f87ce;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.25);
    border-radius: 9px;
}
.box13 p {
    margin: 0;
    padding: 0;
}
</style>


</head>
<body style="background-color:#FF367F;">

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
</body>
</html>
