<!DOCTYPE html>
<html>
<head>
	<title>Editar datos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/EFormed.css">
</head>
<body>
	<input type="checkbox" id="botoc">
	<div class="mostram"><label for="botoc" id="menu"><img class="dimen" src="icons/menu.png"></label></div>
	<header>
		<h2>Opciones</h2>
		<img class="dimim" src="img/chocobol.jpg">
		<h3>Nombre Apellido</h3>
		<h4>Administrador</h4>
		<a class="option" href="inicioAdmin.php">
			<img class="dicon" src="icons/inicio.png">
			<p class="descrip">Inicio</p>
		</a>
		<a class="option" href="Peliculas.php">
			<img class="dicon" src="icons/peli.png">
			<p class="descrip">Películas</p>
		</a>
		<a class="option" href="Boletas.php">
			<img class="dicon" src="icons/ticket.png">
			<p class="descrip">Boletas vendidas</p>
		</a>
		<a class="option" href="Usuarios.php">
			<img class="dicon" src="icons/usuarios.png">
			<p class="descrip">Usuarios</p>
		</a>
		<a class="option" href="Snacks.php">
			<img class="dicon" src="icons/alimen.png">
			<p class="descrip">Alimentos/ Snacks</p>
		</a>
	</header>
	<div class="coninfo">
		<nav>
			<a href="">Editar perfil</a>|<a href="../controlador/cerrarSesion.php">Salir</a>
		</nav>
			<form class="confor">
				<h2>Editar datos de producto</h2>
				<input class="campeu" type="text" name="nombrep" placeholder="Nombre de pelicula">
				<input class="campeu" type="text" name="canbolet" placeholder="Cantidad de boletas disp.">
				<input class="campeu" type="text" name="hora" placeholder="Hora de estreno">
				<input class="campeu" type="text" name="nombrep" placeholder="Precio de boleta">
				<p class="mens">Elige la categoría</p>
				<select class="campeu" name="Categoria" size="1">
					<option value="1">Aventuras</option>
					<option value="2">Comedias</option>
					<option value="3">Dramatica</option>
					<option value="4">Terror</option>
					<option value="5">Musicales</option>
					<option value="6">Ciencia Ficcion</option>
					<option value="7">Suspenso</option>
				</select>
				<input class="campeu" type="text" name="hora" placeholder="Descripción">
				<div class="conopci">
					<a class="buto" href="">Volver</a>
					<input class="tues" type="submit" name="edita" value="Guardar cambios">
				</div>
			</form>
	</div>
</body>
</html>