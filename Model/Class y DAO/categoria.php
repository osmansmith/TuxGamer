<?php
  class categoria
  
  {
    private $id_categoria;
    private $nombre;
    private $id_comunidad;
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
        return "{$this->id_categoria} {$this->nombre} {$this->id_comunidad} ";
    }
  }
?>