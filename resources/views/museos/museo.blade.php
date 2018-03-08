@foreach($museos->chunk(3) as $chunk)
    <div class="row course-set courses__row d-flex justify-content-around museo">
        @foreach($chunk as $museo)
            <div class="card col-md-3 row">
                <div class="card-body">
                    <div class="bg-light rounded">
                        <div class="card-header parallax text-white">
                            Museo:
                            <a href="/museos/show/{{ $museo['id'] }}"> {{ $museo['name'] }}</a>
                        </div>

                        <div class="card-header parallax text-white">
                            <p class="card-text">Descripción: {{ $museo['description'] }}</p>
                        </div>

                        <div class="card-header parallax text-white">
                            Añadido por:
                            <a href="/user/{{ $museo->user->username }}"> {{ $museo->user->name }}</a>
                        </div>

                        <div class="card-header parallax text-white rounded-bottom">
                            Creado:
                            {{ $museo['created_at'] }}
                        </div>
                    </div>

                    {{--<div class="autocomplete">--}}
                    {{--<label for="tags">Introduzca letras para autocompletar: </label>--}}
                    {{--<input id="tags">--}}
                    {{--</div>--}}

                </div>
            </div>
        @endforeach
    </div>
    <br>
@endforeach

@if($museos->isEmpty())
    <p>El usuario no ha creado ningún museo recientemente.</p>
@endif