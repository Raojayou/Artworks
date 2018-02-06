@extends('layouts.app')

@section('content')
    <div class="row course-set courses__row museo">
        <div class="col-md-12">
            <div class="bg-light rounded">
                <h3>
                    Nombre: {{ $museo['name'] }}
                </h3>
            </div>

            <div class="bg-light rounded">
                <h3>
                    Horario de Apertura: {{ $museo['horario_apertura'] }}
                </h3>
                <h3>
                    Horario de Cierre: {{ $museo['horario_cierre'] }}
                </h3>
            </div>

            <div class="bg-light rounded">
                <h3>
                    Redes Sociales: {{ $museo['social'] }}
                </h3>
            </div>

            <div class="bg-light rounded">
                <h3>
                    Tipo de Museo: {{ $museo['type'] }}
                </h3>
            </div>

            <div class="bg-light rounded">
                <h3>
                    Época de las Obras: {{ $museo['period'] }}
                </h3>
            </div>

            <div class="bg-light rounded">
                <h3>
                    Descripción: {{ $museo['description'] }}
                </h3>
            </div>

            <div class="bg-light rounded">
                {{ $museo->user->name }}
            </div>
        </div>
    </div>
@endsection