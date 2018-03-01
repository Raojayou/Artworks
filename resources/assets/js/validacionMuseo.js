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
    axios.post('/museos/validar',
        formData
    ).then(function (response) {
        switch (input.id) {
            case "name":
                gestionarErrores(target, response.data.name);
                break;
            case "horario_apertura":
                gestionarErrores(target, response.data.horario_apertura);
                break;
            case "horario_cierre":
                gestionarErrores(target, response.data.horario_cierre);
                break;
            case "web":
                gestionarErrores(target, response.data.web);
                break;
            case "social":
                gestionarErrores(target, response.data.social);
                break;
            case "type":
                gestionarErrores(target, response.data.type);
                break;
            case "period":
                gestionarErrores(target, response.data.period);
                break;
            case "description":
                gestionarErrores(target, response.data.description);
                break;
        }
    }).catch(function (error) {
        console.log(error);
    });
}

$(function () {
    $("#name, #horario_apertura, #horario_cierre, #web, #social, #type, #period, #description").on('change', function (e) {
        validateTarget(e.target)
    });

    $("#enviarMuseo").click(function (e) {
        e.preventDefault();
        let submit = true;
        let formData = new FormData;
        formData.append('name', $("#name").val());
        formData.append('horario_apertura', $("#horario_apertura").val());
        formData.append('horario_cierre', $("#horario_cierre").val());
        formData.append('web', $("#web").val());
        formData.append('social', $("#social").val());
        formData.append('type', $("#type").val());
        formData.append('period', $("#period").val());
        formData.append('description', $("#description").val());

        axios.post('/museos/validar', formData)
            .then(function (response) {
                if (gestionarErrores("#name", response.data.name)) {
                    submit = false;
                }

                if (gestionarErrores("#horario_apertura", response.data.horario_apertura)) {
                    submit = false;
                }

                if (gestionarErrores("#horario_cierre", response.data.horario_cierre)) {
                    submit = false;
                }

                if (gestionarErrores("#web", response.data.web)) {
                    submit = false;
                }

                if (gestionarErrores("#social", response.data.social)) {
                    submit = false;
                }

                if (gestionarErrores("#type", response.data.type)) {
                    submit = false;
                }

                if (gestionarErrores("#period", response.data.period)) {
                    submit = false;
                }

                if (gestionarErrores("#description", response.data.description)) {
                    submit = false;
                }

                if (submit === true) {
                    $("#crearMuseo").submit();
                }
            });
    });
});