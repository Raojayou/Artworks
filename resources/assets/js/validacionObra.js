function gestionarErrores(input, errores) {
    let errors = false;
    input = $(input);
    if (typeof errores !== typeof undefined) {
        input.removeClass("is-invalid");
        input.addClass("is-invalid");
        input.nextAll(".valid-feedback").remove();
        for (let error of errores) {
            input.after(`<div class="invalid-feedback"><strong> ${error} </strong></div>`);
        }
        errors = true;
    } else {
        input.removeClass("is-invalid");
        input.addClass("is-valid");
        input.nextAll(".invalid-feedback").remove();
    }
    console.log(errors);
    return errors;
}

function validateTarget(target) {
    let formData = new FormData();
    let input = (event.target);

    formData.append(input.id, input.value);
    axios.post('/obras/validar',
        formData
    ).then(function (response) {
        switch (input.id) {
            case "name":
                gestionarErrores(target, response.data.name);
                break;
            case "type":
                gestionarErrores(target, response.data.type);
                break;
            case "tecnique":
                gestionarErrores(target, response.data.tecnique);
                break;
            case "materials":
                gestionarErrores(target, response.data.materials);
                break;
            case "review":
                gestionarErrores(target, response.data.review);
                break;
        }
    }).catch(function (error) {
        console.log(error);
    });
}

$(function () {
    $("#name, #type, #tecnique, #materials, #review").on('change', function (e) {
        validateTarget(e.target)
    });

    $("#enviarObra").click(function (e) {
        e.preventDefault();
        let submit = true;
        let formData = new FormData;
        formData.append('name', $("#name").val());
        formData.append('type', $("#type").val());
        formData.append('tecnique', $("#tecnique").val());
        formData.append('materials', $("#materials").val());
        formData.append('review', $("#review").val());

        axios.post('/obras/validar', formData)
            .then(function (response) {
                if (gestionarErrores("#name", response.data.name)) {
                    submit = false;
                }

                if (gestionarErrores("#type", response.data.type)) {
                    submit = false;
                }

                if (gestionarErrores("#tecnique", response.data.tecnique)) {
                    submit = false;
                }

                if (gestionarErrores("#materials", response.data.materials)) {
                    submit = false;
                }

                if (gestionarErrores("#review", response.data.review)) {
                    submit = false;
                }

                if (submit === true) {
                    $("#crearObra").submit();
                }
            });
    });
});