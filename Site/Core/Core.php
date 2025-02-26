<?php
    class core
    {
        public function start($urlGet)
        {
           $controller= ucfirst($urlGEt['pagina'].'Controller');

          $acao = 'index';

           if(! class_exists($controller))
           {
            $controller= 'erro';
           }
           call_user_func_array(array(new $controller, $acao), array($param_arr));


          
        }
    }
?>