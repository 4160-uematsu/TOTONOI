@extends('layouts.app')
@section('my_page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="get" action="/search">
                <div class="form-row">
                    <div class="col">
                        <!-- <input type="checkbox"  name="equipment" value="1">サウナ
                        <input type="checkbox"  name="equipment" value="2">露天風呂 -->
                        <input id="q" type="text" class="form-control" name="q" value="{{ $q }}" autocomplete="q" autofocus placeholder="{{ __('Name or address') }}">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">
                        {{ __('Search') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if(!empty($users))
            {{ __('SearchResult') }} : {{ __('SearchCount', ['num' => $users->total()]) }}
            <div class="card" style="margin-bottom: 20px;">
                <!-- <div class="card-header">{{ __('会社リスト') }}</div> -->

                <div class="card-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>{{ __('name') }}</th>
                                <th>{{ __('address') }}</th>
                                <th>{{ __('time') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                $name = {{ $user->name }}
                                <!-- <td><a href="/search2/{{ $user->name }}">{{ $user->name }}</a></td> -->
                                <td><a href="/search2?name2={{ $user->name }}&address={{ $user->address }}">{{ $user->name }}</a></td>
                                <td><a href="/search2?name2={{ $user->name }}&address={{ $user->address }}">{{ $user->address }}</a></td>
                                <td>{{ $user->time }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="paginate">
                {{ $users->appends(Request::only('q'))->links() }}
            </div>

            @endif

        </div>
    </div>
</div>
@endsection
