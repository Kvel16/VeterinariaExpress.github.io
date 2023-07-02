<?php

class Administrador
{
	//atributos
	
	public $cedula;
	public $usuario;
	public $clave;
	public $correo;
	

	//constructor de la clase
	function __construct( $cedula, $usuario, $clave, $correo)
	{
		
		$this->cedula=$cedula;
		$this->usuario=$usuario;
		$this->clave=$clave;
		$this->correo=$correo;
		
	}

	//función para obtener todos los usuarios
	public static function all(){
		$listaUsuarios =[];
		$db=Db::getConnect();
		$sql=$db->query('SELECT * FROM usuarios');

		// carga en la $listaUsuarios cada registro desde la base de datos
		foreach ($sql->fetchAll() as $usuario) {
			$listaUsuarios[]= new Usuario($usuario['id'],$usuario['cedula'],$usuario['nombres'], $usuario['telefono'],$usuario['direccion'],$usuario['alias'],$usuario['email']);
		}
		return $listaUsuarios;
	}
//la función para actualizar
public static function update($usuario){
    $db=Db::getConnect();
    $update=$db->prepare('UPDATE usuarios SET cedula=:cedula, nombres=:nombres, telefono=:telefono, direccion=:direccion, alias=:alias, email=:email WHERE cedula=:cedula');
    $update->bindValue('cedula',$usuario->cedula);
    $update->bindValue('nombres',$usuario->nombres);
    $update->bindValue('telefono',$usuario->telefono);
    $update->bindValue('direccion',$usuario->direccion);
    $update->bindValue('alias',$usuario->alias);
    $update->bindValue('email',$usuario->email);
    $update->execute();
}

// la función para eliminar por el id
public static function delete($cedula){
    $db=Db::getConnect();
    $delete=$db->prepare('DELETE FROM usuarios WHERE cedula=:cedula');
    $delete->bindValue('cedula',$cedula);
    $delete->execute();
}

//la función para obtener un usuario por el id
public static function getByLogin($usuario,$clave){
    //buscar
    $db=Db::getConnect();
    $select=$db->prepare('SELECT * FROM administrador WHERE usuario=:usuario AND clave=:clave');
	$select->bindValue('usuario',$usuario);
	$select->bindValue('clave',$clave);
    $select->execute();
    //asignarlo al objeto usuario
    $administradorDb=$select->fetch();
    $administrador= new Administrador($administradorDb['cedula'],$administradorDb['usuario'],$administradorDb['clave'],$administradorDb['correo']);
    return $administrador;
}
}
?>