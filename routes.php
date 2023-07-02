<?php

//require_once("index.php");
	//función que llama al controlador y su respectiva acción, que son pasados como parámetros
	function call($controller, $action){
		//importa el controlador desde la carpeta Controllers
		require_once('Controllers/' . $controller . '_controller.php');
		//crea el controlador
		switch($controller){
			case 'cliente':
				require_once('Models/cliente.php');
				$controller= new ClienteController();
				break; 
			case 'administrador':
				require_once('Models/administrador.php');
				$controller= new AdministradorController();
				break;
			case 'mascota':
				require_once('Models/mascota.php');
				$controller= new MascotaController();
				break; 

		}
		//llama a la acción del controlador
		$controller->{$action }();
	}
	
	//array con los controladores y sus respectivas acciones
	$controllers= array(
						'cliente'=>['login','index','delete','update','save'],
						'administrador'=>['login','indexClientes'],
						'mascota'=>['index','delete']
						);
	//verifica que el controlador enviado desde index.php esté dentro del arreglo controllers
	
		

	if (array_key_exists($controller, $controllers)) {
		//verifica que el arreglo controllers con la clave que es la variable controller del index exista la acción
		if (in_array($action, $controllers[$controller])) {
			//llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
			call($controller, $action);
		}else{
			call('cliente', 'error');
		}
	}else{// le pasa el nombre del controlador y la pagina de error
		call('cliente', 'error');
	}

?>