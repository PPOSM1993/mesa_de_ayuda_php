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
      if (respuesta == 1) {
        $("#tablaUsuarioLoad").load("users/tablaUsuarios.php");
        $("#frmAgregarUsuario")[0].reset();
        Swal.fire(":D", "Agregado Correctamente!", "success");
      } else {
        Swal.fire(":(", "Error al agregar! " + respuesta, "error");
      }
    },
  });

  return false;
}

function obtenerDatosUsuario(idUsuario) {
  $.ajax({
    type: "POST",
    data: "idUsuario=" + idUsuario,
    url: "../procesos/users/crud/obtenerDatosUsuario.php",
    success: function (respuesta) {
      respuesta = jQuery.parseJSON(respuesta);
      $("#idUsuario").val(respuesta["idUsuario"]);
      $("#nombreu").val(respuesta["nombrePersona"]);
      $("#paternou").val(respuesta["paterno"]);
      $("#maternou").val(respuesta["materno"]);
      $("#fechaNacimientou").val(respuesta["fechaNacimiento"]);
      $("#correou").val(respuesta["correo"]);
      $("#usuariou").val(respuesta["nombreUsuario"]);
      $("#sexou").val(respuesta["sexo"]);
      $("#telefonou").val(respuesta["telefono"]);
      $("#idRolu").val(respuesta["idRol"]);
      $("#ubicacionu").val(respuesta["ubicacion"]);
    },
  });
}
