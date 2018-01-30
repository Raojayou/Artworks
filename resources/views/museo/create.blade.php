@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Añadir Museo</div>

                    <div class="panel-body">
                        <form action="{{ url('/') }}/museo/create" method="post" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre del Museo</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                    @if($errors->has('name'))
                                        @foreach($errors->get('name') as $message)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('horario') ? ' has-error' : '' }}">
                                <label for="horario" class="col-md-4 control-label">Horario</label>

                                <div class="col-md-6">
                                    <input id="horario" type="text" class="form-control" name="horario" value="{{ old('horario') }}" autofocus>

                                    @if($errors->has('horario'))
                                        @foreach($errors->get('horario') as $message)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('web') ? ' has-error' : '' }}">
                                <label for="web" class="col-md-4 control-label">Página Web</label>

                                <div class="col-md-6">
                                    <input id="web" type="text" class="form-control" name="web" value="{{ old('web') }}" autofocus>

                                    @if($errors->has('web'))
                                        @foreach($errors->get('web') as $message)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('social') ? ' has-error' : '' }}">
                                <label for="direccion" class="col-md-4 control-label">Redes Sociales</label>

                                <div class="col-md-6">
                                    <input id="social" type="text" class="form-control" name="social" value="{{ old('social') }}" autofocus>

                                    @if($errors->has('social'))
                                        @foreach($errors->get('social') as $message)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Tipo de Museo</label>

                                <div class="col-md-6">
                                    <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" autofocus>

                                    @if($errors->has('type'))
                                        @foreach($errors->get('type') as $message)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('period') ? ' has-error' : '' }}">
                                <label for="period" class="col-md-4 control-label">Época de las Obras</label>

                                <div class="col-md-6">
                                    <input id="period" type="text" class="form-control" name="period" value="{{ old('period') }}" autofocus>

                                    @if($errors->has('period'))
                                        @foreach($errors->get('period') as $message)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Descripción</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="description" rows="5" autofocus></textarea>

                                    @if($errors->has('description'))
                                        @foreach($errors->get('description') as $message)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Añadir Museo
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