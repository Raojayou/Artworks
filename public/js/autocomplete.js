$( function() {
    var availableTags = [
        "Museo",
        "Obra",
        "Cuadro",
        "Autor",
        "Precio",
        "Itinerario"
    ];
    $( "#tags" ).autocomplete({
        source: availableTags
    });
} );