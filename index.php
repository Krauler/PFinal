<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Instituto Krauzzar</title>
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
</head>
<body>

<!-- Navegación -->
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
					<a class="nav-link" href="Insertar.php">Alumnos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="inConsul.php">Consulta</a>
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

<!--- Slider de Imagenes -->
<section class="Intro">
	<div class="dentro">
		<div class="contenido">
			<section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay="0s">
				<h1>Instituto Krauzzar</h1>
				<h2>Bienvenido</h2>
			</section>
			<section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay="0s">
				<form method="GET" action="Insertar.php">
					<button type="submit" class="btn btn-outline-light btn-lg">Agregar Alumnos</button>
				</form>
				<form method="GET" action="inConsul.php">
					<button type="submit"class="btn btn-primary btn-lg">Consultar Alumnos</button>
				</form>
			</section>
		</div>
	</div>
</section>

<!--- Jumbotron -->
<div class="container-fluid">
<div class="row jumbotron">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
		<p>Bienvenido al sistema de captura de Cursos Basicos  Academicos aqui podra encontrar las diversas
		instituciones registradas en nuestro sistema.</p>
		<p>Podra modificar diversos parametros dentro de nuestra base de datos asi como manipular los
		datos para el apoyo y construccion de nuestro sistema.</p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
		<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Contactanos</button></a>
	</div>
</div>
</div>
<!--- Sección de Bienvenida -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Construido con facilidad.</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="lead">Esta pagina fue diseñada para su comodidad y el llenado de datos de las
		diferentes instituciones registradas. Fue desarrrolada con codigo HTML5, Bootstrap4 y CCS3
	  siendo herrramientas poderosas en la ayuda de esta pagina web.</p>
	</div>
</div>
</div>

<!--- Sección de Tres Columnas -->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-code"></i>
		<h3>HTML5</h3>
		<p>Desarrollado con la ultima version de HTML, HTML5.</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-bold"></i>
		<h3>Bootstrap</h3>
		<p>Desarrollado con la ultima version de Bootstrap, Bootstrap4.</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fab fa-css3"></i>
		<h3>CSS3</h3>
		<p>Desarrollado con la ultima version de CSS, CSS3.</p>
	</div>
</div>
<hr class="my-4">
</div>

<!--- Sección de Dos Columnas -->
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-md-12 col-lg-6 info">
		<h2>Instituto Tecnologico Krauzzar</h2>
		<hr>
		<p style="text-align: justify;">El Instituto Krauzzar es una institución de educación superior de carácter público,
			cuyo propósito es servir a la sociedad formando profesionales con elevados
			conocimientos técnicos, científicos y humanísticos, que los habilite para:
			Generar riqueza en las cadenas de valor de la actividad económica y social.
			Convertirse en promotores y agentes de cambio, que mejoren la calidad de
			vida de la sociedad Fortalecer la democracia, solidaridad, cultura y medio ambiente.</p>
			<br>
			<a href="#" class="btn btn-primary">Conoce M&aacutes</a>
	</div>
	<div class="col-lg-6">
		<img src="img/ITESI Academy.jpg" class="img-fluid">
	</div>
</div>
</div>
<hr class="my-4">

<!--- Fondo de Pantalla Arreglado -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
			<h1>Instituto Krauzzar</h1>
			<h3>Un lugar para aprender</h3>
		</div>
	</div>
</figure>

<!--- Sección Emoji -->
<button class="fun" data-toggle="collapse" data-target="#emoji">K</button>
<div id="emoji" class="collapse">
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-sm-6 col-md-3">
		<img src="img/gif/Rosa.gif" class="gif">
	</div>
	<div class="col-sm-6 col-md-3">
		<img src="img/gif/Serena.gif" class="gif">
	</div>
	<div class="col-sm-6 col-md-3">
		<img src="img/gif/Cynthia2.gif" class="gif">
	</div>
	<div class="col-sm-6 col-md-3">
		<img src="img/gif/Xana.gif" class="gif">
	</div>
</div>
</div>
</div>
<!--- Conocé al Equipo -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Conocé al Equipo</h1>
	</div>
	<hr>
</div>
</div>

<!--- Tarjetas -->
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-md-4">
		<div class="card">
			<img src="img/team1.png" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title">Oscar Alonso ("Sopis")</h4>
				<p class="card-text">Desarrollador y programador web, especializado en HTML5, BOOTSTRAP4, CSS3 y PHP,  encargado de las conexiones en PHP y la base de datos  de dicha p%aacutegina.</p>
				<a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img src="img/team2.png" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title">Daniel ("La Grandota")</h4>
				<p class="card-text">Desarrollador y programador web, especializado en HTML5 y CSS3, pues la neta este men no hizo nada.</p>
				<a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<img src="img/team3.png" class="card-img-top">
			<div class="card-body">
				<h4 class="card-title">Cristian Ad&aacuten ("Falzzar")</h4>
				<p class="card-text">Desarrollador y programador web, especializado en HTML5, BOOTSTRAP4, CSS3 y JScript, encargado del diseño, funcionalidad y responsividad.</p>
				<a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
			</div>
		</div>
	</div>
</div>
</div>

<!--- Sección de Dos Columnas -->
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-md-12 col-lg-6 filo">
		<h2>Nuestra Filosofia</h2>
		<hr>
		<br>
		<p style="text-align: justify;">El Instituto Krauzzar es una institución pública de educación superior, se visualiza: Como eslabón fundamental en las cadenas de valor para el desarrollo social, industrial y económico de México. Plenamente comprometido con la sociedad y vinculado con el sector industrial, agropecuario y de servicios del país. Con acreditación de los organismos nacionales e internacionales por su calidad académica. Con prestigio y reconocimiento nacional e internacional por los logros académicos, científicos y tecnológicos que beneficien la creación de riqueza de la nación. </p>

	</div>
	<div class="col-lg-6">
		<img src="img/Krauzzar2.png" class="img-fluid">
	</div>
</div>
<hr class="my-4">
</div>

<!--- Conexión -->
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

</body>
</html>
