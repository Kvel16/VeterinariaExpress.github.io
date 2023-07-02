<?php 
class MascotaController
	{	
		public function __construct(){}

		//guardar
		public function save($mascota){
			Usuario::save($mascota);
			header('Location: ../index.php');
		}

		public function update($mascota){
			Usuario::update($mascota);
			header('Location: ../index.php');
		}

		public function delete($dueno){
			require_once('../Models/mascota.php');
			Usuario::delete($dueno);
		
		}
		public function index($dueno){
            
			$mascotas=Mascota::getByDueno($dueno);
			if(empty($mascotas)){
				require_once('../Views/Mascota/error.php');
			
		}else{
			require_once('../Views/Mascota/index.php');
		}}

		public function error(){
			require_once('Views/Mascota/error.php');
        } 
        
		
	}
if (isset($_GET['action'])) {
		if ($_GET['action']=='index') {
			require_once('../Models/mascota.php');
			require_once('../connection.php');
			$mascotaController=new 	MascotaController();
			$mascotaController->index($_GET['dueno']);
			
			
		}	
	}

	