$(document).ready(function() {

    /**
     * Crear Ciudad
     */
    $("#crearCiudadform").validate({
        event: "blur",
        rules: { 'name': "required", 'pais_id': "required" },
        messages: {
            'name': "Ingrese el nombre de la Ciudad",
            'pais_id': "Seleccione un Pais"
        },
        debug: true,
        errorElement: "label",
        submitHandler: function(form) {
            var form = $("#crearCiudadform");
            var data = new FormData(form.get(0));
            var nombre = $('#name').val();
            // console.log(data);
            const token = sessionStorage.getItem('token');
            const url = $("#url").val() + 'ciudad/create?token=' + token;

            $.ajax({
                url: url,
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
                        nombre,
                        'Ciudad Creada Correctamente!',
                        'success'
                    ).then((result) => {
                        document.getElementById('crearCiudadform').reset();
                    })
                } else {
                    console.log('error code');
                }
            }).fail(function(err) {
                console.log(err);
            })
        }
    });

    /**
     * Actualizar un Usuario
     */
    $("#editarPaisform").validate({
        event: "blur",
        rules: { 'name': "required" },
        messages: {
            'name': "Ingrese el nombre del Pais"
        },
        debug: true,
        errorElement: "label",
        submitHandler: function(form) {
            var form = $("#editarPaisform");
            var data = new FormData(form.get(0));
            var nombre = $('#name').val();
            var number = $('#pais_id').val();

            // console.log(data);
            const token = sessionStorage.getItem('token');
            const url = $("#url").val() + 'pais/update?id=' + number + '&token=' + token;
            console.log(url);
            $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
                contentType: false,
                processData: false,
                cache: false,
                data: data
            }).done(function(res) {
                console.log(res);
                if (res.status === 200) {
                    location.reload();
                } else {
                    console.log('error code');
                }
            }).fail(function(err) {
                console.log(err);
            })
        }
    });
});

/**
 * Obtener un Usuario
 */
function myFunction(number) {
    const token = sessionStorage.getItem('token');
    const url = $("#url").val() + 'pais/one?id=' + number + '&token=' + token;
    $.ajax({
        url: url,
        type: 'get',
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        data: []
    }).done(function(res) {
        if (res.status === 200) {
            $('#nameEditar').val(res.pais.name);
            $('#descriptionEditar').val(res.pais.description);
            $('#pais_id').val(number);
        } else {
            console.log('error code');
        }
    }).fail(function(err) {
        console.log(err);
    })
}

/**
 * Eliminar un Pais
 */
function deletePais(number) {
    Swal.fire({
        title: 'Está seguro que desea eliminar el pais ?',
        text: "No podrá recuperar los datos!",
        type: 'warning',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminarlo!',
        cancelButtonText: 'Cancelar',
        html: `<div class="lbl-id-oculto">${$(this).parent().siblings(".td-id").text().trim()}</div>`
    }).then((eliminar) => {
        if (eliminar.value === true) {
            const token = sessionStorage.getItem('token');
            const url = $("#url").val() + 'pais/delete?id=' + number + '&token=' + token;
            $.ajax({
                url: url,
                type: 'delete',
                dataType: 'json',
                contentType: false,
                processData: false,
                cache: false,
                data: []
            }).done(function(res) {
                if (res.status === 200) {
                    location.reload();
                } else {
                    console.log('error code');
                }
            }).fail(function(err) {
                console.log(err);
            })
        }
    });
}