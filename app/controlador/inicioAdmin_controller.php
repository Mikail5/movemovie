<?php
	include_once "../modelo/useSession.php";

	include_once "../controlador/inicioAdmin.php";

	$useSession=new useSession();

	if (!isset($_SESSION['user'])) {
		$useSession->closeSession();
		header('Location: ../index.php');
	}
?>