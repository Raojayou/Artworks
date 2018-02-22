<div class="card col-md-3 row">
    <div class="card-body">
        <div class="bg-light rounded">
            Museo:
            <a href="/museos/show/{{ $museo['id'] }}">{{ $museo['name'] }} </a>
            <hr>
            <div class="bg-light rounded">
                Añadido por:
                <a href="/user/{{ $museo->user->username }}"> {{ $museo->user->name }}</a>
            </div>
            <hr>
            <div class="bg-light rounded">
                <p class="card-text">Descripción: {{ $museo['description'] }}</p>
            </div>

        </div>
    </div>
</div>
