
<?php
require("../DAO y Class/integrante.php");
require("../DAO y Class/integranteDao.php");



class registro
{
  private $nick;
  private $pass;
  public function __construct($user,$con)
  {
    $this->nick=$user;
    $this->pass=$con;
  }

  function registrar()
  {
    if($this->siExistes()&&$this->nick!=""&&$this->pass!="")
    {
      return (true);
    }
    else
    {
      $this->registro();
      return (false);
    }
  }
  private function registro()
  {
    $integrante=new integrante();

    $integrante->_set("nick",$this->nick);
    $integrante->_set("contraseña",$this->pass);
    $integrante->_set("rango_ID",1);
    $integrante->_set("puntos",0);
    $integrante->_set("votos_positivo",0);
    $integrante->_set("votos_negativo",0);

    $integranteDAO = new integranteDao($integrante);
    return $integranteDAO->registroIntegrante();
  }
  function siExistes()
  {
    $integrante=new integrante();
    $integrante->_set("nick",$this->nick);
    $integranteDAO = new integranteDao($integrante);
    return $integranteDAO->siExiste();
  }
}
?>