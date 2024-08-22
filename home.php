<?php
session_start();

// Verificar si la variable de sesión para el usuario está establecida
if (!isset($_SESSION['user_id'])) {
//     // Si no está establecida, redirigir al usuario a la página de inicio de sesión
     header("Location: index.php");
    exit(); // Asegúrate de que no se ejecute el resto del script
 }


?>
<h1>Bienvenido <?php echo ($_SESSION["nombre"]);?></h1>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles.css">
    <title>Admin Panel - Login</title>
    <!-- Incluir Bootstrap CSS desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluir Font Awesome para los iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>


<body>
<div class="container-fluid" style="margin-bottom:10px">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Opciones MAVI</h5>
          
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul>
                <li>
                    <button id="crearRegistro" type="submit" class="btn btn-outline-secondary">Crear Registro</button>
                </li>
                
            </ul>
            <ul>
                <li>
                    <button type="submit" class="btn btn-outline-warning">Actualizar Registro</button>
                </li>
            </ul>
            <ul>
                <li>
                    <button type="submit" class="btn btn-outline-success">Ver Registro</button>
                </li>
            </ul>

            <ul>
                <li>
                    <button type="submit" class="btn btn-outline-danger">Eliminar Registro</button>
                </li>
            </ul>
        </div>
      </div>
    </div>

    <div>
    <form class="form1" style="display: none;">
        <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="validationServer01">Nombre</label>
            <input type="text" class="form-control is-valid" id="nombre" placeholder="First name" >

            </div>

            <div class="col-md-4 mb-3">
            <label for="validationServer02">Apellido</label>
            <input type="text" class="form-control is-valid" id="apellido" placeholder="Last name"" required>
            </div>

            <div class="col-md-4 mb-3">
            <label for="validationServer02">Domicilio</label>
            <input type="text" class="form-control is-valid" id="domicilio" placeholder="Domicilio"  required>
            </div>

            
            <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                </div>
                <input type="text" class="form-control is-invalid" id="email" placeholder="Username" aria-describedby="inputGroupPrepend3" required>

            </div>
            </div>

            <div class="col-md-4 mb-3">
            <label for="validationServer02">Password</label>
            <input type="password" class="form-control is-valid" id="validationServer02" placeholder="Password"  required>
            </div>
        </div>
        
        <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>

  </div>
</div>


<button type="submit" class="btn btn-primary">Cerrar sesión</button>
    <!-- Incluir Bootstrap JS y dependencias desde CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <script src="./src/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
</body>
</html>



