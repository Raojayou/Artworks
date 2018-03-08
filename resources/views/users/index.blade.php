@extends('layouts.app')

@section('content')
    <div class="text-center text-white">
        <h1>Museos creados por {{ $user['username'] }}</h1>
    </div>

    @include('museos.museo')

    <div class="pagination">
        {{ $museos->links('pagination::bootstrap-4') }}
    </div>
@endsection
