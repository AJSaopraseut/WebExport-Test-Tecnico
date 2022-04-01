$(document).ready(() => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //funciones de la pagina crear

    $('.formCrear').hide();

    $('#selectorParaCrear').change(function () {
        var valorEscogido = $("input[name='selector']:checked").val();

        if ($("input[name='selector']:checked").val() == 1) {
            $('.formCrear').hide(200)
            $('#formUsuario').show(200)
        }
        else if ($("input[name='selector']:checked").val() == 2) {
            $('.formCrear').hide(200)
            $('#crearRol').show(200)
        }

    });

    //alerta de confirmar accion

    $('.btn-confirmar').click(function () {
        return confirm('Estas seguro de que quieres realizar esta accion?')
    });
});