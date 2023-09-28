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
<link rel="stylesheet" href="../css/es.css">
    <title>Hospital - Pacientes</title>
</head>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <!-- Menú hamburguesa para pantallas chicas -->
                <a href="#" class="navbar-brand">Hospital - <span class="text-primary"> <?php echo $_SESSION['nombre']; ?></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menú de opciones -->
                <div class="collapse navbar-collapse" id="navbarS">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a href="lector.php" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                         <a href="#" class="nav-link disabled">Pacientes</a>
                        </li>
                        <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Salir</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div class="container is-fluid">
                  
<div class="col-xs-12">
  	
	<div>
		<a class="btn btn-success" href="../nuevopaciente.php">Nuevo paciente</a>

	</div>
  <br><br>
  <table class="table table-striped table-dark " id= "table_id">                   
    <thead>    
      <tr>
        <th>Nombre del paciente</th>
        <th>Edad</th>
        <th>Teléfono</th>
        <th>Médico a cargo</th>
        <th>Sala/Zona</th>
        <th>Observaciones</th>
        <th>Acciones</th>
      </tr>
    </thead>

<tbody>
			
<?php

$conexion=mysqli_connect("localhost","root","","r_user");               
$SQL="SELECT pacientes.nombrepaciente, pacientes.edad, pacientes.telefono, pacientes.nombre, pacientes.sala, pacientes.observaciones, pacientes.id FROM pacientes
";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
?>
<tr>
<td><?php echo $fila['nombrepaciente']; ?></td>
<td><?php echo $fila['edad']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['sala']; ?></td>
<td><?php echo $fila['observaciones']; ?></td>



<td>


<a class="btn btn-warning" href="editar_pacientes_admin.php?id=<?php echo $fila['id']?> ">Editar</i> </a>

<a class="btn btn-danger" href="eliminar_pacientes_admin.php?id=<?php echo $fila['id']?>">Eliminar</i></a>

</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>
	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
  crossorigin="anonymous"></script>

</html>