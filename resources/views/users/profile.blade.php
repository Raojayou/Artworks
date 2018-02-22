@extends('layouts.app')

@section('content')
    <div class="row course-set courses__row museo">
        <div class="col-md-12">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <div class="bg-light rounded">
                        <h3>
                            Nombre: {{ $user['name'] }}
                        </h3>
                    </div>
                    <hr>
                    <div class="bg-light rounded">
                        <h3>
                            Apellido: {{ $user['lastName'] }}
                        </h3>
                    </div>
                    <hr>
                    <div class="bg-light rounded">
                        <h3>
                            Nick: {{ $user['username'] }}
                        </h3>
                    </div>

                    {{--<div class="bg-light rounded">--}}
                    {{--<h3>--}}
                    {{--Email: {{ $user['email'] }}--}}
                    {{--</h3>--}}
                    {{--</div>--}}

                    {{--<div class="bg-light rounded">--}}
                    {{--<h3>--}}
                    {{--Móvil: {{ $user['phone'] }}--}}
                    {{--</h3>--}}
                    {{--</div>--}}

                    {{--<div class="bg-light rounded">--}}
                    {{--<h3>--}}
                    {{--Web: {{ $user['website'] }}--}}
                    {{--</h3>--}}
                    {{--</div>--}}

                    {{--<div class="bg-light rounded">--}}
                    {{--<h3>--}}
                    {{--Descripción: {{ $user['about'] }}--}}
                    {{--</h3>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection