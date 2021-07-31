<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>companyform 表示</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            margin: 100px 300px 100px 300px;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref">
        <h1>銭湯会社の受け取り</h1>
        <dl>
            <dt></dt>
            <dd>{{ $cbath }}</dd>
        </dl>
        <dl>
            <dt>年齢</dt>
            <dd>{{ $cphto }}</dd>
        </dl>
        <dl>
            <dt>年齢</dt>
            <dd>{{ $cbody }}</dd>
        </dl>
        <dl>
            <dt>年齢</dt>
            <dd>{{ $caccess }}</dd>
        </dl>
        <dl>
            <dt>年齢</dt>
            <dd>{{ $caddress }}</dd>
        </dl>

        <dl>
            <dt></dt>
            <dd>
                @foreach ($hottab as $hottab)
                    @if (!$hottab->hottab)
                        {{ $hottab }},
                    @else
                        {{ $hottab }}
                    @endif
                @endforeach
            </dd>
        </dl>
    </div>
</body>
</html>

