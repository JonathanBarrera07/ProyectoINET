

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital - Login</title>
    <link rel="stylesheet" href="../css/login.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	

</head>

<body>
<form action="_functions.php" method="POST">
        <h1 class="title">Login - Hospital</h1>
      
           
            <label for="correo"> 
                <i class="fa-solid fa-user"></i>
                Usuario:
                <br>
                <input type="text" name="nombre"  id="nombre" class="form-control" required>
            </label>
                                
            <label for="password">
                <i class="fa-solid fa-lock"></i>
                Contraseña:
                <br>
                <input type="password" name="password"  id="password" class="form-control" required>
                <input type="hidden" name="accion" value="acceso_user">
             </label>
        <input type="submit" value="Ingresar" class="btn btn-success" >  
    </form>
    
</body>
</html>