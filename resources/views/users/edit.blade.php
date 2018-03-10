@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table class="col bg-light rounded parallax text-white text-centered">
                        <tbody>
                        <tr>
                            <td class="{{ Request::is('profile/account') ? 'mine' : '' }}">
                                <a href="{{ route('profile.account') }}">Cuenta</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="{{ Request::is('profile/password') ? 'mine' : '' }}">
                                <a href="{{ route('profile.password') }}">Contraseña</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="{{ Request::is('profile/avatar') ? 'mine' : '' }}">
                                <a href="{{ route('profile.avatar') }}">Avatar</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="{{ Request::is('profile/delete') ? 'mine' : '' }}">
                                <a href="{{ route('profile.delete') }}">Borrar Usuario</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="small-12 medium-8 cell">
                        @if( session('exito') )
                            <div class="callout primary">
                                <h5>Actualización correcta</h5>
                            </div>
                        @elseif( session('error'))
                            <div class="callout alert">
                                <h5>{{ session('error') }}</h5>
                            </div>
                        @endif
                        <form action="{{ Request::url() }}" method="POST">
                            {{ csrf_field() }}

                            @if( Request::is('profile/account') )
                                @include('users.partials.account')
                            @elseif( Request::is('profile/password') )
                                @include('users.partials.password')
                            @elseif( Request::is('profile/delete') )
                                @include('users.partials.delete')
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection