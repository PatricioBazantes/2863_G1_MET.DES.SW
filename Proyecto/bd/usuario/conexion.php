<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost:3308;dbname=proyecto','admin','admin',$pdo_options);
			return self::$conexion;
		}
	} 
?>