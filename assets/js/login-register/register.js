$(document).ready(function() {

    $("#loginform").validate({
        event: "blur",
        rules: { 'name': "required", 'email': "required email", 'message': "required" },
        messages: {
            'name': "Ingrese su Nombre",
            'sur_name': "Ingrese su apellido",
            'email': "Ingrese su Correo Electronico",
            'password': "Ingrese su Contraseña"
        },
        debug: true,
        errorElement: "label",
        submitHandler: function(form) {
            var form = $("#loginform");
            var data = new FormData(form.get(0));
            $.ajax({
                url: 'register/create',
                type: 'post',
                dataType: 'json',
                contentType: false,
                processData: false,
                cache: false,
                data: data
            }).done(function(res) {
                if (res.status === 200) {
                    Swal.fire(
                        'Se Registro Corectamente!',
                        'Inicie Sesión!',
                        'success'
                    ).then((result) => {
                        window.location.replace("login");
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ocurrio un Error',
                        text: res.errores.message
                    })
                }
            }).fail(function(err) {
                Swal.fire({
                    icon: 'error',
                    title: 'Ocurrio un Error',
                    text: err
                })
            })
        }
    });
});