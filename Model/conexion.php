<?php

	/**
	* clase de conexion
	*/
	class Conexion {
		
		public static function conectar(){
            $user = "root";//usuario
			$pass = "";//contraseña
			$host = "localhost";//servidor
			$db = "Dwash";//BD
			$port = "3306";//puerto de mysql
			$conexion = new PDO("mysql:host=$host;dbname=$db;port=$port;",$user,$pass);//se crea un obj de tipo PDO con los parametros de la conexion
			return $conexion;//se returna conexion
		}
	}

?>