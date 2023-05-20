<?php 

	include_once "../modelo/useSession.php";
	$useSession=new useSession();
	$useSession->closeSession();
	header ("Location: ../index.php");

 ?>