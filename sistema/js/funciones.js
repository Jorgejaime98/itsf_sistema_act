function crearregistrosusuarios(email, clave, estado){

    cadena = "email=" + email + "&clave=" + clave + "&estado=" + estado;
    
    $.ajax({
        type: "POST",
        url: "modelos/formulario_modelo.php",
        data:cadena,
        success: function (r) {
            if (r == 1) {
               
                alertify.success("El usuario ha sido creado con éxito.");
            }else{
                alertify.error("No se pudo crear el usuario");
            }
        }
    });
}