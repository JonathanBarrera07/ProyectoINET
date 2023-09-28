<?php
$conexion= mysqli_connect("localhost", "root", "", "r_user");

if(isset($_POST['registrar'])){

    if(strlen($_POST['nombrepaciente']) >=1 && strlen($_POST['edad'])  >=1 && strlen($_POST['telefono'])  >=1 
    && strlen($_POST['nombre'])  >=1 && strlen($_POST['sala']) >= 1 && strlen($_POST['observaciones']) >= 1 ){

    $nombrepaciente = trim($_POST['nombrepaciente']);
    $edad = trim($_POST['edad']);
    $telefono = trim($_POST['telefono']);
    $nombre = trim($_POST['nombre']);
    $sala = trim($_POST['sala']);
    $observaciones = trim($_POST['observaciones']);

    $consulta= "INSERT INTO pacientes (nombrepaciente, edad, telefono, nombre, sala, observaciones)
    VALUES ('$nombrepaciente', '$edad','$telefono','$nombre', '$sala', '$observaciones' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../views/pacientesadmin.php');
  }
}









?>