<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="vista/css/Eindex.css">
  <body>
    <header>
      <img class="dimlog" src="vista/img/logo1.png">
      <div class="menu">
        <label for="cerrar" id="ingre">Ingreso</label>
        <a class="bot" href="vista/MoveFood.php">Comidas</a>
      </div>
    </header>
    <input type="checkbox" id="cerrar">
    <div class="sombrea">
      <div id="conpasl">
        <input type="checkbox" id="cambio">
        <ul class="conten">
          <form class="cuad1" action="" method="POST" name="inises">
            <div class="cabis">
              <img class="dimcis" src="vista/icons/icon.png">
              <h2 class="tis">Inicio de sesión</h2>
              <label for="cerrar" id="back">X</label>
            </div>
            <input class="campos" type="text" name="nombre" placeholder="Nombre" required>
            <input class="campos" type="password" name="contrasen" placeholder="Contraseña" required>
            <input class="botinse" type="submit" name="envia" value="Iniciar sesión">
            <label class="botregi" for="cambio">Registrate</label>
          </form>
          
          <form class="cuad1" action="" method="POST" name="regdat">
            <div class="cabis">
              <h2 class="treg">Registrate</h2>
              <label for="cerrar" id="back">X</label>
            </div>
            <input class="campos" type="text" name="nombrer" placeholder="Nombre" required>
            <input class="campos" type="text" name="apelli" placeholder="Apellido" required>
            <input class="campos" type="text" name="telef" placeholder="Teléfono" required>
            <input class="campos" type="text" name="corre" placeholder="Correo" required>
            <input class="campos" type="text" name="contraser" placeholder="Contraseña" required>
            <input class="botdat" type="submit" name="regista" value="Registrarse">
            <label class="botback" for="cambio">Volver</label>
          </form>
        </ul>
      </div>
    </div>
    <main>
      <div class="sele">
        <img id="img" src="vista/img/inicio.jpg" alt="">
      </div>
      <div class="slec2">
        <p>MoveMovie es el futuro que te espera para ahorrar tiempo y dinero, ya que este sitio web te permitirá separar tus boletos de cine como también realizar compras y muchas cosas más.<br>
          Si quieres hacer tu reserva o hacer una compra da le ya mismo a ingresar y empieza a disfrutar de todo lo que tenemos preparado para ti.
        </p>
          <div class="boto">
            <img id="anima" src="vista/img/Flecha.png"><a class="bott" href="#">Ver películas disponibles</a>
          </div>
      </div>
    </main>
      <div class="cine">
       <video class="viee" src="vista/video/joker.webm" controls width="300" height="185"></video>
       <video class="viee" src="vista/video/it.mp4" controls width="300" height="185"></video>
       <video class="viee" src="vista/video/dora.webm" controls width="300" height="185"></video>
      </div>
      <div class="titu"><strong>Peliculas en Cartelera</strong></div>
      <div class="principal">
        <label for="infopel" class="peli">
          <img class="cater" src="vista/img/anna.jpg">
          <ul>
            <li><strong>Anna</strong></li>
            <li>Estreno: 12-Sep-2019</li>
            <li>Genero: Accion, Thriller</li>
            <div class="boy">
              Exclusivo para mayores de 15 años
            </div>
            <div class="bay">
              188min
            </div>
          </ul>
        </label>
      <label class="peli">
        <img class="cater" src="vista/img/fierros.png">
        <ul>
          <li><strong>Los Fierros</strong></li>
          <li>Estreno: 12-Sep-2019</li>
          <li>Genero: Drama</li>
          <div class="boy">
            Exclusivo para mayores de 15 años
          </div>
          <div class="bay">
            88min
          </div>
        </ul>
      </label>
      <label class="peli">
        <img class="cater" src="vista/img/it.jpg">
        <ul>
          <li><strong>It 2</strong></li>
          <li>Estreno: 5-Sep-2019</li>
          <li>Genero: Suspenso, Horror</li>
          <div class="boy">
            Exclusivo para mayores de 12 años
          </div>
          <div class="bay">
            69min
          </div>
        </ul>
      </label>
      <label class="peli">
        <img class="cater" src="vista/img/dora.jpg">
        <ul>
          <li><strong>Dora y la Ciudad Perdida</strong></li>
          <li>Estreno: 12-Sep-2019</li>
          <li>Genero: Familiar</li>
          <div class="boy">
            Para todo el publico
          </div>
          <div class="bay">
            102min
          </div>
        </ul>
      </label>
      <label class="peli">
        <img class="cater" src="vista/img/obra.jpg">
        <ul>
          <li><strong> Obra y Gracia</strong></li>
          <li>Estreno: 05-Sep-2019</li>
          <li>Genero: Comedia</li>
          <div class="boy">
            Recomendada para mayores de 12 años
          </div>
          <div class="bay">
            90min
          </div>
        </ul>
      </label>
      <label class="peli">
        <img class="cater" src="vista/img/monos.jpg">
        <ul>
          <li><strong>Monos</strong></li>
          <li>Estreno: 15-Agos-2019</li>
          <li>Genero: Drama, Ficcion</li>
          <div class="boy">
            Recomendada para mayores de 12 años
          </div>
          <div class="bay">
            100min
          </div>
        </ul>
      </label>
      <label class="peli">
        <img class="cater" src="vista/img/leon.jpg">
        <ul>
          <li><strong>El Rey Leòn</strong></li>
          <li>Estreno: 18-Jul-2019</li>
          <li>Genero: Aventura, Drama</li>
          <div class="boy">
            Para todo el publico
          </div>
          <div class="bay">
            117min
          </div>
        </ul>
      </label>
      <label class="peli">
        <img class="cater" src="vista/img/cont.jpg">
        <ul>
          <li><strong>Convento Sinisestro</strong></li>
          <li>Estreno: 12-Sept-2019</li>
          <li>Genero: Terror</li>
          <div class="boy">
              Exclusivo para mayores de 15 años
          </div>
          <div class="bay">
            103min
          </div>
        </ul>
      </label>
      <label class="peli">
        <img class="cater" src="vista/img/agent.jpg">
        <ul>
          <li><strong>Agente Bajo Fuego</strong></li>
          <li>Estreno: 15-Agos-2019</li>
          <li>Genero: Drama, Ficcion</li>
          <div class="boy">
            Recomendada para mayores de 12 años
          </div>
          <div class="bay">
            100min
          </div>
        </ul>
      </label>
      <input type="checkbox" id="infopel">
      <div class="sompel">
        <div id="vepel">
          <div class="infcab">
            <img class="dimpel" src="vista/img/anna.jpg">
            <div class="pari">
              <p class="titulo">Anna</p>
              <p class="datinfo">Boletas disponibles: 24</p>
              <p class="datinfo">Hora de estreno: 2:00 P.M.</p>
              <p class="datinfo">Categoria: Acción</p>
            </div>
            <label for="infopel" class="cierra">X</label>
          </div>
          <p class="desdat">Descripción</p>
          <div class="cuadr">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
          </div>
          <button class="botcomp"><div class="litle">Comprar boleta</div>$25.000</button>
        </div>
      </div>
    </div>
    <footer>Movemovie© Reservados todos los derechos</footer>
  </body>
</html>
