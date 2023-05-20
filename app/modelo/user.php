<?php

	include_once "modelo/conexion.php";

	class user extends conexion
	{
		private $idusu;
		private $nombre;
		private $rolu;

		public function getUserinf($nomb, $contra)
		{

			$query=$this->conexion()->prepare("SELECT * FROM usuarios WHERE NomUs= :user AND ContraUs= :pass");
			$query->execute(['user'=>$nomb, 'pass'=>$contra]);

			if($query->rowCount())
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function setUser($nomb)
		{
			$query=$this->conexion()->prepare("SELECT * FROM usuarios WHERE NomUs= :user");
			$query->execute(['user'=>$nomb]);

			foreach ($query as $actuser) {
				$this->idusu=$actuser['Id_usu'];
				$this->nombre=$actuser['NomUs'];
				$this->rolu=$actuser['Id_rol'];
			}
		}
		public function getNombre()
		{
			return $this->nombre;
		}
		public function getIduser()
		{
			return $this->idusu;
		}		
		public function getRoluser()
		{
			return $this->rolu;
		}	
	}
?>