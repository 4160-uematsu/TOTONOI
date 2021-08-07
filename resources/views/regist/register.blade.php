@extends('layouts.app')

@section('company_login')
<div class="m-10 text-xl">
    <form action="/company_store" method="post" enctype="multipart/form-data">
    @csrf

        <dl>
            <dt>会社id</dt>
            <dd><input type="number" name="company" size="30">
                <span>{{ $errors->first('company') }}</span></dd>
        <dl>
        <dl>
            <dt>社員名</dt>
            <dd><input type="text" name="name" size="30">
                <span>{{ $errors->first('name') }}</span></dd>
        <dl>
        <dl>
            <dt>メールアドレス</dt>
            <dd><input type="text" name="email" size="30">
                <span>{{ $errors->first('email') }}</span></dd>
        <dl>
        <dl>
            <dt>パスワード</dt>
            <dd><input type="password" name="password" size="30">
                <span>{{ $errors->first('password') }}</span></dd>
        <dl>
        <dl>
            <dt>パスワード（確認）</dt>
            <dd><input type="password" name="password_confirmation" size="30">
                <span>{{ $errors->first('password_confirmation') }}</span></dd>
        <dl>
        <button type="submit"  value='' class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg originalbtn mt-5">送信</button>
    </form>
</div>
@endsection
