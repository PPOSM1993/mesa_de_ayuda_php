$(document).ready(function () {
  $("#tablaUsuarioLoad").load("users/tablaUsuarios.php");
});

function agregarNuevoUsuario() {

  $.ajax({
    type: "POST",
    data: $("#frmAgregarUsuario").serialize(),
    url: "../procesos/users/crud/agregarNuevoUsuario.php",
    success: function (respuesta) {
      respuesta = respuesta.trim();
      if(respuesta == 1) {
        $("#tablaUsuarioLoad").load("users/tablaUsuarios.php");
        $("#frmAgregarUsuario")[0].reset();
        Swal.fire(":D", "Agregado Correctamente!", "success");
      } else {
        Swal.fire(":(", "Error al agregar! " +  respuesta, "error")
      }
    }
  });

  return false;
}