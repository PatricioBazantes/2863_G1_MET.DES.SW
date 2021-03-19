<?php
	class Usuario{
		private $id;
        private $usuario;
		private $nombre;
        private $apellido;
        private $correo;
        private $clave;
        private $tipo;
		private $direccion;
 
		function __construct(){}
 
        public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
        
        public function getUsuario(){
		return $this->usuario;
		}
 
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
        
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
        
        public function getApellido(){
		return $this->apellido;
		}
 
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
        
        public function getCorreo(){
		return $this->correo;
		}
 
		public function setCorreo($correo){
			$this->correo = $correo;
		}
        
        public function getClave(){
		return $this->clave;
		}
 
		public function setClave($clave){
			$this->clave = $clave;
		}
        
        public function getTipo(){
		return $this->tipo;
		}
 
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
 
		public function getDireccion(){
			return $this->direccion;
		}
 
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
	}
?>