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

</style>


</head>
<body style="background-color:cyan;">

    <h2>会社</h2>
<form action="company" method="POST">
    id:
    <input name="cid">
    <br>
    銭湯の写真:
    <input name="cauthor_id">
    <br>
    営業時間:
    <input name="cimage">
    <br>
    pr文:
    <input name="cbody">
    <br>
    内容:
    <textarea name="title" rows="4" cols="40"></textarea>
    <br>
    {{ csrf_field() }}
    <button class="btn btn-success"> submit </button>
</form>
</body>
</html>
