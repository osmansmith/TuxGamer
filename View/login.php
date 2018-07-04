<?php
  // require('../control/LoginControl.php');
  // $bandera = false;
  // if(isset($_POST['log']))
  // {
  //   $user = $_POST["user"];
  //   $pass = $_POST["pass"];
    
  //   $log = new login ($user,$pass);
  //   if(!$log->iniciar())
  //   {
  //     $bandera = true;
  //   }
  // }
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo URL?>View/css/login.css">
  <title>Conectarse</title>
</head>
<body>
  <div class="container">
    <div class="form_top">
      <h2>Iniciar Sesion <img src="<?php echo URL?>View/img/tuxlogo.png"></h2>
      <?php
      // if($bandera)
      // {
      //   echo '<h2>Error el el inicio de Sesion </h2>';
      // }
      
      ?>
    </div>
    <form class="form_reg" method="post" action="inicio">
      <input class="input" name="user" type="text" placeholder="&#128100;">
      <input class="input" name="pass" type="password" placeholder="&#128273;">
      <div class="btn_form">
        <input class="btn_submit" type="submit" name="log" value="Iniciar Sesion">
        <input class= "btn_rec" type="submit" value="Olvidaste tu Contraseña">
      </div>
    </form>
  </div>
</body>
</html>
