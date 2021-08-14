<?php
    namespace Controllers;

    class SobreController
    {
        public function __construct($page)
        {
            $this->view = new \Views\MainView("$page");
        }

        public function executar(){
            $this->view->render(array('titulo'=>'sobre'));
        }
    }
    
?>