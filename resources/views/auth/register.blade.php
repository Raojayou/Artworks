@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5 text-white">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registro</div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{ url('/register') }}">
                            {!! csrf_field() !!}

                            <div class="form-group row{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-lg-4 col-form-label text-lg-right">Nick</label>

                                <div class="col-md-4">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}"  autofocus>

                                    @if ($errors->has('username'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-lg-4 col-form-label text-lg-right">Nombre</label>

                                <div class="col-md-4">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('lastName') ? ' has-error' : '' }}">
                                <label for="lastName" class="col-lg-4 col-form-label text-lg-right">Apellidos</label>

                                <div class="col-md-4">
                                    <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}"  autofocus>

                                    @if ($errors->has('lastName'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('lastName') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-lg-4 col-form-label text-lg-right">E-Mail</label>

                                <div class="col-md-4">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-lg-4 col-form-label text-lg-right">Móvil</label>

                                <div class="col-md-4">
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" autofocus>

                                    @if ($errors->has('phone'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('website') ? ' has-error' : '' }}">
                                <label for="website" class="col-lg-4 col-form-label text-lg-right">Sitio Web</label>

                                <div class="col-md-4">
                                    <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}"  autofocus>

                                    @if ($errors->has('website'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('about') ? ' has-error' : '' }}">
                                <label for="about" class="col-lg-4 col-form-label text-lg-right">Descripción</label>

                                <div class="col-md-4">
                                    <input id="about" type="text" class="form-control" name="about" value="{{ old('about') }}"  autofocus>

                                    @if ($errors->has('about'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('about') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-lg-4 col-form-label text-lg-right">Contraseña</label>

                                <div class="col-md-4">
                                    <input id="password" type="password" class="form-control" name="password" >

                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-right">Confirmar contraseña</label>

                                <div class="col-md-4">
                                    <input
                                            type="password"
                                            class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                            name="password_confirmation"
                                    >
                                    @if ($errors->has('password_confirmation'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 offset-lg-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrarse
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
