<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudProducto{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo tipo
		public function insertar($producto){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO producto values(:idtipo, :idprovincia,:id,:nombre,:nombrec,:descripcion)');
            $insert->bindValue('idtipo',$producto->getIdtipo());
            $insert->bindValue('idprovincia',$producto->getIdprovincia());
            $insert->bindValue('id',$producto->getId());
			$insert->bindValue('nombre',$producto->getNombre());
            $insert->bindValue('nombrec',$producto->getNombrec());
			$insert->bindValue('descripcion',$producto->getDescripcion());
			$insert->execute();
		}
        
        public function listarp(){
			$db=Db::conectar();
			$listaP=[];
			$select=$db->query('SELECT * FROM provincia');
 
			foreach($select->fetchAll() as $provincia){
				$myProv= new Provincia();
				$myProv->setId($provincia['CODIGOPROVINCIA']);
				$myProv->setNombre($provincia['NOMBREPROVINCIA']);
				$listaP[]=$myProv;
			}
			return $listaP;
		}
        
        public function listart(){
			$db=Db::conectar();
			$listaTipos=[];
			$select=$db->query('SELECT * FROM tipo ORDER BY CODIGOTIPO ASC');
 
			foreach($select->fetchAll() as $tipo){
				$myTipo= new Tipo();
				$myTipo->setId($tipo['CODIGOTIPO']);
				$myTipo->setNombre($tipo['NOMBRETIPO']);
				$listaTipos[]=$myTipo;
			}
			return $listaTipos;
		}
 
		// método para mostrar todos los tipos
		public function mostrar(){
			$db=Db::conectar();
			$listaProductos=[];
			$select=$db->query('SELECT * FROM producto p INNER JOIN provincia pro ON p.CODIGOPROVINCIA=pro.CODIGOPROVINCIA INNER JOIN tipo t ON p.CODIGOTIPO=t.CODIGOTIPO');
 
			foreach($select->fetchAll() as $producto){
				$myProducto= new Producto();
                $myProducto->setIdtipo($producto['CODIGOTIPO']);
                $myProducto->setIdprovincia($producto['CODIGOPROVINCIA']);
				$myProducto->setId($producto['CODIGOPRODUCTO']);
				$myProducto->setNombre($producto['NOMBREPRODUCTO']);
                $myProducto->setNombrec($producto['NOMBRECIENTIFICO']);
				$myProducto->setDescripcion($producto['DESCRIPCIONPRODUCTO']);
                $myProducto->setTipo($producto['NOMBRETIPO']);
                $myProducto->setProvincia($producto['NOMBREPROVINCIA']);
				$listaProductos[]=$myProducto;
			}
			return $listaProductos;
		}
 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM producto WHERE CODIGOPRODUCTO=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerProducto($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM producto p INNER JOIN provincia pro ON p.CODIGOPROVINCIA=pro.CODIGOPROVINCIA INNER JOIN tipo t ON p.CODIGOTIPO=t.CODIGOTIPO WHERE p.CODIGOPRODUCTO=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$producto=$select->fetch();
			$myProducto= new Producto();
			$myProducto->setIdtipo($producto['CODIGOTIPO']);
            $myProducto->setIdprovincia($producto['CODIGOPROVINCIA']);
            $myProducto->setId($producto['CODIGOPRODUCTO']);
            $myProducto->setNombre($producto['NOMBREPRODUCTO']);
            $myProducto->setNombrec($producto['NOMBRECIENTIFICO']);
            $myProducto->setDescripcion($producto['DESCRIPCIONPRODUCTO']);
            $myProducto->setTipo($producto['NOMBRETIPO']);
            $myProducto->setProvincia($producto['NOMBREPROVINCIA']);
			return $myProducto;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($producto){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE producto SET NOMBREPRODUCTO=:nombre,NOMBRECIENTIFICO=:nombrec,DESCRIPCIONPRODUCTO=:descripcion WHERE CODIGOPRODUCTO=:id');
			$actualizar->bindValue('id',$producto->getId());
			$actualizar->bindValue('nombre',$producto->getNombre());
            $actualizar->bindValue('nombrec',$producto->getNombrec());
			$actualizar->bindValue('descripcion',$producto->getDescripcion());
			$actualizar->execute();
		}
	}
?>