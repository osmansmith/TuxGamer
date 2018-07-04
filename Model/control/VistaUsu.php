<?php
class ControlVitaUsuari //extends Controller
{
  private $session;

  public function __construct($session)
  {
  }

  public function exec()
  {
    $params = array('Usuario' => $this->session->get('Usuario'));
    $this->render(__CLASS__, $params);
  }

  public function logout()
  {
    $this->session->close();
    header('location: /php-mvc/login');
  }

}
 ?>
