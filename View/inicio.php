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
      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
      }
      .form-signin .checkbox {
        font-weight: 400;
      }
      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
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
          
          </ul>
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active mx-2">
              <a class="nav-link" href="" class="btn btn-primary" data-toggle="modal" data-target="#registrarse">Registrarse</a>
            </li>
            
            <li class="nav-item active mx-2">
              <a class="nav-link" href="" class="btn btn-primary" data-toggle="modal" data-target="#inicioSesion">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
            </div>
        </div>
    </div>
    
    <article class="portada">               
      <div class="container-fluid m-0 p-0">
      <img src="<?php echo URL?>View/img/portada2.jpg" class="img-fluid mx-auto d-block w-100 px-0"/>
      </div>
      <div class="container">
         <div class="row d-flex center">
           <div class="col-9 col-sm-6 col-md-6 col-lg-6" style="margin-top:-35%">  
            <div class="px-4 py-4" style="background-color: rgba(0, 0, 0, 0.5);">
            <h2 class="h2 text-white-50 mb-4">Vence a tu rival y se el mejor.</h2>
            <p class="h4 text-info">Se parte de una gran experiencia</p>
            <p class="lead text-white mb-4">Compite y proclamate como el campeon indiscutible.</p>
            <button type="button" class="btn btn-info btn-lg mr-4">Busca torneos abiertos</button>
            <button type="button" class="btn btn-light btn-lg">Crea torneos</button>
            </div>                      
          </div>          
        </div>        
      </div>
    </article>
    
   

<!-- Modal Inicio de Sesión-->
<div class="modal fade" id="inicioSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalCenterTitle">Inicio de Sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="display: -ms-flexbox; display: flex; -ms-flex-align: center; align-items: center;">
        <form class="form-signin text-center">
        <img class="mx-auto img-fluid " src="<?php echo URL?>View/img/tuxlogo.png" >        
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="email" id="inputEmail" class="form-control my-2" placeholder="Usuario" required autofocus>
        
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        
        <button class="btn btn-lg btn-info btn-block" type="submit">Ingresar</button>
        
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>
<!-- Modal Registrarse-->
<div class="modal fade" id="registrarse" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalCenterTitle">Crear una Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="display: -ms-flexbox; display: flex; -ms-flex-align: center; align-items: center;">
        <div class="form-signin text-center">
        <img class="mx-auto img-fluid " src="<?php echo URL?>View/img/tuxlogo.png" >  

        <label for="RegUsuario" class="sr-only">Usuario</label>
        <input type="text" id="RegUsuario" class="form-control mb-2" placeholder="Usuario" required autofocus>
        
        <label for="RegCorreo" class="sr-only">Correo</label>
        <input type="email" id="RegCorreo" class="form-control mb-2" placeholder="Correo" required>

        <label for="RegContra" class="sr-only">Contraseña</label>
        <input type="password" id="RegContra" class="form-control" placeholder="Contraseña" required>

        
        <button class="btn btn-lg btn-info btn-block" id="RegBtn" type="submit">Registrar</button>
        
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>        
      </div>
    </div>
  </div>
</div>
<footer class="bg-info" style="min-height:80px;">
<p class="text-center py-4 text-white" >TuxGamer © <?php echo date('Y');?></p>
</footer>
    <script src="<?php echo URL?>View/js/jquery.min.js"></script>
    <script src="<?php echo URL?>View/js/popper.min.js"></script>
    <script src="<?php echo URL?>View/js/bootstrap.min.js"></script>
    <script>
     $("#RegBtn").click(function(){
       var usuario = $("#RegUsuario").val();
       var pass = $("#RegContra").val();
       var correo = $("#RegCorreo").val();               
        var datos = {
        'usuario' : usuario,
        'pass' : pass,
        'correo' : correo
               };
        // alert(usuario+" "+pass+" "+correo);
        $.ajax({
           url : "<?php echo URL?>usuario/registro",
           data : datos,
           type : 'POST',
           dataType : 'json',
           success: function(data){
            $("#RegUsuario").val('');
            $("#RegContra").val('');
            $("#RegCorreo").val('');
             
              if(data.espera)
              {
                alert('Datos ingresados, en 24 hrs recibira un mensaje al correo, para saber si es un usuario activo o si debe estar en lista de espera, saludos');
              }
              if(data.error)
              {
                alert('El usuario ya existe, o usuario en espera.');
              }

           }

        });      

       return false;
     });
    </script>
</body>
</html>
