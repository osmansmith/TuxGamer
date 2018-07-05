<?php  
  class inicio extends Controller
  {
      
      public function __construct()
      {
          parent::__construct();
      }  

     public function inicio()
     {
      $this->view->render('inicio');
     } 
     
     public function logeado()
     {
      $this->view->render('logeado');
     } 
      

  }
?>