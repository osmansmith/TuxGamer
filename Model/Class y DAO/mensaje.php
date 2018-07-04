<?php
  class mensaje
  {
    private $id_msj;
    private $fecha;
    private $nick;
    private $nensaje;
    private $id_tema;
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
        return "{$this->id_msj} {$this->fecha} {$this->nick} {$this->nensaje} {$this->id_tema}";
    }
  }
?>