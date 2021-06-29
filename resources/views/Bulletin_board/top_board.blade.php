<!-- 投稿フォーム -->
@include("/Bulletin_board/form")

<h2>記事一覧</h2>


@php
    $i = 0;
@endphp

@foreach ($item_list as $item)
    @php
        if ($i >= 3){
        break;
        }
    @endphp
    <div class="entry">
        <h5>{{ $item->title }}</h5>
        <div>
            {!! nl2br(e($item->body)) !!}
        </div>
        <div>

        <img src="{{ asset("/storage/company") }}/{{ $item->image_path }}" alt="">


        </div>
        <!-- @if(Session::has('image'))
            <div>
                <img src="{{ asset("/storage/company") }}/{{ session('image') }}" alt=""> 
            </div>
        @endif -->
    </div>
    @php
        $i++;
    @endphp
@endforeach        
@if(count($item_list) < 1)
<p>投稿がありません</p>
@endif