<?php
	class Recom{
        private $idt;
        private $idprov;
        private $idprod;
		private $id;
		private $nombre;
		private $descripcion;
        private $tipo;
        private $tipop;
        private $provincia;
        private $producto;
 
		function __construct(){}
        
        public function getIdt(){
			return $this->idt;
		}
 
		public function setIdt($idt){
			$this->idt = $idt;
		}
        
        public function getIdprov(){
			return $this->idprov;
		}
 
		public function setIdprov($idprov){
			$this->idprov = $idprov;
		}
        
        public function getIdprod(){
			return $this->idprod;
		}
 
		public function setIdprod($idprod){
			$this->idprod = $idprod;
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
 
		public function getDescripcion(){
			return $this->descripcion;
		}
 
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
        
        public function getTipo(){
		return $this->tipo;
		}
 
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
        
        public function getTipop(){
		return $this->tipop;
		}
 
		public function setTipop($tipop){
			$this->tipop = $tipop;
		}
        
        public function getProvincia(){
		return $this->provincia;
		}
 
		public function setProvincia($provincia){
			$this->provincia = $provincia;
		}
        
        public function getProducto(){
		return $this->producto;
		}
 
		public function setProducto($producto){
			$this->producto = $producto;
		}
	}
?>