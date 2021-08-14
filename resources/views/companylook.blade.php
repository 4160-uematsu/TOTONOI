<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
​
    <title>表示</title>
</head>
<body>
    
​
<a href="/log">みんなの掲示板</a></p>
​
        <h1>銭湯会社ページ</pe-zi></h1>
        <dl>
            <dd>
            <dt>銭湯名</dt>
            <li>{{ optional($info)->name }}</li>
            </dd>
        </dl>
        <dl>
            <dd>
                <dt>営業時間</dt>    
                <li>{{ optional($info)->time }}</li>
            </dd>
        </dl>
        <dl>
            <dd>
                <dt>宣伝</dt>
                <li>{{ optional($info)->promotion }}</li>
            </dd>
        </dl>
        <dl>
            <dd>
            <dt>住所</dt>
            <li>{{ optional($info)-> address}}</li>
            </dd>
        </dl>  
        
        <dl>
            <dd>
                <dt>設備</dt>
​
            @if ($info->riyu1 === '1')
                <li>露天風呂1あり</li>
                @endif
​
                @if ($info->riyu2 === '2')
                <li>露天風呂2あり</li>
                @endif 
​
                @if ( $info->riyu3 === '3')
                <li>露天風呂3あり</li>
                @endif   
        </dl>
​
        <dl>
                <dd>
            @isset ($info->photo)
                <dt>紹介写真</dt>
                <li><img src="{{ asset("/storage/company_promotion") }}/{{ optional($info)-> photo}}" alt=""></li>
            @endisset
                </dd>
        </dl>   
​
        @isset ($info2)
​
            @foreach($info2 as $row)
                銭湯名
                <p >{{ $row->companyname }}</p>
                <p >Name</p>
                <p >{{ $row->author }}</p>
                <p >Title</p>
                <p >{{ $row->title }}</p>
                <p >Comment</p>
                <p > {{ $row->body }}</p>
            @endforeach
​
        @endisset
​
    </body>
</html>
​
​