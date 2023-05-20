<?php 
	include_once "modelo/conexion.php";

	class regUser extends conexion
	{
		private $one;

		public function setNewUser($nombre, $apellido, $tele, $correo, $contrasenia, $rol)
		{
			$query=$this->conexion()->prepare("INSERT INTO usuarios (NomUs,ApelUs,TelUs,CorUs,ContraUs,Id_rol) VALUES(:nomus,:apeus,:telus,:corrus,:contraus,:idru)");
			$query->execute(['nomus'=>$nombre, 'apeus'=>$apellido, 'telus'=>$tele, 'corrus'=>$correo,'contraus'=>$contrasenia, 'idru'=>$rol]);
		}
	}
 ?>