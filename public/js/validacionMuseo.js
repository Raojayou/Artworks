/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 46);
/******/ })
/************************************************************************/
/******/ ({

/***/ 46:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(47);


/***/ }),

/***/ 47:
/***/ (function(module, exports, __webpack_require__) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

function gestionarErrores(input, errores) {
    var errors = false;
    input = $(input);
    if ((typeof errores === "undefined" ? "undefined" : _typeof(errores)) !== ( true ? "undefined" : _typeof(undefined))) {
        input.removeClass("is-invalid");
        input.addClass("is-invalid");
        input.nextAll(".valid-feedback").remove();
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
            for (var _iterator = errores[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                var error = _step.value;

                input.after("<div class=\"invalid-feedback\"><strong> " + error + " </strong></div>");
            }
        } catch (err) {
            _didIteratorError = true;
            _iteratorError = err;
        } finally {
            try {
                if (!_iteratorNormalCompletion && _iterator.return) {
                    _iterator.return();
                }
            } finally {
                if (_didIteratorError) {
                    throw _iteratorError;
                }
            }
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
    var formData = new FormData();
    var input = event.target;

    formData.append(input.id, input.value);
    axios.post('/museos/validar', formData).then(function (response) {
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
        validateTarget(e.target);
    });

    $("#enviarMuseo").click(function (e) {
        e.preventDefault();
        var submit = true;
        var formData = new FormData();
        formData.append('name', $("#name").val());
        formData.append('horario_apertura', $("#horario_apertura").val());
        formData.append('horario_cierre', $("#horario_cierre").val());
        formData.append('web', $("#web").val());
        formData.append('social', $("#social").val());
        formData.append('type', $("#type").val());
        formData.append('period', $("#period").val());
        formData.append('description', $("#description").val());

        axios.post('/museos/validar', formData).then(function (response) {
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

/***/ })

/******/ });