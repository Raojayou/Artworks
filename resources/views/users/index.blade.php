@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Museos creados por {{ $user['name'] }}</h1>
    </div>
    @include('museos.museo')
    <div class="text-center">{{ $museos->links('pagination::bootstrap-4') }}</div>
@endsection