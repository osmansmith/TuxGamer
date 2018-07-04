<?php  
  class login extends Controller
  {
      
      public function __construct()
      {
          parent::__construct();
      }  

     public function login()
     {
      $this->view->render('login');
     } 
      

  }
?>