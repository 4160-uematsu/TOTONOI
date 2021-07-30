@extends('layouts.app')

@section('company_login')
    <form name="registform" action="company" method="post" id="registform">
        {{ csrf_field() }}
        <dl>
            <dt>名前:</dt>
            <dd><input type="text" name="name" size="30">
                <span>{{ $errors->first('name') }}</span></dd>
        <dl>
            <dl>
                <dt>メールアドレス:</dt>
                <dd><input type="text" name="email" size="30">
                    <span>{{ $errors->first('email') }}</span></dd>
            <dl>
                <dl>
                    <dt>パスワード:</dt>
                    <dd><input type="password" name="password" size="30">
                        <span>{{ $errors->first('password') }}</span></dd>
                <dl>
                    <dl>
                        <dt>パスワード（確認）:</dt>
                        <dd><input type="password" name="password_confirmation" size="30">
                            <span>{{ $errors->first('password_confirmation') }}</span></dd>
                    <dl>
                <button type="submit" name="action" value='send'>送信</button>
    </form>
@endsection
