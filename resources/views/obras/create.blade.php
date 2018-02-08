@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Creación de Obra</div>

                    <div class="panel-body">
                        <form action="{{ url('/') }}/obras/create" method="post" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre de la Obra</label>

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

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Tipo de Obra</label>

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

                            <div class="form-group{{ $errors->has('tecnique') ? ' has-error' : '' }}">
                                <label for="tecnique" class="col-md-4 control-label">Técnicas Usadas</label>

                                <div class="col-md-6">
                                    <input id="tecnique" type="text" class="form-control" name="tecnique" value="{{ old('tecnique') }}" autofocus>

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
                                    <input id="materials" type="text" class="form-control" name="materials" value="{{ old('materials') }}" autofocus>

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
                                    <textarea id="review" class="form-control" name="review" rows="5" autofocus></textarea>

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
                                    <button type="submit" class="btn btn-primary">
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
@endsection