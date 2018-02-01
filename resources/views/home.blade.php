@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header text-center">Museos</h1>
            </div>
        </div>
    </div>
    @forelse($museos->chunk(3) as $chunk)
        <div class="row course-set courses__row museo">
            @foreach($chunk as $museo)
                <div class="col-md-4">
                    <div class="ng">
                        <h3>
                            Nombre: {{ $museo['name'] }}
                        </h3>
                    </div>

                    <div>
                        <h4 class="ng">
                            Horario de Apertura: {{ $museo['horario_apertura'] }}
                        </h4>

                        <h4 class="ng">
                            Horario de Cierre: {{ $museo['horario_cierre'] }}
                        </h4>
                    </div>
                    <div>
                        <p class="ng">
                            Descripcción: {{ $museo['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
                @empty
                    <h1>No hay museos añadidos todavía.</h1>
                @endforelse
                <div class="text-center">
                    {{ $museos->links('pagination::bootstrap-4') }}
                </div>
        </div>
@endsection