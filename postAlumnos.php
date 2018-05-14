<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Complete Bootstrap 4 Website Layout</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/jquery.min.js"></script>
      <script src="umd/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/fonts-all.js"></script>
      <link href="style.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet"/>
      <link href="css/waypoints.css" rel="stylesheet"/>
      <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
      <script src="js/waypoints.js" type="text/javascript"></script>
        <title>Enviando...</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      	<div class="container-fluid">
      		<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      			<span class="navbar-toggler-icon"></span>
      		</button>
      		<div class="collapse navbar-collapse" id="navbarResponsive">
      			<ul class="navbar-nav ml-auto">
      				<li class="nav-item active">
      					<a class="nav-link" href="#">Inicio</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="#">Acerca de</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="#">Servicios</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="#">Equipo</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="#">Contactanos</a>
      				</li>
      			</ul>
      		</div>
      	</div>
      </nav>
      <div class="col-sm-12">
          <?php
          include_once("config/Conexion.php");
          $conexion = new ConfigBD();
          $objConexion = $conexion->postAlumnos();
          header('Location: Insertar.php');
          ?>
      </div>
      <div class="container-fluid padding">
      <div class="row text-center padding">
      	<div class="col-12 socialt">
      		<h2>Connect</h2>
      		<hr>
      	</div>

      	<div class="col-12 social padding">
      		<a href="#"><i class="fab fa-facebook"></i></a>
      		<a href="#"><i class="fab fa-twitter"></i></a>
      		<a href="#"><i class="fab fa-google-plus-g"></i></a>
      		<a href="#"><i class="fab fa-instagram"></i></a>
      		<a href="#"><i class="fab fa-youtube"></i></a>
      	</div>
      </div>
      </div>

      <!--- Footer -->
      <footer>
      <div class="container-fluid padding">
      <div class="row text-center">
      	<div class="col-md-4">
      		<img src="img/Krauzzar.png">
      		<hr class="light">
      		<p>555-888-2848</p>
      		<p>University@krauzzar.com</p>
      		<p>#291 Chimichanga</p>
      		<p>Irapuato, Guanajuato, 38488</p>
      	</div>
      	<div class="col-md-4">
      		<hr class="light">
      		<h5>Our Hours</h5>
      		<hr class="light">
      		<p>Lunes a Viernes: 9am - 5pm</p>
      		<p>Sabado: 10am - 4pm</p>
      		<p>Domingo: Cerrado</p>
      	</div>
      	<div class="col-md-4">
      		<hr class="light">
      		<h5>Areas de Servicio</h5>
      		<hr class="light">
      		<p>Chimichanga</p>
      		<p>La Patagonia</p>
      		<p>La Chingada</p>
      		<p>Al carajo</p>
      	</div>
      	<div class="col-12">
      		<hr class="light-100">
      		<h5>&copy; Krauzzar.com</h5>
      	</div>
      </div>

      </div>
      </footer>
      <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
    </body>
</html>
