<?php
	class Producto{
        private $idtipo;
        private $idprovincia;
		private $id;
		private $nombre;
        private $nombrec;
		private $descripcion;
        private $provincia;
        private $tipo;
 
		function __construct(){}
 
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
        
        public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
        
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
        
        public function getNombrec(){
		return $this->nombrec;
		}
 
		public function setNombrec($nombrec){
			$this->nombrec = $nombrec;
		}
 
		public function getDescripcion(){
			return $this->descripcion;
		}
 
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
        
        public function getProvincia(){
		return $this->provincia;
		}
 
		public function setProvincia($provincia){
			$this->provincia = $provincia;
		}
        
        public function getTipo(){
		return $this->tipo;
		}
 
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
	}
?>