$(document).ready(function() {

    $("#loginform").validate({
        event: "blur",
        rules: { 'email': "required email", 'password': "required" },
        messages: {
            'email': "Ingrese su Correo Electronico",
            'password': "Ingrese su Contraseña"
        },
        debug: true,
        errorElement: "label",
        submitHandler: function(form) {
            var form = $("#loginform");
            var data = new FormData(form.get(0));
            $.ajax({
                url: 'login/iniciar',
                type: 'post',
                dataType: 'json',
                contentType: false,
                processData: false,
                cache: false,
                data: data
            }).done(function(res) {
                console.log(res);
                if (res.status === 200) {
                    Swal.fire(
                        'Bienvenido!',
                        'Inicie Sesión!',
                        'success'
                    ).then((result) => {
                        sessionStorage.setItem('usuario', JSON.stringify(res.usuario));
                        sessionStorage.setItem('token', res.token);
                        window.location.replace("dashboard");
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