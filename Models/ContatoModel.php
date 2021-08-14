<?php
    namespace Models;
    class ContatoModel{
        public static function enviarForm($assunto, $corpo){
            $mail = new \Email('mail.franklinhenrique.com', 'franklin@franklinhenrique.com', 'franklinjudo123', 'Franklin');
            $mail->addAdress('contato@franklinhenrique.com', 'contato');
            $mail->formatarEmail(array('assunto'=>$assunto, 'corpo'=>$corpo));
            if($mail->enviarEmail()){
                return $_SESSION['Email'] = 'Enviado!';
            }
        }
    }
?>