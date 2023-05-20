<!DOCTYPE html>
<html>
<head>
	<title>Administrar Snacks</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/ESnacks.css">
</head>
<body>
	<input type="checkbox" id="botoc">
	<div class="mostram"><label for="botoc" id="menu"><img class="dimen" src="icons/menu.png"></label></div>
	<header>
		<h2>Opciones</h2>
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
	</header>
	<div class="coninfo">
		<nav>
			<form action="" method="POST">
				<input class="buskd" type="text" name="busque" placeholder="Buscar snack">
				<input id="botbus" type="submit" name="" value="Buscar">
				<label id="botper" for="botbus"><img class="icbus" src="icons/buscar.png"></label>
			</form>
			<a href="">Editar perfil</a><a href="../controlador/cerrarSesion.php">Salir</a>
		</nav>
		<div class="binve">
			<div class="contop">
				<div class="userin">
					<img class="dimim" src="img/chocobol.jpg">
					<span>
						<h3>Nombre Apellido</h3>
						<h4>Administrador</h4>
					</span>
				</div>

				<label for="regnew" id="unidop">
					<img src="icons/agregar.png" class="icond">
					<span class="long">Nuevo snack</span>
				</label>
				<label for="checop" id="unidop">
					<img src="icons/opedita.png" class="icond">
					<span class="long">Cambiar Datos</span>
				</label>
				<label for="checoptwo" id="unidop">
					<img src="icons/elimina.png" class="icond">
					<span class="long">Eliminar Datos</span>
				</label>
			</div>
			<div class="presin">
				<input type="radio" name="req" id="checop">
				<input type="radio" name="req" id="checoptwo">
				<div class="condat">
					<img src="img/bebi.jpg" class="dimcar">
					<p class="dato">Id: </p>
					<p class="dato">Nombre: </p>
					<p class="dato">Cantidad disponible: </p>
					<p class="dato">Precio: </p>
					<p class="dato">Tipo: </p>
					<div class="gestion">
						<li>
							<a href="1.html"><img class="dimg1" src="icons/edita.png"></a>
						</li>
						<li>
							<a href="2.html"><img class="dimg2" src="icons/eliminardat.png"></a>
						</li>
					</div>
				</div>
				<div class="condat">
					<img src="img/palo.jpg" class="dimcar">
					<p class="dato">Id: </p>
					<p class="dato">Nombre: </p>
					<p class="dato">Cantidad disponible: </p>
					<p class="dato">Precio: </p>
					<p class="dato">Tipo: </p>
					<div class="gestion">
						<li>
							<a href="1.html"><img class="dimg1" src="icons/edita.png"></a>
						</li>
						<li>
							<a href="2.html"><img class="dimg2" src="icons/eliminardat.png"></a>
						</li>
					</div>
				</div>
			</div>
		</div>
	</div>
	<input type="checkbox" id="regnew" name="nuevo">
	<div class="desenfo">
		<form id="continfo">
			<div class="part">
				<img class="dimfor" src="icons/formfood.png">
				<h1>Registrar nuevo snack</h1>
			</div>
			<div class="partcamp">
				<label for="regnew" id="back">X</label>
				<p class="drum">Elige el tipo de alimento</p>
				<input class="entrad" type="text" name="nombrep" placeholder="Nombre de snack">
				<input class="entrad" type="text" name="canbolet" placeholder="Cantidad de snacks">
				<input class="entrad" type="text" name="nombrep" placeholder="Precio de boleta">
				<p class="drum">Agregar imagen del alimento</p>
				<input class="entrad" type="file" name="nombrep" placeholder="Imagen">
			</div>
			<div class="partcamp">
				<select class="entrad" name="Categoria" size="1">
					<option value="Bebidas">Bebidas</option>
					<option value="Comidas">Comidas</option>
					<option value="Combos">Combos</option>
				</select>
			</div>
			<div class="penvia">
				<input class="botrp" type="submit" name="regipel" value="Registrar snack">
			</div>
		</form>
	</div>
</body>
</html>