<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

  header("Location: ../includes/login.php");
  die();
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/es.css">
    <title>Hospital - Inicio</title>
</head>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <!-- Menú hamburguesa para pantallas chicas -->
                <a href="#" class="navbar-brand">Hospital - <span class="text-primary">[Genérico] <?php echo $_SESSION['nombre']; ?></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menú de opciones -->
                <div class="collapse navbar-collapse" id="navbarS">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                         <a href="#" class="nav-link disabled">Inicio</a>
                        </li>
                        <li class="nav-item">
                         <a href="pacientesgenerico.php" class="nav-link">Pacientes</a>
                        </li>
                        <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Salir</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div class="container is-fluid">
<div class="center-container">
       <a href="https://www.alerthor.com/pagLogin" target="_blank" ><button class="emergency-button">Código Azul - Emergencia</button></a>
    </div><br><br>
	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
  crossorigin="anonymous"></script>

</html>