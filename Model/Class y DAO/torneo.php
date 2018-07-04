<?php
  class torneo
  {
    private $id_torneo;
    private $nombre;
    private $fechaInicio;
    private $fechaTermino;
    private $id_puntoJuego;
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
        return "{$this->id_torneo} {$this->nombre} {$this->fechaInicio} {$this->fechaTermino} {$this->id_puntoJuego}";
    }
  }
?>