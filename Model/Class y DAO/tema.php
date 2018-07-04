<?php
  class tema
  {
    private $id_tema;
    private $nombre;
    private $id_categotia;
    private $fecha_creacion;
    private $nick;
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
        return "{$this->id_tema} {$this->nombre} {$this->id_categotia} {$this->fecha_creacion} {$this->nick}";
    }
  }
?>