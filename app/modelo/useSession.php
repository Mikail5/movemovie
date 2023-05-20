<?php 
	class useSession{

		public function __construct()
		{
			session_start();
		}

		public function setActUser($nomb)
		{
			$_SESSION['user']=$nomb;
		}

		public function getActUser()
		{
			return $_SESSION['user'];
		}

		public function closeSession()
		{
			session_unset();
			session_destroy();
		}
	}
?>