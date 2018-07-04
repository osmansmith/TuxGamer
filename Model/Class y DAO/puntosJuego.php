<?php
  class puntosJuego
  {
    private $id_puntoJuego;
    private $pts_primero;
    private $pts_segundo;
    private $pts_tercero;
    private $pts_top100;
    
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
        return "{$this->id_puntoTor} {$this->pts_primero} {$this->pts_segundo} {$this->pts_tercero} {$this->pts_top100}";
    }
  }
?>