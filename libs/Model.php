<?php

  class Model{   
      public $base;
      # la funcion constructora instancia un objeto de la clase Conexion 
      function __construct()
      { 
         
           $this->base = new Conexion();
      }            
  } 
?>