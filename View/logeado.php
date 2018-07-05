<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URL?>View/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL?>View/css/estilo.css">
    
    <title>TuxGamer</title>

    <style>
    body,html{
      overflow:hidden;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex">
            <!-- <div class="col-3 text-center">
            <img src="View/img/tuxlogo.png" style="max-width: 110px; max-height: 250px" />
            </div> -->
            <div class="col-12 px-0 text-right">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="<?php echo URL?>inicio/inicio"><img src="<?php echo URL?>View/img/tuxlogo.png" style="max-width: 110px; max-height: 250px" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active mx-2">
              <a class="nav-link" href="#">Torneos</a>
            </li>
            <li class="nav-item active mx-2">
              <a class="nav-link" href="#">Jugadores</a>
            </li>
            <li class="nav-item active mx-2">
              <a class="nav-link" href="#">Status</a>
            </li>
            <li class="nav-item active mx-2">
              <a class="nav-link" href="#">Comunidad</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item active mx-2">
              <a class="nav-link" href="" class="btn btn-primary" data-toggle="modal" data-target="#registrarse">Registrarse</a>
            </li> -->
            
            <li class="nav-item active mx-2">
              <a class="nav-link" href="" class="btn btn-primary" data-toggle="modal" data-target="#inicioSesion">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
            </div>
        </div>
    </div>
    <article class="contenido">
     <div class="container">
      <div class="row">
      
        <div class="col-12 col-sm-3">
          <img src="<?php echo URL?>View/img/user.jpg" alt="usuario" class="img-fluid">
        </div>
        <div class="col-12 col-sm-9">
            <h1 class="display-3 my-3 text-center">Bienvenido a Tux<strong style="color:orange;">Gamer</strong></h1>
          <hr class="my-4">
          <h3 class="h3">Datos Personales</h3>
          <hr class="my-4">
            <form class="my-4">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de Usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Usuario">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese Contraseña">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Ingrese Correo">
  </div>
 
  <button type="submit" class="btn btn-warning ny-4">Actualizar</button>
</form>
        </div>
      
      </div>
     
     </div>
    
    </article>
    
    
   


<footer class="bg-info" style="min-height:80px;">
<p class="text-center py-4 text-white" >TuxGamer © <?php echo date('Y');?></p>
</footer>
    <script src="<?php echo URL?>View/js/jquery.min.js"></script>
    <script src="<?php echo URL?>View/js/popper.min.js"></script>
    <script src="<?php echo URL?>View/js/bootstrap.min.js"></script>
    
</body>
</html>
