@extends('layouts.app')

@section('content')
    <div class="card-group row course-set courses__row museo text-white">
        <div class="col-md-12">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <img src="https://picsum.photos/300/300/?random" border="0" class="image-responsive" alt="Null">

                    <h2 class="card-header parallax text-center text-white">Nombre: {{ $museo['name'] }}</h2>
                    <hr>
                    <h3 class="card-text">Horario de Apertura: {{ $museo['horario_apertura'] }} </h3>
                    <hr>
                    <h3 class="card-text">Horario de Cierre: {{ $museo['horario_cierre'] }}</h3>
                    <hr>
                    <h3 class="card-text">Página Web: {{ $museo['web'] }}</h3>
                    <hr>
                    <h3 class="card-text">Tipo de Museo: {{ $museo['type'] }}</h3>
                    <hr>
                    <h3 class="card-text">Época de las Obras: {{ $museo['period'] }}</h3>
                    <hr>
                    <h3 class="card-text">Descripción: {{ $museo['description'] }}</h3>

                </div>
            </div>
        </div>
    </div>
@endsection