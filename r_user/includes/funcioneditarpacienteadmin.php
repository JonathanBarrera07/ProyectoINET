<?php
   
require_once ("_db.php");




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_user';
            acceso_user();
            break;


		}

	}

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","r_user");
		extract($_POST);
		$consulta="UPDATE pacientes SET nombrepaciente = '$nombrepaciente', edad = '$edad', telefono = '$telefono', nombre = '$nombre',	sala ='$sala', 
        observaciones = '$observaciones' WHERE id = '$id' ";

		mysqli_query($conexion, $consulta);


		header('Location: ../views/pacientesadmin.php');
}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM pacientes WHERE id= $id";

    mysqli_query($conexion, $consulta);


    header('Location: ../views/pacientesadmin.php');

}