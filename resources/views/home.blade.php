@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid"
                             src="http://congresosaludmentalmujer.ces.edu.co/images/Museo-Filatelico.jpg"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://www.mjras.it/wp-content/media/2016/11/Urbino_00.jpg"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="http://placekitten.com/1200/250" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="page-header museo" align="center">Listado de Museos</h1>
        </div>
    </div>

    @forelse($museos->chunk(3) as $chunk)
        <div class="row course-set courses__row event d-flex justify-content-around museo">
            @foreach($chunk as $museo)
                @include('museos.museo')
            @endforeach
        </div>
    @empty
        <p>No hay museos para mostrar.</p>

    @endforelse

    <div class="pagination">
        {{ $museos->links('pagination::bootstrap-4') }}
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="page-header obra" align="center">Listado de Obras</h1>
        </div>
    </div>

    @forelse($obras->chunk(3) as $chunk)
        <div class="row course-set courses__row event d-flex justify-content-around obra">
            @foreach($chunk as $obra)
                @include('obras.obra')
            @endforeach
        </div>
    @empty
        <p>No hay obras para mostrar.</p>

    @endforelse

    <div class="pagination">
        {{ $obras->links('pagination::bootstrap-4') }}
    </div>
@endsection