<?php

  class view
  {      
    # metodo render() que acepta un parametro  
    function render($view)
    {      
        # inclusion require para mostrar la pagina que se especifique en el parametro
        require './View/'.$view.'.php';
    }

    //  function renderpdf($view)
    // {
    // 	require './libs/'.$view.'.php';
    // }
                              
  }

?>