<?php 
class AdministradorController
	{	
		public function __construct(){}

		

		public function register(){
			require_once('Views/Usuario/register.php');
		}

		//guardar
		public function save($usuario){
			Usuario::save($usuario);
			header('Location: ../index.php');
		}

		public function update($usuario){
			Usuario::update($usuario);
			header('Location: ../index.php');
		}

		public function delete($id){
			//se está de dentro del directorio Controllers y se debe salir con ../
			require_once('../Models/usuario.php');
			Usuario::delete($id);
			header('Location: ../index.php');
		}
		public function indexClientes(){
			//echo 'index desde UsuarioController';
			require_once('../Models/cliente.php');
			
			$clientes=Cliente::all();
			require_once('../Views/Cliente/index2.php');
		}
		public function error(){
			require_once('../Views/Administrador/error.php');
        } 
        public function login($usuario,$clave){
            
			$administrador=Administrador::getByLogin($usuario,$clave);
			if(empty($administrador->usuario)){
				require_once('../Views/Administrador/error.php');
			}else{
			require_once('../Views/Administrador/index.php');
			}
		}

		
	}


	//obtiene los datos del usuario desde la vista y redirecciona a UsuarioController.php
	if (isset($_POST['action'])) {
		$administradorController= new AdministradorController();
		//se añade el archivo usuario.php
		require_once('../Models/administrador.php');
		
		//se añade el archivo para la conexion
		require_once('../connection.php');

		if ($_POST['action']=='login') {
			
			$administradorController->login($_POST['usuario'],$_POST['clave']);
		}		
	}