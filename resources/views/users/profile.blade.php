@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="col bg-light rounded parallax text-white">
                        <h3>
                            Nombre: {{ $user['name'] }}
                        </h3>
                    </div>

                    <div class="col bg-light rounded parallax text-white">
                        <h3>
                            Apellido: {{ $user['lastName'] }}
                        </h3>
                    </div>

                    <div class="col bg-light rounded parallax text-white">
                        <h3>
                            Nick: {{ $user['username'] }}
                        </h3>
                    </div>

                    <div class="col bg-light rounded parallax text-white">
                        <h3>
                            Email: {{ $user['email'] }}
                        </h3>
                    </div>

                    <div class="col bg-light rounded parallax text-white">
                        <h3>
                            Móvil: {{ $user['phone'] }}
                        </h3>
                    </div>

                    <div class="col bg-light rounded parallax text-white">
                        <h3>
                            Web: {{ $user['website'] }}
                        </h3>
                    </div>

                    <div class="col bg-light rounded parallax text-white">
                        <h3>
                            Descripción: {{ $user['about'] }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection