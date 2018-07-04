<?php
  require('conexion.php');
  class integranteDao
  {
    private $Elintegrante;
  	protected $conn;

    public function __construct($integrante)
    {
      $database = new Database();
      $this->conn = $database->dbConnection();
      $this->Elintegrante=$integrante;
    }

    public function runQuery($sql)
    {
      return $this->conn->prepare($sql);
    }

    public function registroIntegrante()
    {
      try
      {
        $nick = $this->Elintegrante->_get("nick");
        $contraseña = $this->Elintegrante->_get("contraseña");
        $rango_ID = $this->Elintegrante->_get("rango_ID");
        $puntos = $this->Elintegrante->_get("puntos");
        $votos_positivo = $this->Elintegrante->_get("votos_positivo");
        $votos_negativo = $this->Elintegrante->_get("votos_negativo");
        $borrador_log = 1;

        $stmt = $this->conn->prepare("INSERT INTO `integrante`(`nick`,`contrasenia`, `rango_ID`, `puntos`, `votos_positivo`, `votos_negativo`, `borrador_log`)  VALUES (:n,:c,:r,:p,:vp,:vn,:bl)");
        $stmt->bindparam(":n", $nick);
        $stmt->bindparam(":c", $contraseña);
        $stmt->bindparam(":r", $rango_ID);
        $stmt->bindparam(":p", $puntos);
        $stmt->bindparam(":vp", $votos_positivo);
        $stmt->bindparam(":vn", $votos_negativo);
        $stmt->bindparam(":bl", $borrador_log);

        $stmt->execute() or die("Capotó");
        $_SESSION['nick'] = $nick;
        return $stmt;
      }
      catch(PDOException $e)
      {
        echo $e->getMessage();
      }
    }

    public function modificaIntegrante()
    {
      try
      {
        $nick = $this->Elintegrante->_get("nick");
        $contraseña = $this->Elintegrante->_get("contraseña");
        $rango_ID = $this->Elintegrante->_get("rango_ID");
        $puntos = $this->Elintegrante->_get("puntos");
        $votos_positivo = $this->Elintegrante->_get("votos_positivo");
        $votos_negativo = $this->Elintegrante->_get("votos_negativo");

        $stmt = $this->conn->prepare("UPDATE integrante SET contraseña = :c ,rango_ID = :r,puntos = :p ,votos_positivo = :vp,votos_negativoc=:vn WHERE nick=:n AND borrador_log = 1");

        $stmt->bindparam(":n", $nick);
        $stmt->bindparam(":c", $contraseña);
        $stmt->bindparam(":r", $rango_ID);
        $stmt->bindparam(":p", $puntos);
        $stmt->bindparam(":vp", $votos_positivo);
        $stmt->bindparam(":vn", $votos_negativo);

        $stmt->execute()or die("No pude modificar");
      }
      catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
    }

    public function borrarIntegrante()
    {
      try
      {
        $nick = $this->Elintegrante->_get("nick");
        $stmt = $this->conn->prepare("UPDATE integrante SET borrador_log = 0 WHERE nick=:n");
        $stmt->bindparam(":n", $nick);
        $stmt->execute()or die("No pude modificar");
      }
      catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
    }

    public function siExiste()
    {
      try
      {
        $nick = $this->Elintegrante->_get("nick");
        $stmt = $this->conn->prepare("SELECT * FROM integrante where nick=:n");
        $stmt->bindparam(":n", $nick);
        $stmt->execute();
        $rs=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() >0)
  			{
  				return boolval(true);
  			}
  			else
  			{
  				return boolval(false);
  			}
      }
      catch(PDOException $e)
  		{
        return boolval(false);
  		}
    }
    public function iniciarSess()
    {
      try
      {
        $nick = $this->Elintegrante->_get("nick");
        $pass = $this->Elintegrante->_get("contraseña");
        $stmt = $this->conn->prepare("SELECT * FROM integrante where nick=:n AND contrasenia = :c");
        $stmt->bindparam(":n", $nick);
        $stmt->bindparam(":c", $pass);
        $stmt->execute();

  			$rs=$stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() >0)
  			{
  				return false;
  			}
  			else
  			{
  				return true;
  			}
      }
      catch(PDOException $e)
  		{
  			echo $e->getMessage();
  		}
    }

    public function getIntegrante()
    {
  		try
      {//nick,contrasenia,rango_ID,puntos,votos_positivo,votos_negativo
        
        $integrant = new integrante();
        $nick = $this->Elintegrante->_get("nick");
        $stmt = $this->conn->prepare("SELECT * FROM integrante where nick=:n AND borrador_log = 1"); 
        $stmt->bindparam(":n", $nick);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        $integrant->_set("nick",$resultado[0][0]);
        $integrant->_set("contraseña",$resultado[0][1]);
        $integrant->_set("rango_ID",$resultado[0][2]);
        $integrant->_set("puntos",$resultado[0][3]);
        $integrant->_set("votos_positivo",$resultado[0][4]);
        $integrant->_set("votos_negativo",$resultado[0][5]);
        


        if($stmt->rowCount()>0)
        {
          //$res=$stmt->FETCHALL(PDO::FETCH_CLASS, "integrante");
          return($integrant);
        }
        else
        {
          return(false);
        }
			}
      catch(PDOException $e)
      {
  			echo $e->getMessage();
  			return($e->getMessage());
      }
  	}

  }
?>
