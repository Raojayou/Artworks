@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="card" style="width: 35rem;">
                        <div class="card-body">
                            <div class="panel-heading">Creación de Museo</div>
                            <hr>
                            <div class="panel-body">
                                <form action="{{ url('/') }}/museos/create" method="post" class="form-horizontal">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre del Museo</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name"
                                                   value="{{ old('name') }}" autofocus>

                                            @if($errors->has('name'))
                                                @foreach($errors->get('name') as $message)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('horario_apertura') ? ' has-error' : '' }}">
                                        <label for="horario_apertura" class="col-md-4 control-label">Horario de
                                            Apertura</label>

                                        <div class="col-md-6">
                                            <input id="horario_apertura" type="text" class="form-control"
                                                   name="horario_apertura" value="{{ old('horario_apertura') }}"
                                                   autofocus>

                                            @if($errors->has('horario_apertura'))
                                                @foreach($errors->get('horario_apertura') as $message)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('horario_cierre') ? ' has-error' : '' }}">
                                        <label for="horario_cierre" class="col-md-4 control-label">Horario de
                                            Cierre</label>

                                        <div class="col-md-6">
                                            <input id="horario_cierre" type="text" class="form-control"
                                                   name="horario_cierre" value="{{ old('horario_cierre') }}" autofocus>

                                            @if($errors->has('horario_cierre'))
                                                @foreach($errors->get('horario_cierre') as $message)
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
                                            <input id="web" type="text" class="form-control" name="web"
                                                   value="{{ old('web') }}" autofocus>

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
                                            <input id="social" type="text" class="form-control" name="social"
                                                   value="{{ old('social') }}" autofocus>

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

                                        <div class="col-lg-6">
                                            <select name="type" class="custom-select custom-select-lg mb-3"
                                                    id="type" title="Tipo de Museo">
                                                <option selected>Selecciona una opción</option>
                                                <option value="Antropológico">Antropológico</option>
                                                <option value="Arqueológico">Arqueológico</option>
                                                <option value="Arquitectura">Arquitectura</option>
                                                <option value="Arte Contemporáneo">Arte Contemporáneo</option>
                                                <option value="Artes Decorativas">Artes Decorativas</option>
                                                <option value="Bellas Artes">Bellas Artes</option>
                                                <option value="Ciencias Naturales">Ciencias Naturales</option>
                                                <option value="Científico-tecnológico">Científico-tecnológico</option>
                                                <option value="Etnográfic">Etnográfico</option>
                                                <option value="Histórico">Histórico</option>
                                                <option value="Marítimo y naval">Marítimo y naval</option>
                                                <option value="Militar">Militar</option>
                                                <option value="Musical">Musical</option>

                                            </select>

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
                                            <select name="period" class="custom-select custom-select-lg mb-3"
                                                    id="period" title="Época de las Obras">
                                                <option selected>Selecciona una opción</option>
                                                <option value="Prehistoria">Prehistoria</option>
                                                <option value="Edad Antigua">Edad Antigua</option>
                                                <option value="Edad Media">Edad Media</option>
                                                <option value="Edad Moderna">Edad Moderna</option>
                                                <option value="Edad Contemporánea">Edad Contemporánea</option>

                                            </select>

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
                                            <textarea id="description" class="form-control" name="description" rows="5"
                                                      autofocus></textarea>

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
        </div>
    </div>
@endsection