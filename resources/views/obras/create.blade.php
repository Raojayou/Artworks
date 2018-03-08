@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-white">
                <div class="panel panel-default">
                    <div class="card" style="width: 35rem;">
                        <div class="card-body">
                            <div class="panel-heading">Creación de Obra</div>
                            <hr>
                            <div class="panel-body">
                                <form id="crearObra" action="{{ url('/') }}/obras/create" method="post" class="form-horizontal">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre de la Obra</label>

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

                                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                        <label for="type" class="col-md-4 control-label">Tipo de Obra</label>

                                        <div class="col-md-6">
                                            <select name="type" class="custom-select custom-select-lg mb-3"
                                                    id="type" title="Tipo de Obra">
                                                <option selected>Selecciona una opción</option>
                                                <option value="Arquitectura">Arquitectura</option>
                                                <option value="Escultura‎">Escultura‎</option>
                                                <option value="Literaria">Literaria</option>
                                                <option value="Musical‎">Musical‎‎</option>
                                                <option value="Plástica">Plástica</option>
                                                <option value="Pintura‎">Pintura</option>

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

                                    <div class="form-group{{ $errors->has('tecnique') ? ' has-error' : '' }}">
                                        <label for="tecnique" class="col-md-4 control-label">Técnicas Usadas</label>

                                        <div class="col-md-6">
                                            <select name="tecnique" class="custom-select custom-select-lg mb-3"
                                                    id="tecnique" title="Técnicas Usadas">
                                                <option selected>Selecciona una opción</option>
                                                <option value="Técnicas de poesía‎">Técnicas de poesía‎</option>
                                                <option value="Técnicas cinematográficas‎">Técnicas cinematográficas‎
                                                </option>
                                                <option value="Técnicas de escultura‎">Técnicas de escultura‎</option>
                                                <option value="Técnicas de alfarería y cerámica">Técnicas de alfarería y
                                                    cerámica
                                                </option>
                                                <option value="Técnicas de música‎">Técnicas de música‎</option>
                                                <option value="Técnicas de pintura‎">Técnicas de pintura‎‎</option>

                                            </select>

                                            @if($errors->has('tecnique'))
                                                @foreach($errors->get('tecnique') as $message)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('materials') ? ' has-error' : '' }}">
                                        <label for="materials" class="col-md-4 control-label">Material Usado</label>

                                        <div class="col-md-6">
                                            <select name="materials" class="custom-select custom-select-lg mb-3"
                                                    id="materials" title="Material Usado">
                                                <option selected>Selecciona una opción</option>
                                                <option value="Madera y derivados">Madera y derivados</option>
                                                <option value="Metal y derivados">Metal y derivados</option>
                                                <option value="Cerámica y derivados‎">Cerámica y derivados‎</option>
                                                <option value="Pintura">Pintura</option>
                                                <option value="Mármol‎">Mármol‎</option>
                                                <option value="Marfíl‎">Marfíl‎</option>

                                            </select>

                                            @if($errors->has('materials'))
                                                @foreach($errors->get('materials') as $message)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('review') ? ' has-error' : '' }}">
                                        <label for="review" class="col-md-4 control-label">Opinión</label>

                                        <div class="col-md-6">
                                            <textarea id="review" class="form-control" name="review" rows="5"
                                                      autofocus></textarea>

                                            @if($errors->has('review'))
                                                @foreach($errors->get('review') as $message)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button id="enviarObra" type="submit" class="btn btn-primary">
                                                Añadir Obra
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
    @push('scripts')
        <script src="{{asset ('js/validacionObra.js')}}"></script>
    @endpush
@endsection