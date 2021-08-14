<?php
    ob_start();
	session_start();
	
	$autoload = function($class){
		$class = str_replace('\\', '/', $class);
		include($class.'.php');
	};

	spl_autoload_register($autoload);

	$app = new Application();
	$app->executar();

	ob_end_flush();
?>