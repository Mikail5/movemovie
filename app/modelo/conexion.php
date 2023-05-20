<?php
	class conexion
	{
		private $server;
		private $usern;
		private $passw;
		private $basedatos;
		private $charset;

		function __construct()
		{
			$this->server="localhost";
			$this->usern="root";
			$this->passw="";
			$this->basedatos="movemovie";
			$this->charset="utf8mb4";
		}

		public function conexion()
		{
			try {
				$conec="mysql:host=".$this->server.";dbname=".$this->basedatos.";charset=".$this->charset;
				$options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
							PDO::ATTR_EMULATE_PREPARES => false];
				$pdo=new PDO($conec, $this->usern, $this->passw, $options);
				return $pdo;
			} catch (PDOException $e) {
				print("Error conexion: ".$e->getMessage());
			}
		}
	}
?>