<?php

/**
 * constantes 
*/
define('PATH_TO_ASSETS', 'http://localhost/dashboard/mvc_2/Views/pages/assets/');
define('PATH_TO_PAGES', 'http://localhost/dashboard/mvc_2/Views/pages/');
define('PATH_TO_ROOT', 'http://localhost/dashboard/mvc_2/');

class Application
{
    public function executar(){
        $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
        $url = ucfirst($url);
        $page = strtolower($url);
        $url.="Controller";
        if(file_exists('Controllers/'.$url.'.php')){
            $className = "Controllers\\$url";
            $controler = new $className($page);
            $controler->executar();
        }else{
            $className = "Controllers\\Erro404Controller";
            $controler = new $className('Erro404');
            $controler->executar();
        }
    }
}