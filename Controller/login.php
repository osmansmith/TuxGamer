<?php  
  class login extends Controller
  {
      
      public function __construct()
      {
          parent::__construct();
      }  
     

     //metodo predeterminado para todas las clases
     public function inicio()
     {
      $this->view->render('inicio');
     }



     
     public function login()
     {
      $this->view->render('login');
     } 
      

  }
?>