@foreach($museos->chunk(3) as $chunk)
    <div class="row course-set courses__row museo">
        @foreach($chunk as $museo)
            <div class="col-md-4">
                <div class="bg-light rounded">
                    <a href="/museo/show/{{ $museo['id'] }}">
                        <h4>
                            Nombre: {{ $museo['name'] }}
                        </h4>
                    </a>
                </div>

                <div class="bg-light rounded">
                    <p class="ng">
                        Descripción: {{ $museo['description'] }}
                    </p>
                </div>

                <div class="bg-light rounded">
                    Creado por:
                    <a class="btn pull-right"  href="/user/{{ $museo->user->username }}">
                        {{ $museo->user->name }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endforeach

@if($museos->isEmpty())
    <p>No hay museos para mostrar.</p>
@endif