@extends('layouts.app')

@section('content')
    <div>
        <p>Nombre: <strong>{{ $museo['name'] }}</strong></p>
        <p>Horario de Apertura: <strong>{{ $museo['horario_apertura'] }}</strong></p>
        <p>Horario de Cierre: <strong>{{ $museo['horario_cierre'] }}</strong></p>
        <p>Descripcción: <strong>{{ $museo['description'] }}</strong></p>
    </div>
@endsection