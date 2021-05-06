<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>画像アップサンプル</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <div id="app">
        <image-component></image-component>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>