@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header titulo">Museos</h1>
            </div>
        </div>
        @forelse($museos->chunk(3) as $chunk)
            <div class="row course-set courses__row museo">
                @foreach($chunk as $museo)
                    @include('museos.museo')
                @endforeach
            </div>
        @empty
            <h1>No hay museos añadidos todavía.</h1>
        @endforelse

        <div class="pagination">
            {{ $museos->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection