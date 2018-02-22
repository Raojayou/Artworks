<div class="card col-md-3 row">
    <div class="card-body">
        <div class="bg-light rounded">
            Obra:
            <a href="/obras/show/{{ $obra['id'] }}">{{ $obra['name'] }} </a>
            <hr>
            <div class="bg-light rounded">
                Añadida por:
                <a href="/user/{{ $obra->user->username }}"> {{ $obra->user->name }}</a>
            </div>
            <hr>
            <div class="bg-light rounded">
                <p class="card-text">Opinión del Usuario: {{ $obra['review'] }}</p>
            </div>

        </div>
    </div>
</div>