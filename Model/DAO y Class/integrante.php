<?php
  class integrante
  {
    private $nick;
    private $pass;
    private $rango_id;
    private $estado_id;
    private $puntos;
    private $valoracion_positiva;
    private $valoracion_negativa;
    public function __construct()
    {

    }

    function _get($atributo)
    {
      if (property_exists($this, $atributo))
      {
        return $this->$atributo;
      }
    }
    function _set($atributo, $valor)
    {
         $this->$atributo = $valor;
    }

    public function toString()
    {
        return "{$this->nick} {$this->pass} {$this->rango_id} {$this->rango_id} {$this->estado_id} {$this->puntos} {$this->valoracion_positiva} {$this->valoracion_negativa}";
    }
  }
?>