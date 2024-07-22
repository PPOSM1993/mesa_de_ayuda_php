<?php


$idUsuario = $_POST['idUsuario'];
include "../../../class/Usuarios.php";
$Usuarios = new Usuarios();

echo json_encode($Usuarios->obtenerDatosUsuario($idUsuario));