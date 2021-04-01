<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudConsulta{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo usuario
		public function insertar($consulta){
            $date=date('Y-m-d H:i:s');
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO consulta values(:id,:idu,:idt,:idprov,:idprod,:fecha,:descripcion)');
            $insert1=$db->prepare("INSERT INTO consulta VALUES(1,2,2,1,109,'2021-01-11','Consulta de recomendaciones para Esmeraldas, Esmeraldas, La concepción");
            $insert->bindValue('id',$consulta->getId());
            $insert->bindValue('idu',$consulta->getIdusuario());
            $insert->bindValue('idt',$consulta->getIdtipo());
            $insert->bindValue('idprov',$consulta->getIdprovincia());
			$insert->bindValue('idprod',$consulta->getIdproducto());
            $insert->bindValue('fecha',$consulta->getDescripcion());
            $insert->bindValue('descripcion',$consulta->getTipo());
			$insert->execute();
		}
        
        public function obtenerid(){
            $db=Db::conectar();
            $select=$db->prepare('SELECT MAX(CODIGOCONSULTA) AS CODIGOCONSULTA FROM consulta');
            $select->execute();
            $consulta=$select->fetch();
            $id=$consulta['CODIGOCONSULTA']+1;
            return $id;
        }

		// método para mostrar todas las consutas
		public function mostrar($usuario){
			$db=Db::conectar();
			$listaConsultas=[];
			$select=$db->query("SELECT * FROM consulta c INNER JOIN producto p ON c.CODIGOPRODUCTO=p.CODIGOPRODUCTO 
                                INNER JOIN provincia prov ON c.CODIGOPROVINCIA=prov.CODIGOPROVINCIA INNER JOIN tipo t 
                                ON c.CODIGOTIPO=t.CODIGOTIPO INNER JOIN recomendacion r ON r.CODIGOPRODUCTO=p.CODIGOPRODUCTO 
                                WHERE CODIGOUSUARIO='$usuario'");
            $select->bindValue('usuario',$usuario);

			foreach($select->fetchAll() as $consulta){
				$myConsulta= new Consulta();
				$myConsulta->setFecha($consulta['FECHACONSULTA']);
                $myConsulta->setDescripcion($consulta['DESCRIPCIONCONSULTA']);
                $myConsulta->setTipop($consulta['NOMBRETIPO']);
                $myConsulta->setProducto($consulta['NOMBREPRODUCTO']);
                $myConsulta->setTipo($consulta['TIPORECOMENDACION']);
                $myConsulta->setDescR($consulta['DESCRIPCIONRECOMENDACION']);
                $myConsulta->setProvincia($consulta['NOMBREPROVINCIA']);
                
				$listaRecoms[]=$myConsulta;
			}
			return $listaRecoms;
		}
	}
?>