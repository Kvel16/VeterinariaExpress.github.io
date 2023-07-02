<?php 
	/**
	* Descripción: Controlador para la entidad usuario
	* Autor: Elivar Largo
	* Web: www.ecodeup.com
	* Fecha: 25-02-2017
	*/
	class ClienteController{	
		public function __construct(){}

		public function delete($cedula){
			//se está de dentro del directorio Controllers y se debe salir con ../
			require_once('../Models/cliente.php');
			Cliente::delete($cedula);
			$controller='administrador';
			$action='indexClientes';
			require_once('../routes.php');
			
		}
		

		public function save($cliente){
			$insert=Cliente::save($cliente);
			if($insert==1){
				echo "<script>alert(\"Datos Guardados\");</script>";
			}else{
				echo "<script>alert(\"No se pudo Guardar\");</script>";
			}
			require_once('../Views/Cliente/newregister.html');
			//guardar
		}

		public function update($cedula){
			//echo $cedula;
			$cliente=Cliente::getById($cedula);
			require_once('../Views/Cliente/update.php');
			//header('Location: ../index.php');
		}

		public function error(){
			require_once('../Views/Cliente/error.php');
		} 

		public function login($usuario,$clave){
            
			$cliente=Cliente::getByLogin($usuario,$clave);
			if(empty($cliente->usuario)){
				require_once('../Views/Cliente/error.php');
			
		}else{
			require_once('../Views/Cliente/index.php');
		}}
	}
		

	


	//obtiene los datos del usuario desde la vista y redirecciona a UsuarioController.php
	if (isset($_POST['action'])) {
		

		if ($_POST['action']=='login'  && $_POST['action']!='index') {
			$clienteController= new ClienteController();
		//se añade el archivo usuario.php
		require_once('../Models/cliente.php');
		
		//se añade el archivo para la conexion
		require_once('../connection.php');
			$clienteController->login($_POST['usuario'],$_POST['clave']);
		}else if ($_POST['action']=='update') {
			require_once('../Models/cliente.php');
			require_once('../connection.php');
			$cliente= new Cliente($_POST['cedula'],$_POST['nombres'],$_POST['telefono'],$_POST['direccion'],$_POST['usuario'],$_POST['clave']);
			$insert=Cliente::update($cliente);
			if($insert==1){
				echo "<script>alert(\"Datos Guardados\");</script>";
			}else{
				echo "<script>alert(\"No se pudo Guardar\");</script>";
			}
			require_once('../Views/Cliente/index.php');

		}else if ($_POST['action']=='register') {
			require_once('../Models/cliente.php');
			require_once('../connection.php');
			$clienteController=new 	ClienteController();
			$cliente= new Cliente($_POST['cedula'],$_POST['nombres'],$_POST['telefono'],$_POST['direccion'],$_POST['usuario'],$_POST['clave']);
			$clienteController->save($cliente);	
			//para registrar
		
	}	
	}
	
	//se verifica que action esté definida
	if (isset($_GET['action'])) {
		if ($_GET['action']=='index') {
			require_once('../Models/cliente.php');
			require_once('../connection.php');
			$clienteController=new 	ClienteController();
			$clienteController->index();
			//para eliminar
			
		}elseif($_GET['action']=='delete'){
			require_once('../Models/cliente.php');
			require_once('../connection.php');
			$clienteController=new 	ClienteController();
			$clienteController->delete($_GET['cedula']);	
			header('../Views/Administrador/index.php');
		}	
		else if ($_GET['action']=='update') {
				//echo $_GET['cedula'];
				require_once('../Models/cliente.php');
				require_once('../connection.php');
				$clienteController=new 	ClienteController();
				//$cliente= new Cliente($_POST['cedula'],$_POST['nombres'],$_POST['telefono'],$_POST['direccion'],$_POST['usuario'],$_POST['clave']);
				$clienteController->update($_GET['cedula']);	
				//para eliminar
			
		
		}
	}

	

	
?>