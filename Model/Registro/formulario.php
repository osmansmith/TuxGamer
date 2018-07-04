
<?php
  require('../control/RegistroControl.php');
  $bandera = false;
  if(isset($_POST['boton']))
  {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $regis = new registro ($user,$pass);
    if(!$regis->registrar())
    {
      header('location: /gamer/Vista/inicio.html');
    }
    else
    {
      $bandera = true;
    }
  }
?>



<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/estilos.css">
  <title>Formulario</title>
</head>
<body>
  <div class="container">
    <div class="form_top">
      <h2>Formulario <img src="../img/tuxicono.png"></h2>

      <?php
      if($bandera)
      {
        echo '<h2>Este Nick ya esta en uso</h2>';
      }
      ?>

    </div>
    <form class="form_reg" method="post" action="formulario.php">
      <input class="input" type="text" name="user" placeholder="&#128100;">
      <input class="input" type="password" name="pass" placeholder="&#128273;">
      <!--<input class="input" type="email" placeholder="	&#128231;">
      <input class="input" type="tel" placeholder="&#128241;">
      <input class="input" type="text" placeholder="&#8962;">-->
      <div class="btn_form">
        <input class="btn_submit"name = "boton" type="submit" value="Registrar">
      </div>
    </form>
  </div>
</body>
</html>
