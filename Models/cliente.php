<?php
/**
* Modelo para el acceso a la base de datos y funciones CRUD
* Autor: ELivar Largo
* Sitio Web: wwww.ecodeup.com
*/
class Cliente
{
	//atributos
	
	public $cedula;
	public $nombres;
	public $telefono;
	public $direccion;
	public $usuario;
	public $clave;

	//constructor de la clase
	function __construct( $cedula, $nombres, $telefono, $direccion, $usuario, $clave)
	{
		
		$this->cedula=$cedula;
		$this->nombres=$nombres;
		$this->telefono=$telefono;
		$this->direccion=$direccion;
		$this->usuario=$usuario;
		$this->clave=$clave;
	}

	//función para obtener todos los usuarios
	public static function all(){
		$listaCliente =[];
		$db=Db::getConnect();
		$sql=$db->query('SELECT * FROM cliente');

		// carga en la $listaUsuarios cada registro desde la base de datos
		foreach ($sql->fetchAll() as $cliente) {
			$listaCliente[]= new Cliente($cliente['cedula'],$cliente['nombres'],$cliente['telefono'],$cliente['direccion'],$cliente['usuario'],$cliente['clave']);
		}
		return $listaCliente;
	}

	//la función para registrar un cliente
	public static function save($cliente){
			$db=Db::getConnect();
			$insert=$db->prepare('INSERT INTO cliente VALUES(:cedula, :nombres, :telefono, :direccion, :usuario, :clave)');
			$insert->bindValue('cedula',$cliente->cedula);
			$insert->bindValue('nombres',$cliente->nombres);
			$insert->bindValue('telefono',$cliente->telefono);
			$insert->bindValue('direccion',$cliente->direccion);
			$insert->bindValue('usuario',$cliente->usuario);
			$insert->bindValue('clave',$cliente->clave);
			//$insert->execute();
			if (!$insert->execute()) {
				return 0;
				}else{
					return 1;
				}
		}

	//la función para actualizar
	public static function update($cliente){
		$db=Db::getConnect();
		$insert=$db->prepare('UPDATE cliente SET cedula=:cedula, nombres=:nombres, telefono=:telefono, direccion=:direccion, usuario=:usuario, clave=:clave WHERE cedula=:cedula');
		    $insert->bindValue('cedula',$cliente->cedula);
			$insert->bindValue('nombres',$cliente->nombres);
			$insert->bindValue('telefono',$cliente->telefono);
			$insert->bindValue('direccion',$cliente->direccion);
			$insert->bindValue('usuario',$cliente->usuario);
			$insert->bindValue('clave',$cliente->clave);
			if (!$insert->execute()) {
				return 0;
				}else{
					return 1;
				}

	}

	// la función para eliminar por el id
	public static function delete($cedula){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE FROM cliente WHERE cedula=:cedula');
		$delete->bindValue('cedula',$cedula);
		$delete->execute();
	}

	//la función para obtener un usuario por el id
	public static function getById($cedula){
		//buscar
		
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM cliente WHERE cedula=:cedula');
		$select->bindValue('cedula',$cedula);
		$select->execute();
		//asignarlo al objeto usuario
		$clienteDb=$select->fetch();
		$cliente= new Cliente($clienteDb['cedula'],$clienteDb['nombres'],$clienteDb['telefono'],$clienteDb['direccion'],$clienteDb['usuario'],$clienteDb['clave']);
		return $cliente;
	}

	public static function getByLogin($usuario,$clave){
		//buscar
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM cliente WHERE usuario=:usuario AND clave=:clave');
		$select->bindValue('usuario',$usuario);
		$select->bindValue('clave',$clave);
		$select->execute();
		//asignarlo al objeto usuario
		$clienteDb=$select->fetch();
		$cliente= new Cliente($clienteDb['cedula'],$clienteDb['nombres'],$clienteDb['telefono'],$clienteDb['direccion'],$clienteDb['usuario'],$clienteDb['clave']);
		return $cliente;
	}
}
?>
