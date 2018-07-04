<?php
  require("Model/Formulario/Session/Session.php");
  require("Model/Formulario/DAO y Class/integrante.php");
  require("Model/Formulario/DAO y Class/integranteDAO.php");

  $integrante = new integrante();
  $Sess = new Session();
  $inte = new integranteDao($integrante);

  $Sess->init();
  $integrante->_set("nick",$Sess->get("Usuario"));
  $integrante = $inte->getIntegrante();

  echo 'nick:           '.$integrante->_get("nick").'<br>';
  echo 'contraseña:     '.$integrante->_get("contraseña").'<br>';
  echo 'rango_ID:       '.$integrante->_get("rango_ID").'<br>';
  echo 'puntos:         '.$integrante->_get("puntos").'<br>';
  echo 'votos_positivo: '.$integrante->_get("votos_positivo").'<br>';
  echo 'votos_positivo: '.$integrante->_get("votos_positivo").'<br>';

  if(isset($_POST['cerrar']) || $Sess->get("Usuario")==null)
  {
    $Sess->close();
    header('location: /gamer/Vista/inicio.html');
  }
 ?>
<html>
  <head>
  </head>
  <body>
    <form class="form_reg" method="post"  action="VistaUsuario.php">
      <input class="btn_submit" name="cerrar" type="submit" value="Cerrar sesión">
  </body>
</html>
