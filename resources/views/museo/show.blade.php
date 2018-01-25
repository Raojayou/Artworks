@extends('layouts.app')

@section('content')
    <div>
        <p>Nombre: <strong>{{ $museo['name'] }}</strong></p>
        <p>Horario: <strong>{{ $museo['horario'] }}</strong></p>
        <p>Descripcción: <strong>{{ $museo['description'] }}</strong></p>
    </div>
@endsection