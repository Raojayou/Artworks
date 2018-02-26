@extends('layouts.app')

@section('content')
    <div class="card-group row course-set courses__row obra">
        <div class="col-md-12">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <h2 class="card-title text-center">Nombre: {{ $obra['name'] }}</h2>
                    <hr>
                    <h3 class="card-text">Tipo de Obra: {{ $obra['type'] }} </h3>
                    <hr>
                    <h3 class="card-text">Técnicas Usadas: {{ $obra['tecnique'] }}</h3>
                    <hr>
                    <h3 class="card-text">Materiales Usados: {{ $obra['materials'] }}</h3>
                    <hr>
                    <h3 class="card-text">Opinión del Usuario: {{ $obra['review'] }}</h3>

                </div>
            </div>
        </div>
    </div>
@endsection