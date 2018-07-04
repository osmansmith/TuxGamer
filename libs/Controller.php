<?php

  class Controller{
      
      // la funcion construct() mostrara automaticamente lo que tenga 
      function __Construct()
      {
          // se llama al metodo estatico para iniciar variables de sesion
          Session::init();
          // creo un objeto de la clase View
          $this->view = new View();
          // se carga el metodo loadmodel de la clase controller
          $this->loadModel();
          
      }
      
      function loadModel()
      {
          
         $model = get_class( $this ).'Model';
          
          $path = 'Models/'.$model.'.php';
          
              if(file_exists($path))
              {
                  // me carga la clase del modelo
                  require_once $path;
                  // se crea un objeto de la clase que se cargue 
                  $this->model = new $model();
              }
          
       }
      
      
      
  }




?>