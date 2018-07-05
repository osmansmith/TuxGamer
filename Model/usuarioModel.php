<?php
class usuarioModel extends Model
{
    public $idupdate;
    function __construct()
    {
           parent::__construct();
    }

    public function acceder($nombre,$pass)
    {


        $key = 0;
        $sql = "SELECT * FROM usuario WHERE usuario_usuario = ? and pass_usuario = ? ";

        $this->base->consulta($sql,[$nombre,$pass]);

        if($arr = $this->base->extraer_registro())
        {
            session::setValue('id_user',$arr['id_usuario']);
            session::setValue('usuario',utf8_encode(ucwords($arr['usuario_usuario'])));
            session::setValue('nombre',utf8_encode(ucwords($arr['nombre_usuario'])));
            session::setValue('perfil',utf8_encode(ucwords($arr['perfil_usuario'])));
                       
              $key = 1;          
        }

        if($key == 1)
        {
           $jsondata['tipo'] = 1;
            echo json_encode($jsondata);

        }else{
            $jsondata['tipo'] = 'error';
            echo json_encode($jsondata);
        }
    }
    public function registrar($datos)
    {
     
        try { 
            $search ="SELECT * FROM integrante WHERE Nick ='".$datos['usuario']."' ";                        
            $this->base->consulta($search);
            if($archivo = $this->base->extraer_registro()){
                $jsondata['error'] = true;
                echo json_encode($jsondata);
              }else{
                $sql = "INSERT INTO integrante(Nick,Correo,Pass) VALUES('".$datos['usuario']."','".$datos['correo']."','".$datos['pass']."')";
                $this->base->consulta($sql);            
                $jsondata['espera'] = true;
                    echo json_encode($jsondata);
              }
            
           
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }

    }
   
   
    
}
?>
