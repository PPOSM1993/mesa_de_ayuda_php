<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/plantilla.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top mb-5 shadow">
        <div class="container">
            <a class="navbar-brand" href="inicio.php"><i class="fa-solid fa-desktop"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dispositivos.php">Mis Dispositivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportes_soporte.php">Reportes Soprte</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">Usuarios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="asignacion.php">Asignacion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="reportes.php">Reporte</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Usuario
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesion</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>