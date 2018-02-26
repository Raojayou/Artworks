<div id="resizable" class="card col-md-3 row">
    <div class="card-body">
        <div class="bg-light rounded">
            <div class="card-header parallax text-white">
                Museo:
                <a href="/museos/show/{{ $museo['id'] }}"> {{ $museo['name'] }}</a>
            </div>
            <hr>
            <div class="card-header parallax text-white">
                Añadido por:
                <a href="/user/{{ $museo->user->username }}"> {{ $museo->user->name }}</a>
            </div>
            <hr>
            <div class="card-header">
                <p class="card-text">Descripción: {{ $museo['description'] }}</p>
            </div>
        </div>
        <br>
        <div class="autocomplete">
            <label for="tags">Introduzca letras para autocompletar: </label>
            <input id="tags">
        </div>
    </div>
</div>