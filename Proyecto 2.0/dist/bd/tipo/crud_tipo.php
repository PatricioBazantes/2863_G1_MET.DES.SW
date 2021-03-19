<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudTipo{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo tipo
		public function insertar($tipo){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO tipo values(:id,:nombre,:descripcion)');
            $insert->bindValue('id',$tipo->getId());
			$insert->bindValue('nombre',$tipo->getNombre());
			$insert->bindValue('descripcion',$tipo->getDescripcion());
			$insert->execute();
		}
 
		// método para mostrar todos los tipos
		public function mostrar(){
			$db=Db::conectar();
			$listaTipos=[];
			$select=$db->query('SELECT * FROM tipo ORDER BY CODIGOTIPO ASC');
 
			foreach($select->fetchAll() as $tipo){
				$myTipo= new Tipo();
				$myTipo->setId($tipo['CODIGOTIPO']);
				$myTipo->setNombre($tipo['NOMBRETIPO']);
				$myTipo->setDescripcion($tipo['DESCRIPCIONTIPO']);
				$listaTipos[]=$myTipo;
			}
			return $listaTipos;
		}
 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM tipo WHERE CODIGOTIPO=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerTipo($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM tipo WHERE CODIGOTIPO=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$tipo=$select->fetch();
			$myTipo= new Tipo();
			$myTipo->setId($tipo['CODIGOTIPO']);
			$myTipo->setNombre($tipo['NOMBRETIPO']);
			$myTipo->setDescripcion($tipo['DESCRIPCIONTIPO']);
			return $myTipo;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($tipo){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE tipo SET NOMBRETIPO=:nombre, DESCRIPCIONTIPO=:descripcion WHERE CODIGOTIPO=:id');
			$actualizar->bindValue('id',$tipo->getId());
			$actualizar->bindValue('nombre',$tipo->getNombre());
			$actualizar->bindValue('descripcion',$tipo->getDescripcion());
			$actualizar->execute();
		}
	}
?>