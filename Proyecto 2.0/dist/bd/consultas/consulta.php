<?php
	class Consulta{
        private $id;
        private $idusuario;
        private $idtipo;
        private $idprovincia;
        private $idproducto;
        private $fecha;

        private $producto;
        private $provincia;
        private $nombre;
        private $tipo;
        private $descripcion;
        private $tiempo;
        private $tipop;
        private $descR;
        
 
		function __construct(){}

        public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}

        public function getIdusuario(){
			return $this->idusuario;
		}
 
		public function setIdusuario($idusuario){
			$this->idusuario = $idusuario;
		}
 
        public function getIdtipo(){
			return $this->idtipo;
		}
 
		public function setIdtipo($idtipo){
			$this->idtipo = $idtipo;
		}

        public function getIdprovincia(){
			return $this->idprovincia;
		}
 
		public function setIdprovincia($idprovincia){
			$this->idprovincia = $idprovincia;
		}
        
        public function getIdproducto(){
			return $this->idproducto;
		}
 
		public function setIdproducto($idproducto){
			$this->idproducto = $idproducto;
		}
        
        public function getFecha(){
			return $this->fecha;
		}
 
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

        public function getProducto(){
			return $this->producto;
		}
 
		public function setProducto($producto){
			$this->producto = $producto;
		}

        public function getProvincia(){
            return $this->provincia;
        }
    
        public function setProvincia($provincia){
            $this->provincia = $provincia;
        }
        
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

        public function getTipo(){
            return $this->tipo;
        }
    
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getDescripcion(){
			return $this->descripcion;
		}
 
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
        
        public function getTiempo(){
			return $this->tiempo;
		}
 
		public function setTiempo($tiempo){
			$this->tiempo = $tiempo;
		}
        
        public function getTipop(){
            return $this->tipop;
        }
    
        public function setTipop($tipop){
            $this->tipop = $tipop;
        }

        public function getDescR(){
            return $this->descR;
        }
    
        public function setDescR($descR){
            $this->descR = $descR;
        }
        
	}
?>