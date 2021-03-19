<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudUsuario{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo usuario
		public function insertar($usuario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO usuario values(:id,:usuario,:nombre,:apellido,:correo,:clave,:tipo,:direccion)');
            $insert->bindValue('id',$usuario->getId());
            $insert->bindValue('usuario',$usuario->getUsuario());
			$insert->bindValue('nombre',$usuario->getNombre());
            $insert->bindValue('apellido',$usuario->getApellido());
            $insert->bindValue('correo',$usuario->getCorreo());
            $insert->bindValue('clave',$usuario->getClave());
            $insert->bindValue('tipo',$usuario->getTipo());
			$insert->bindValue('direccion',$usuario->getDireccion());
			$insert->execute();
		}
        
        public function obtenerid(){
            $db=Db::conectar();
            $select=$db->prepare('SELECT MAX(CODIGOUSUARIO) AS CODIGOUSUARIO FROM usuario');
            $select->execute();
            $usuario=$select->fetch();
            $id=$usuario['CODIGOUSUARIO']+1;
            return $id;
        }
 
		// método para mostrar todos los usuarios
		public function mostrar(){
			$db=Db::conectar();
			$listaUsuarios=[];
            $tipoc='Usuario';
			$select=$db->query("SELECT * FROM usuario WHERE tipo='$tipoc'");
 
			foreach($select->fetchAll() as $usuario){
				$myUsuario= new Usuario();
				$myUsuario->setId($usuario['CODIGOUSUARIO']);
				$myUsuario->setUsuario($usuario['NOMBREUSUARIO']);
				$myUsuario->setNombre($usuario['NOMBRES']);
                $myUsuario->setApellido($usuario['APELLIDOS']);
                $myUsuario->setCorreo($usuario['CORREO']);
                $myUsuario->setClave($usuario['CLAVE']);
                $myUsuario->setTipo($usuario['TIPO']);
                $myUsuario->setDireccion($usuario['DIRECCION']);
				$listaUsuarios[]=$myUsuario;
			}
			return $listaUsuarios;
		}
 
		// método para eliminar un usuario, recibe como parámetro el id del usaurio
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM usuario WHERE CODIGOUSUARIO=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un usuario, recibe como parámetro el id del usuario
		public function obtenerUsuario($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuario WHERE CODIGOUSUARIO=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$usuario=$select->fetch();
			$myUsuario= new Usuario();
            $myUsuario->setId($usuario['CODIGOUSUARIO']);
            $myUsuario->setUsuario($usuario['NOMBREUSUARIO']);
            $myUsuario->setNombre($usuario['NOMBRES']);
            $myUsuario->setApellido($usuario['APELLIDOS']);
            $myUsuario->setCorreo($usuario['CORREO']);
            $myUsuario->setClave($usuario['CLAVE']);
            $myUsuario->setTipo($usuario['TIPO']);
            $myUsuario->setDireccion($usuario['DIRECCION']);
			return $myUsuario;
		}
 
		// método para actualizar un usuario, recibe como parámetro el usuario
		public function actualizar($usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE usuario SET NOMBRES=:nombre,APELLIDOS=:apellido,CORREO=:correo,CLAVE=:clave,DIRECCION=:direccion WHERE CODIGOUSUARIO=:id');
			$actualizar->bindValue('id',$usuario->getId());
			$actualizar->bindValue('nombre',$usuario->getNombre());
			$actualizar->bindValue('apellido',$usuario->getApellido());
            $actualizar->bindValue('correo',$usuario->getCorreo());
            $actualizar->bindValue('clave',$usuario->getClave());
            $actualizar->bindValue('direccion',$usuario->getDireccion());
            echo ''.$usuario->getId();
            echo ''.$usuario->getNombre();
            echo ''.$usuario->getApellido();
            echo ''.$usuario->getCorreo();
            echo ''.$usuario->getClave();
            echo ''.$usuario->getDireccion();
			$actualizar->execute();
		}
	}
?>