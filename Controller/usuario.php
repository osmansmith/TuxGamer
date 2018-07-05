<?php  
  class usuario extends Controller
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



     // registrar
     public function registro()
     {
        try{
        if(  $_POST['usuario'] <> '' && $_POST['pass'] <> '' && $_POST['correo'] <> '')
        {
            $datos = [   
                'usuario' => $_POST['usuario'],
                'pass' => $_POST['pass'],
                'correo' => $_POST['correo']
               
            ];          
                                              
           $this->model->registrar($datos); 
            
        }else{
             $jsondata['error'] = 'los datos son incompatibles o no se enviaron bien.';
			       echo json_encode($jsondata);
        }
       }
       catch (Exception $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
     }
      

  }
?>