@extends('layouts.app')

@section('content')
    <div class="card-group row course-set courses__row museo">
        <div class="col-md-12">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <div class="card-header bg-transparent border-primary">
                        <h3 class="text-center">Nombre: {{ $museo['name'] }}</h3>
                    </div>

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