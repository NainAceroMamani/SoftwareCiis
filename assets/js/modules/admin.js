$(document).ready(function() {
    var obj = JSON.parse(sessionStorage.getItem('usuario'));
    if (obj != null) {
        const url = $('#url').val() + 'assets/uploads/usuarios/' + obj.id + '/' + obj.imagen;
        console.log(obj);
        $('#name_usuario').html(obj.name);
        $("#imagen_usuario").attr("src", url);
    } else {
        window.location.replace("login");
        return;
    }
    const role = obj.role;
    if (role === "ADMIN_ROLE") {
        $('#mantenimiento').show();
    } else {
        if (role === "USER_ROLE" || role === "PROFESIONAL_ROLE") {
            $('#mantenimiento').hide();
        }
    }
});

function logout() {
    sessionStorage.removeItem('token');
    sessionStorage.removeItem('usuario');

    window.location.replace("login");
}