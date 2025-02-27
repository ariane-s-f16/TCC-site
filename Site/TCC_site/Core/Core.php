<?php
    class Core
    {
        public function start($urlGet)
        {
            if(isset($urlGEt['pagina']) )
            { 
                $controller= ucfirst($urlGEt['pagina'].'Controller');

                $acao = 'index';

            }else 
            {
                $controller= 'Homecontroles';
            }
          

           if(! class_exists($controller))
           {
            $controller= 'Errocontroles';
           }
           call_user_func_array(array(new $controller, $acao), array());


          
        }
    }
?>