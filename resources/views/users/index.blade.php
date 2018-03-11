@extends('layouts.app')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12 text-white text-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="info-user">
                        <h1>Museos creados por {{ $user['username'] }}</h1>
                        <p>Avatar del usuario</p>
                        <img src="{{ $user['avatar'] }}" width="250" height="250">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    @include('museos.museo')

    <div class="pagination">
        {{ $museos->links('pagination::bootstrap-4') }}
    </div>
@endsection
