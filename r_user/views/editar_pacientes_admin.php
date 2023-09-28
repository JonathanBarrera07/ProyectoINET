<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

    header("Location: ../includes/login.php");
    die();
    

}





$id= $_GET['id'];
$conexion= mysqli_connect("localhost", "root", "", "r_user");
$consulta= "SELECT * FROM pacientes WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>


    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/es.css">
</head>

<body id="page-top">


<form  action="../includes/funcioneditarpacienteadmin.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Editar paciente</h3>
                            <div class="form-group">
                            <label for="nombrepaciente" class="form-label">Nombre:</label>
                            <input type="text"  id="nombrepaciente" name="nombrepaciente" class="form-control" value="<?php echo $usuario['nombrepaciente'];?>"required>
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label><br>
                                <input type="number" name="edad" id="edad" class="form-control" placeholder="" value="<?php echo $usuario['edad'];?>">
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Teléfono:</label>
                                <input type="tel"  id="telefono" name="telefono" class="form-control" value="<?php echo $usuario['telefono'];?>" required>
                                
                            </div>
                            


                            <div class="form-group">
                                <label for="nombre">Médico a cargo actual: <?php echo $usuario['nombre'];?></label><br> 
                                
                                <div id="listanombres">
                            <label>
                            <select name="nombre" id="nombre">
                            <?php
                            include('_db.php');
                            $consulta="SELECT * FROM user";
                            $ejecutar=mysqli_query($conexion, $consulta)
                            ?>

                            <?php foreach ($ejecutar as $opciones): ?>
                            <option class="form-control" value="<?php  echo $opciones['nombre']?>"><?php  echo $opciones['nombre' ]?> </option>
                            <?php endforeach ?>
                            </select></label>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="sala">Sala:</label><br>
                                <input type="text" name="sala" id="sala" class="form-control" value="<?php echo $usuario['sala'];?>" required>
                             
                            </div>
                            <div class="form-group">
                                <label for="observaciones">Observaciones:</label><br>
                                <input type="text" name="observaciones" id="observaciones" class="form-control" value="<?php echo $usuario['observaciones'];?>" required>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                            </div>

                          
                        
                           <br>

                                <div class="mb-3">
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="pacientesadmin.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>