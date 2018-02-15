@forelse($museos->chunk(3) as $chunk)
    @foreach($chunk as $museo)
        <div class="card col-md-3 row">
            <div class="bg-light rounded">
                Museo:
                <a href="/museos/show/{{ $museo['id'] }}">{{ $museo['name'] }} </a>

                <div class="bg-light rounded">
                    Añadido por:
                    <a href="/user/{{ $museo->user->username }}"> {{ $museo->user->name }}</a>
                </div>

                <div class="bg-light rounded">
                    <p class="card-text">Descripción: {{ $museo['description'] }}</p>
                </div>
                <br>
            </div>
        </div>
    @endforeach
@empty
    <p>No hay museos para mostrar.</p>
@endforelse