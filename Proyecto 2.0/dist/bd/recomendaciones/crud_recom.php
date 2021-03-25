<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudRecom{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo usuario
		public function insertar($recom){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO recomendacion values(:idt,:idprov,:idprod,:id,:nombre,:descripcion,:tipo)');
            $insert->bindValue('idt',$recom->getIdt());
            $insert->bindValue('idprov',$recom->getIdprov());
            $insert->bindValue('idprod',$recom->getIdprod());
            $insert->bindValue('id',$recom->getId());
			$insert->bindValue('nombre',$recom->getNombre());
            $insert->bindValue('descripcion',$recom->getDescripcion());
            $insert->bindValue('tipo',$recom->getTipo());
			$insert->execute();
		}
        
        public function obtenerid(){
            $db=Db::conectar();
            $select=$db->prepare('SELECT MAX(CODIGORECOMENDACION) AS CODIGORECOMENDACION FROM recomendacion');
            $select->execute();
            $producto=$select->fetch();
            $id=$producto['CODIGORECOMENDACION']+1;
            return $id;
        }
        
        public function obteneridt($id){
            $db=Db::conectar();
            $select=$db->prepare("SELECT CODIGOTIPO FROM producto WHERE CODIGOPRODUCTO='$id'");
            $select->execute();
            $producto=$select->fetch();
            $idt=$producto['CODIGOTIPO'];
            return $idt;
        }
        
        public function obteneridprov($id){
            $db=Db::conectar();
            $select=$db->prepare("SELECT CODIGOPROVINCIA FROM producto WHERE CODIGOPRODUCTO='$id'");
            $select->execute();
            $producto=$select->fetch();
            $idprov=$producto['CODIGOPROVINCIA'];
            return $idprov;
        }
        
        //-----------------------------------------------------------
        
        public function listarp(){
			$db=Db::conectar();
			$listaP=[];
			$select=$db->query('SELECT * FROM producto');
 
			foreach($select->fetchAll() as $producto){
				$myProd= new Producto();
				$myProd->setId($producto['CODIGOPRODUCTO']);
				$myProd->setNombre($producto['NOMBREPRODUCTO']);
				$listaP[]=$myProd;
			}
			return $listaP;
		}
        
        //-----------------------------------------------------------
 
		// método para mostrar todos los usuarios
		public function mostrar(){
			$db=Db::conectar();
			$listaRecoms=[];
			$select=$db->query("SELECT * FROM recomendacion r INNER JOIN provincia prov ON r.CODIGOPROVINCIA=prov.CODIGOPROVINCIA INNER JOIN tipo t ON r.CODIGOTIPO=t.CODIGOTIPO INNER JOIN producto prod ON r.CODIGOPRODUCTO=prod.CODIGOPRODUCTO");
 
			foreach($select->fetchAll() as $recom){
				$myRecom= new Recom();
				$myRecom->setIdt($recom['CODIGOTIPO']);
                $myRecom->setIdprov($recom['CODIGOPROVINCIA']);
                $myRecom->setIdprod($recom['CODIGOPRODUCTO']);
                $myRecom->setId($recom['CODIGORECOMENDACION']);
				$myRecom->setNombre($recom['NOMBRERECOMENDACION']);
                $myRecom->setDescripcion($recom['DESCRIPCIONRECOMENDACION']);
                $myRecom->setTipo($recom['TIPORECOMENDACION']);
                $myRecom->setTipop($recom['NOMBRETIPO']);
                $myRecom->setProvincia($recom['NOMBREPROVINCIA']);
                $myRecom->setProducto($recom['NOMBREPRODUCTO']);
				$listaRecoms[]=$myRecom;
			}
			return $listaRecoms;
		}

		public function mostrarF($nombre){
			$db=Db::conectar();
			$listaRecoms=[];
			$select=$db->query("SELECT * FROM recomendacion r INNER JOIN provincia prov ON r.CODIGOPROVINCIA=prov.CODIGOPROVINCIA INNER JOIN tipo t ON r.CODIGOTIPO=t.CODIGOTIPO INNER JOIN producto prod ON r.CODIGOPRODUCTO=prod.CODIGOPRODUCTO WHERE prov.NOMBREPROVINCIA='$nombre'");
 
			foreach($select->fetchAll() as $recom){
				$myRecom= new Recom();
				$myRecom->setIdt($recom['CODIGOTIPO']);
                $myRecom->setIdprov($recom['CODIGOPROVINCIA']);
                $myRecom->setIdprod($recom['CODIGOPRODUCTO']);
                $myRecom->setId($recom['TIEMPO']);
				$myRecom->setNombre($recom['NOMBRERECOMENDACION']);
                $myRecom->setDescripcion($recom['DESCRIPCIONRECOMENDACION']);
                $myRecom->setTipo($recom['TIPORECOMENDACION']);
                $myRecom->setTipop($recom['NOMBRETIPO']);
                $myRecom->setProvincia($recom['NOMBREPROVINCIA']);
                $myRecom->setProducto($recom['NOMBREPRODUCTO']);
				$listaRecoms[]=$myRecom;
			}
			return $listaRecoms;
		}
 
		// método para eliminar un usuario, recibe como parámetro el id del usaurio
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM recomendacion WHERE CODIGORECOMENDACION=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un usuario, recibe como parámetro el id del usuario
		public function obtenerRecom($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM recomendacion r INNER JOIN provincia prov ON r.CODIGOPROVINCIA=prov.CODIGOPROVINCIA INNER JOIN tipo t ON r.CODIGOTIPO=t.CODIGOTIPO INNER JOIN producto prod ON r.CODIGOPRODUCTO=prod.CODIGOPRODUCTO WHERE CODIGORECOMENDACION=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$recom=$select->fetch();
			$myRecom= new Recom();
            $myRecom->setIdt($recom['CODIGOTIPO']);
            $myRecom->setIdprov($recom['CODIGOPROVINCIA']);
            $myRecom->setIdprod($recom['CODIGOPRODUCTO']);
            $myRecom->setId($recom['CODIGORECOMENDACION']);
            $myRecom->setNombre($recom['NOMBRERECOMENDACION']);
            $myRecom->setDescripcion($recom['DESCRIPCIONRECOMENDACION']);
            $myRecom->setTipo($recom['TIPORECOMENDACION']);
            $myRecom->setTipop($recom['NOMBRETIPO']);
            $myRecom->setProvincia($recom['NOMBREPROVINCIA']);
            $myRecom->setProducto($recom['NOMBREPRODUCTO']);
			return $myRecom;
		}
 
		// método para actualizar un usuario, recibe como parámetro el usuario
		public function actualizar($recom){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE recomendacion SET NOMBRERECOMENDACION=:nombre,DESCRIPCIONRECOMENDACION=:descripcion,TIPORECOMENDACION=:tipo WHERE CODIGORECOMENDACION=:id');
			$actualizar->bindValue('id',$recom->getId());
			$actualizar->bindValue('nombre',$recom->getNombre());
            $actualizar->bindValue('descripcion',$recom->getDescripcion());
            $actualizar->bindValue('tipo',$recom->getTipo());
			$actualizar->execute();
		}
	}
?>