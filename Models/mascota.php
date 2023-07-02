<?php

class Mascota
{
	//atributos
	
	public $id;
	public $nombre;
	public $genero;
    public $raza;
    public $tipo;
    public $dueno;
	

	//constructor de la clase
	function __construct( $id, $nombre, $genero, $raza, $tipo, $dueno)
	{
		
		$this->id=$id;
		$this->nombre=$nombre;
		$this->genero=$genero;
        $this->raza=$raza;
        $this->tipo=$tipo;
        $this->dueno=$dueno;
		
	}

	//función para obtener todas las mascotas
	public static function all(){
		$listaMascotas =[];
		$db=Db::getConnect();
		$sql=$db->query('SELECT * FROM mascota');

		// carga en la $listaUsuarios cada registro desde la base de datos
		foreach ($sql->fetchAll() as $mascota) {
			$listaMascotas[]= new Mascota($mascota['id'],$mascota['nombre'],$mascota['genero'], $mascota['raza'],$mascota['tipo'],$mascota['dueno']);
		}
		return $listaMascotas;
	}

//la función para actualizar
public static function update($mascota){
    $db=Db::getConnect();
    $update=$db->prepare('UPDATE mascota SET id=:id, nombre=:nombre, genero=:genero, raza=:raza, tipo=:tipo, dueno=:dueno WHERE id=:id');
    $update->bindValue('id',$mascota->id);
    $update->bindValue('nombre',$mascota->nombre);
    $update->bindValue('genero',$mascota->genero);
    $update->bindValue('raza',$mascota->raza);
    $update->bindValue('tipo',$mascota->tipo);
    $update->bindValue('dueno',$usuario->dueno);
    $update->execute();
}
public static function getByDueno($dueno){
		//buscar
		$db=Db::getConnect();
		$select=$db->prepare('SELECT m.id,m.nombre,m.genero,m.raza,m.tipo,m.dueno FROM mascota m,cliente c WHERE m.dueno=c.cedula AND m.dueno=:dueno');
		$select->bindValue('dueno',$dueno);
		$select->execute();
		foreach ($select->fetchAll() as $mascotaDb) {
		//asignarlo al objeto usuario
		$listaMascotas[]= new Mascota($mascotaDb['id'],$mascotaDb['nombre'],$mascotaDb['genero'],$mascotaDb['raza'],$mascotaDb['tipo'],$mascotaDb['dueno']);
		}return $listaMascotas;
	}
// la función para eliminar por el id
public static function delete($dueno){
    $db=Db::getConnect();
    $delete=$db->prepare('DELETE FROM mascota WHERE dueno=:dueno');
    $delete->bindValue('dueno',$dueno);
    $delete->execute();
}


}
?>