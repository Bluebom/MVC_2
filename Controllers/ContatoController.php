<?php
    namespace Controllers;

    class ContatoController extends Controller
    {

        public function __construct($page)
        {
            $this->view = new \Views\MainView("$page");
        }

        public function executar(){
            if(isset($_POST['acao'])){
                \Models\ContatoModel::enviarForm($_POST['nome'], $_POST['mensagem']);
                if(isset($_SESSION['Email']) and $_SESSION['Email'] == 'Enviado!'){
                    $_SESSION['Email'] = '';
                    echo 'cheguei aqui';
                    header('Location:'.PATH_TO_ROOT.'contato/sucesso');
                    exit;
                }            
            }

            \Router::rota('contato', function (){
                $this->view->render(array('titulo'=>'contato'));
            });

            \Router::rota('contato/sucesso', function (){
                $this->view = new \Views\MainView('sucesso');
                $this->view->render(array('titulo'=>'Contato'));
            });
        }
    }
?>