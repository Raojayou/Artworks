@if($obras->isEmpty())
    <p>No hay obras para mostrar.</p>
@endif

@foreach($obras as $obra)
    <div class="col-md-4 row">
        <div class="bg-light rounded">
            Obra:
            <a href="/obras/show/{{ $obra['id'] }}">{{ $obra['name'] }} </a>

            <div class="bg-light rounded">
                Añadida por:
                <a href="/user/{{ $obra->user->username }}"> {{ $obra->user->name }}</a>
            </div>

            <div class="bg-light rounded">
                <p class="card-text">Opinión del Usuario: {{ $obra['review'] }}</p>
            </div>
            <br>
        </div>
    </div>
@endforeach