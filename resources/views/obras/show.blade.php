@extends('layouts.app')

@section('content')
    <div class="card-group row course-set courses__row obra">
        <div class="col-md-12">

            <div class="card-header bg-transparent border-primary">
                <h3 class="card-text">Nombre: {{ $obra['name'] }}</h3>
            </div>
            <div class="card-body">

                <h3 class="card-text">Tipo de Obra: {{ $obra['type'] }} </h3>

                <h3 class="card-text">Técnicas Usadas: {{ $obra['tecnique'] }}</h3>

                <h3 class="card-text">Materiales Usados: {{ $obra['materials'] }}</h3>

                <h3 class="card-text">Opinión del Usuario: {{ $obra['review'] }}</h3>

                {{--<div class="bg-light rounded">--}}
                {{--{{ $obra->user->name }}--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection