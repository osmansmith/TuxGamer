<?php
  class comunidad
  {
    private $id_comunidad;
    private $nombre;
    private $maximo_integrante;
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
        return "{$this->id_comunidad} {$this->nombre} {$this->maximo_integrante} ";
    }
  }
?>