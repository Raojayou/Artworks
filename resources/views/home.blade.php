@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide m-auto" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="https://www.hotelrdeparis.com/cache/block_contents/intro_image/250x_musee_orsay.jpg?1485754168" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="https://s3-media2.fl.yelpcdn.com/bphoto/DtI1Buozt3JKiF3E8I0Jgg/ls.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="https://s3-media1.fl.yelpcdn.com/bphoto/i0w6KlpN0va4RA17DFgz4Q/ls.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header museo" align="center">Museos</h1>
            </div>
        </div>

        {{--@forelse($museos->chunk(3) as $chunk)--}}
            <div class="row course-set courses__row museo">
                {{--@foreach($chunk as $museo)--}}
                    @include('museos.museo')
                {{--@endforeach--}}
            </div>
        {{--@empty--}}
            {{--<h1>No hay museos añadidos todavía.</h1>--}}
        {{--@endforelse--}}

        <div class="pagination">
            {{ $museos->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection