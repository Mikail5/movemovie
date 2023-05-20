<?php 
	include_once "modelo/user.php";
	include_once "modelo/useSession.php";
	include_once "modelo/registroUser.php";

	$useSession=new useSession();
	$user=new user();
	$regUser=new regUser();

	if (isset($_SESSION['user'])) {
		$user->setUser($useSession->getActUser());
		header('Location: vista/inicioAdmin.php');
	}

	include_once "vista/inicio_view.php";

	if(isset($_POST['nombre']) && isset($_POST['contrasen'])){
		$nom=$_POST['nombre'];
		$con=$_POST['contrasen'];
		if ($user->getUserinf($nom, $con)) {
			$useSession->setActUser($nom);
			$user->setUser($nom);
			$verol=$user->getRoluser();
			if ($verol=1) {
				header('Location: controlador/inicioAdmin_controller.php');
			}
			else if ($verol=2) {
				header('Location: controlador/inicioVen_controller.php');
			}
			else if ($verol=3) {
				header('Location: controlador/Cliente_controller.php');
			}
		}
		else{
			echo "<script>alert('Usuario o contraseña incorrectos');</script>";
			header("Refresh:0; url=index.php");
		}
	}

	if(isset($_POST['regista'])){
		$n=$_POST['nombrer'];
		$a=$_POST['apelli'];
		$tel=$_POST['telef'];
		$cor=$_POST['corre'];
		$cont=$_POST['contraser'];
		$role=1;
		$regUser->setNewUser($n, $a, $tel, $cor, $cont,$role);
		echo "<script>alert('Usuario registrado. Por favor inicia sesión para continuar');</script>";
		header("Refresh:0; url=index.php");
	}
 ?>