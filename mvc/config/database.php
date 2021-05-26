<?php
/**
 * Crear la configuracion de la base de datos
 */ 
class database {
	
	public static function conectar (){
		$conexion = new mysqli("localhost","root","","bdnombres");
		$conexion->query ("SET NAME utf8");
		
		return $conexion;
	}
}
?>