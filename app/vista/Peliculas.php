<!DOCTYPE html>
<html>
<head>
	<title>Administrar películas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/EPeliculas.css">
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
			<form action="" method="POST">
				<input class="buskd" type="text" name="busque" placeholder="Buscar pelicula">
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
					<span class="long">Nueva película</span>
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
					<img src="img/anna.jpg" class="dimcar">
					<p class="dato">Id: </p>
					<p class="dato">Nombre: </p>
					<p class="dato">Boletas: </p>
					<p class="dato">Hora: </p>
					<p class="dato">Precio: </p>
					<p class="dato">Categoria: </p>
					<p class="datex"><label for="botds" id="esdes">Descripción</label></p>
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
					<img src="img/agent.jpg" class="dimcar">
					<p class="dato">Id: </p>
					<p class="dato">Nombre: </p>
					<p class="dato">Boletas: </p>
					<p class="dato">Hora: </p>
					<p class="dato">Precio: </p>
					<p class="dato">Categoria: </p>
					<p class="datex"><label for="botds" id="esdes">Descripción</label></p>
					<div class="gestion">
						<li>
							<a href="1.html"><img class="dimg1" src="icons/edita.png"></a>
						</li>
						<li>
							<a href="2.html"><img class="dimg2" src="icons/eliminardat.png"></a>
						</li>
					</div>
				</div>
				<input type="checkbox" name="desc" id="botds">
				<div class="sombre">
					<div class="description">
						<label for="botds" id="atras"><</label>
						<img class="diminfo" src="icons/info.png">
						<p class="dato"><span class="reca">Decripción:</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<input type="checkbox" id="regnew" name="nuevo">
	<div class="desenfo">
		<form id="continfo">
			<div class="part">
				<img class="dimfor" src="icons/formmovie.png">
				<h1>Registrar nueva pelicula</h1>
			</div>
			<div class="partcamp">
				<label for="regnew" id="back">X</label>
				<input class="entrad" type="text" name="nombrep" placeholder="Precio de boleta">
				<p class="drum">Elige la categoría</p>
				<select class="entrad" name="Categoria" size="1">
					<option value="1">Aventuras</option>
					<option value="2">Comedias</option>
					<option value="3">Dramatica</option>
					<option value="4">Terror</option>
					<option value="5">Musicales</option>
					<option value="6">Ciencia Ficcion</option>
					<option value="7">Suspenso</option>
				</select>
				<textarea class="estita" name="decris" placeholder="Descripción"></textarea>
			</div>
			<div class="partcamp">
				<input class="entrad" type="text" name="nombrep" placeholder="Nombre de pelicula">
				<input class="entrad" type="text" name="canbolet" placeholder="Cantidad de boletas disp.">
				<input class="entrad" type="text" name="hora" placeholder="Hora de estreno">
			</div>
			<div class="penvia">
				<input class="botrp" type="submit" name="regipel" value="Registrar película">
			</div>
		</form>
	</div>
</body>
</html>