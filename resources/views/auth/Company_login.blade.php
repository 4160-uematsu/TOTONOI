@extends('layouts.app')

@section('company_login2')

@if(isset( $message ))
<p>メールアドレスまたはパスワードが正しくありません。</p>
@endif

<div class="m-10 text-xl">
    <form name="loginform" action="/company_login" method="post">
    @csrf
    <dl>
        <dt>メールアドレス</dt><dd><input type="text" name="email" size="30" value="
            {{old('email') }}"></dd>
        <dt>パスワード:</dt><dd><input type="password" name="password" size="30"></dd>
    </dl>
    <button type='submit' name="action" value='send' class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn mt-5">ログイン</button>
    </form>
@endsection