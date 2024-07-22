<?php
include "header.php";

if (
    isset($_SESSION['usuario']) &&
    $_SESSION['usuario']['id'] == 1 || $_SESSION['usuario']['rol'] == 2
) {

    ?>
    <!-- Page Content -->
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="fw-light">Usuarios</h1>
            <br>
            <p class="lead">
                <button class="btn btn-success btn-xl" data-toggle="modal" data-target="#modalAgregarUsuarios">
                    <i class="fa-solid fa-user-plus"></i> Agregar Usuario
                </button>
                <br>
                <br>
            <div id="tablaUsuarioLoad">
            </div>


            </p>
        </div>
    </div>


    <?php
    include "users/modalAgregar.php";
    include "users/modalActualizar.php";
    include "footer.php";
    ?>
    <script src="../public/js/user/usuarios.js"></script>
    <?php
} else {
    header("location:../index.html");
}
?>