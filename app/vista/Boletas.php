<!DOCTYPE html>
<html>
<head>
	<title>Administrar Boletas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/EBoletas.css">
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
				<input class="buskd" type="text" name="busque" placeholder="Buscar boleta por fecha">
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
					<span class="long">Nueva boleta</span>
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
				<h1>Boletas solicitadas</h1>
				<input type="radio" name="req" id="checop">
				<input type="radio" name="req" id="checoptwo">
				<table id="tablaza">
					<thead class="linea">
						<tr>
							<td class="celcab">Id</td>
							<td class="celcab">Cliente</td>
							<td class="celcab">Pelicula</td>
							<td class="celcab">Fecha de petición</td>
							<td class="celcab">Estado de boleta</td>
							<td class="celcab">Valor total</td>
							<td class="cabedi">Editar</td>
							<td class="cabeli">Eliminar</td>
						</tr>
					</thead>
					<thead>
						<tr>
							<td class="celsig">12</td>
							<td class="celsig">Checho</td>
							<td class="celsig">Infinity war</td>
							<td class="celsig">20/08/2019</td>
							<td class="celsig">28.000</td>
							<td class="celsig"><span class="pv">Por vender</span></td>
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
				<img class="dimfor" src="icons/formtickets.png">
				<h1>Registrar nueva boleta</h1>
			</div>
			<div class="partcamp">
				<label for="regnew" id="back">X</label>
				<input class="entrad" type="text" name="nombrec" placeholder="Nombre de cliente">
				<input class="entrad" type="text" name="nombrep" placeholder="Nombre de película">
				<input class="entrad" type="date" name="fecpet" placeholder="Fecha de solicitud">
			</div>
			<div class="partcamp">
				<p class="drum">Estado de la boleta</p>
				<select class="entrad" name="estadbol" size="1">
					<option value="1">Vendido</option>
					<option value="2">Por venderse</option>
				</select>
			</div>
			<div class="penvia">
				<input class="botrp" type="submit" name="regipel" value="Registrar Boleta">
			</div>
		</form>
	</div>
</body>
</html>