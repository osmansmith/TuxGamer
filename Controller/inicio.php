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
      

  }
?>