@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header">Museos</h1>
            </div>
        </div>
    </div>
    @foreach($museos->chunk(3) as $chunk)
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
                            Horario: {{ $museo['horario'] }}
                        </h4>
                    </div>
                    <div>
                        <p class="ng">
                            Descripcción: {{ $museo['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <div class="text-center"></div>

@endsection