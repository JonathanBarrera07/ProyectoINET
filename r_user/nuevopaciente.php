<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

    header("Location: ./includes/login.php");
    die();
    
    

}



?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

	<link rel="stylesheet" href="./css/es.css">
</head>

<body id="page-top">


<form  action="./includes/validarpacienteadmin.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br>
                            <br>
                            <h3 class="text-center">Registro de nuevo paciente</h3>
                            <div class="form-group">
                            <label for="nombrepaciente" class="form-label">Nombre *</label>
                            <input type="text"  id="nombrepaciente" name="nombrepaciente" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad *</label><br>
                                <input type="number" name="edad" id="edad" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Telefono *</label>
                                <input type="tel"  id="telefono" name="telefono" class="form-control" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="nombre">Médico a cargo *</label><br>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sala">Sala *</label><br>
                                <input type="text" name="sala" id="sala" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="observaciones">Observaciones *</label><br>
                                <input type="text" name="observaciones" id="observaciones" class="form-control" required>
                            </div>
                            
                           
                      
                        
                           <br>

                                <div class="mb-3">
                                    
                               <input type="submit" value="Guardar"class="btn btn-success" 
                               name="registrar">
                               <a href="./views/pacientesadmin.php" class="btn btn-danger">Cancelar</a>
                               
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