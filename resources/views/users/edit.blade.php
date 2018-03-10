@extends('layouts.app')

@section('content')
    <div class="card-group row course-set courses__row museo text-white">
        <div class="col-md-12">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <table class="unstriped hover card-header parallax text-center text-white">
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
                                <a href="{{ route('profile.delete') }}">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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
@endsection