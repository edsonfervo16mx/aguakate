<?php
	spl_autoload_register(function ($nombre_clase) {
		if ($nombre_clase != 'Connection') {
			include_once '../core/class/'.$nombre_clase . '.php';
    		#echo '../core/class/'.$nombre_clase. '.php';
		}else{

		}
	});
?>