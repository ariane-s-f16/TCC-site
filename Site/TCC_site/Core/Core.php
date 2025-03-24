<?php
    class Core
    {
        public function start($urlGet)
        {
            if (isset($urlGet['metodo'])) {
				$acao = $urlGet['metodo'];
			} else {
				$acao = 'index';
			}

            if(isset($urlGet['pagina']) )
            { 
                $controller= ucfirst($urlGet['pagina'].'Controller');

                $acao = 'index';

            }else 
            {
                $controller= 'Homecontroles';
            }
          

           if(! class_exists($controller))
           {
            $controller= 'Errorcontroles';
           }

           if (isset($urlGet['id']) && $urlGet['id'] != null) 
            {
            $id = $urlGet['id'];
            } else
             {
                $id = null;
             }

           call_user_func_array(array(new $controller, $acao), array( $id));


          
        }
    }
?>