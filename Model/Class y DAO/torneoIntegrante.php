<?php
  class torneoIntegrante
  {
    private $id_torInte;
    private $id_torneo;
    private $nick;
    private $puntos_obtenidos;

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
        return "{$this->id_torInte} {$this->id_torneo} {$this->nick} {$this->puntos_obtenidos}";
    }
  }
?>