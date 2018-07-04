<?php
  class rango
  {
    private $rango_id;
    private $nombre;
    private $ptos_negativo;
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
        return "{$this->rango_id} {$this->nombre} {$this->ptos_negativo}";
    }
  }
?>