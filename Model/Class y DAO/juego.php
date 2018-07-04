<?php
  class juego
  {
    private $id_juego;
    private $nombre;
    private $id_genero;

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
        return "{$this->id_juego} {$this->nombre} {$this->id_genero}";
    }
  }
?>