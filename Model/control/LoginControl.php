<?php
require("../DAO y Class/integrante.php");
require("../DAO y Class/integranteDao.php");
require("../Session/Session.php");


class login{
  private $nick;
  private $pass;
  public function __construct($user,$con)
  {
    $this->nick=$user;
    $this->pass=$con;
  }
  function iniciar()
  {
    if(!$this->siExiste())
    {
      $sess = new Session();
      $sess->init();
      $sess->add("Usuario",$this->nick);
      header('location: /gamer/Vista/VistaUsuario.php');

    }else
    {
      return false;
    }
  }
  function siExiste()
  {
    $integrante=new integrante();
    $integrante->_set("nick",$this->nick);
    $integrante->_set("contraseña",$this->pass);

    $integranteDAO = new integranteDao($integrante);
    return $integranteDAO->iniciarSess($this->pass);
  }
}
?>
