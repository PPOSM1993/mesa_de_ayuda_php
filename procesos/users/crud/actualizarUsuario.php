<?php

$datos = array(
    'idUsuario' => $_POST['idUsuario'],
    'nombre' => $_POST['nombreu'],
    'fechaNacimiento' => $_POST['fechaNacimientou'],
    'correo' => $_POST['correou'],
    'paterno' => $_POST['paternou'],
    'sexo' => $_POST['sexou'],
    'usuario' => $_POST['usuariou'],
    'materno' => $_POST['maternou'],
    'telefono' => $_POST['telefonou'],
    'idRol' => $_POST['idRolu'],
    'ubicacion' => $_POST['ubicacionu']
);

include "../../../class/Usuarios.php";
$Usuarios = new Usuarios();

echo $Usuarios->actualizarUsuario($datos);