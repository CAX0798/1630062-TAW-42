<?php
class Conexion{
	public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=ejercicio1-taw","root","");
		return $link;
	}
}
?>