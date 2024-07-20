<?php

    $datos = array(
        "nombre"=>  $_POST['nombre'],
        "fechaNacimiento"=>  $_POST['fechaNacimiento'],
        "correo"=>  $_POST['correo'],
        "paterno"=>  $_POST['paterno'],
        "sexo"=>  $_POST['sexo'],
        "usuario"=>  $_POST['usuario'],
        "materno"=>   $_POST['materno'],
        "telefono"=>   $_POST['telefono'],
        "password"=>  sha1($_POST['password']),
        "idRol"=>  $_POST['idRol'],
        "ubicacion"=>   $_POST['ubicacion']
    );



    include "../../../class/Usuarios.php";
    $Usuarios = new Usuarios();

    echo $Usuarios->agregarNuevoUsuario($datos);