<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset='utf-8'>
    <title>トップ画面</title>
</head>
<body>
    <p>こんにちは
        <!-- @if (Auth::check())
            {{ \Auth::user()->name }}さん<p>
                <p><a href="/logout">ログアウト</a></p>
        @else
        ゲストさん</p>
        <p><a href="/login">ログイン</a><br><a href="/register">会員登録</a></p>
        <p><a href="/company">会社</a></p>
    @endif -->
    {{ $companyusers->name }}さん<p>
    
    
<!--     
        @if (Session::has('email'))
        <p class="text-center ">{{ session('email') }}</p>
    @endif

    @if (Session::has('name'))
        <p class="text-center ">{{ session('name') }}</p>
    @endif -->

    <p><a href="/logout">ログアウト</a></p>
    <p><a href="/login">ログイン</a><br><a href="/register">会員登録</a></p>
        <p><a href="/company">会社</a></p>

</body>

</html>
