<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../vista/css/EAdmin.css">
</head>
<body>
	<input type="checkbox" id="botoc">
	<div class="mostram"><label for="botoc" id="menu"><img class="dimen" src="../vista/icons/menu.png"></label></div>
	<header>
		<h2>Opciones</h2>
		<img class="dimim" src="../vista/img/chocobol.jpg">
		<h3>Nombre Apellido</h3>
		<h4>Administrador</h4>
		<a class="option" href="Peliculas.php">
			<img class="dicon" src="../vista/icons/peli.png">
			<p class="descrip">Películas</p>
		</a>
		<a class="option" href="Boletas.php">
			<img class="dicon" src="../vista/icons/ticket.png">
			<p class="descrip">Boletas vendidas</p>
		</a>
		<a class="option" href="Usuarios.php">
			<img class="dicon" src="../vista/icons/usuarios.png">
			<p class="descrip">Usuarios</p>
		</a>
		<a class="option" href="Snacks.php">
			<img class="dicon" src="../vista/icons/alimen.png">
			<p class="descrip">Alimentos/ Snacks</p>
		</a>
	</header>
	<div class="coninfo">
		<nav>
			<a href="">Editar perfil</a>|<a href="../controlador/cerrarSesion.php">Salir</a>
		</nav>
		<div class="binve">
			<h1>Bienvenido nombre</h1>
			<p class="mesage">En este espacio podrás ver la información referente a las actividades de tu empresa.<br>
			<span class="acci">Empecemos por revisar las boletas recientemente vendidas</span></p>
			<a href="">Revisar boletas</a>
		</div>
	</div>
</body>
</html>