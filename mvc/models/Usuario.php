<?php
/**
 *  Crear el modelo del Usuario
 */
require 'ModeloBase.php';
class Usuario extends ModeloBase
{
	public $nombre,$apellido,$email;
	
	public function __construct()
	{
		parent::__construct();
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}
	public function setApellido($apellido){
		$this->apellido=$apellido;
	}
	public function setNuevoNombre($NuevoNombre){
		$this->NuevoNombre=$NuevoNombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setEmail($email){
		$this->email=$email;
	}

	public function getEmail(){
		return $this->email;
	}
	public function getNuevoNombre(){
		return $this->NuevoNombre;
	}

	public function Create(){
		$sql = "INSERT INTO usuarios(nombre,apellido,email) VALUES
			('{$this->nombre}','{$this->apellido}','{$this->email}')";

		$guardado = $this->db->query($sql);

		return $guardado;
	}

	public function borrar(){
		$sql="DELETE FROM usuarios WHERE nombre ='{$this->nombre}'";
			$eliminado = $this->db->query($sql);

			return $eliminado;
	}
	public function modificar(){
		$sql = "UPDATE usuarios SET nombre ='{$this->NuevoNombre}',apellido='{$this->apellido}', email='{$this->email}' WHERE nombre ='{$this->nombre}'";
		$modificar=$this->db->query($sql);
		echo "$sql";
		return $modificar;
	}
}
?>