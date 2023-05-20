<!DOCTYPE html>
<html>
<head>
	<title>Administrar Usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/EUsuarios.css">
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
		<a class="option" href="Snacks.php">
			<img class="dicon" src="icons/alimen.png">
			<p class="descrip">Alimentos/ Snacks</p>
		</a>
	</header>
	<div class="coninfo">
		<nav>
			<form action="" method="POST">
				<input class="buskd" type="text" name="busque" placeholder="Buscar usuario">
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
					<span class="long">Nuevo usuario</span>
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
				<h1>Usuarios registrados</h1>
				<input type="radio" name="req" id="checop">
				<input type="radio" name="req" id="checoptwo">
				<table id="tablaza">
					<thead class="linea">
						<tr>
							<td class="celcab">Id</td>
							<td class="celcab">Nombre</td>
							<td class="celcab">Apellido</td>
							<td class="celcab">Teléfono</td>
							<td class="celcab">Correo</td>
							<td class="celcab">Contraseña</td>
							<td class="celcab">Rol</td>
							<td class="celcab">Foto perfil</td>
							<td class="cabedi">Editar</td>
							<td class="cabeli">Eliminar</td>
						</tr>
					</thead>
					<thead>
						<tr>
							<td class="celsig">32</td>
							<td class="celsig">Jesus</td>
							<td class="celsig">Gonzales</td>
							<td class="celsig">0082019</td>
							<td class="celsig">chucho.gon@gmail.com</td>
							<td class="celsig">123456</td>
							<td class="celsig">Administrador</td>
							<td class="celsig"><img class="dimg" src="img/chocobol.jpg"></td>
							<td class="esedi"><a href="1.html"><img class="dimg" src="icons/edita.png"></a></td>
							<td class="eseli"><a href="2.html"><img class="dimg" src="icons/eliminardat.png"></a></td>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<input type="checkbox" id="regnew" name="nuevo">
	<div class="desenfo">
		<form id="continfo">
			<div class="part">
				<img class="dimfor" src="icons/formuser.png">
				<h1>Registrar nuevo usuario</h1>
			</div>
			<div class="partcamp">
				<label for="regnew" id="back">X</label>
				<input class="entrad" type="text" name="nombreu" placeholder="Nombre de usuario">
				<input class="entrad" type="text" name="apelu" placeholder="Apellido de usuario">
				<input class="entrad" type="text" name="telu" placeholder="Teléfono">
				<input class="entrad" type="email" name="corru" placeholder="Correo">
				<input class="entrad" type="password" name="contu" placeholder="Contraseña">
			</div>
			<div class="partcamp">
				<p class="drum">Elige rol del usuario</p>
				<select class="entrad" name="rolu" size="1">
					<option value="1">Administrador</option>
					<option value="2">Vendedor</option>
					<option value="2">Cliente</option>
				</select>
			</div>
			<div class="penvia">
				<input class="botrp" type="submit" name="regiu" value="Registrar Boleta">
			</div>
		</form>
	</div>
</body>
</html>