<?php
    class Router
    {
        public static function rota($path, $arg){
            $url = @$_GET['url'];
            if($url == $path){
                $arg();
                exit;
            }
            $path = explode('/', $path);
            $url = explode('/', @$_GET['url']);
            $okay = true;
            $par = [];
            if(count($path) == count($url)){
                foreach ($path as $key => $value){
                    if($value == '?'){
                        $par[$key] = $url[$key];
                    }elseif($url[$key] != $value){
                        $okay = false;
                        break;
                    }
                }
                if($okay){
                    $arg($par);
                    exit;
                }
            } 
        }        
    }
    
?>