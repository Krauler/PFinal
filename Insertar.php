<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  	<title>Agregar Alumno(s)</title>
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
    <link href="CSS/styInsertar.css" type="text/css" rel="stylesheet">
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
  				<li class="nav-item">
  					<a class="nav-link" href="index.php">Inicio</a>
  				</li>
  				<li class="nav-item active">
  					<a class="nav-link" href="#">Alumnos</a>
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

    <div class="col-sm-12 contGral">
        <div class="col-sm-12 contForm">
            <h1>Agregar alumno(s)</h1>
            <hr>
            <form class="row col-sm-12" method="POST" action="postAlumnos.php">
                <div class="col-sm-5">Telebachillerato</div>
                <div class="col-sm-7">
                    <?php
                    include_once("config/Conexion.php");
                    $conexion = new ConfigBD();
                    $objConexion = $conexion->Combo();
                    ?>
                </div>

                <div class="col-sm-5">Matricula</div>
                <div class="col-sm-7"><input name="Matricula" type="text"></div>



                <div class="col-sm-5">Estatus</div>
                <div class="col-sm-7"><input name="Estatus" type="text"></div>

                <div class="col-sm-5">Nombre</div>
                <div class="col-sm-7"><input name="Nombre" type="text"></div>

                <div class="col-sm-5">Paterno</div>
                <div class="col-sm-7"><input name="Paterno" type="text"></div>

                <div class="col-sm-5">Materno</div>
                <div class="col-sm-7"><input name="Materno" type="text"></div>

                <div class="col-sm-5">Genero</div>
                <div class="col-sm-7"><input name="Genero" type="text"></div>

                <div class="col-sm-5">Generacion</div>
                <div class="col-sm-7"><input name="Generacion" type="text"></div>

                <div class="col-sm-5">Municipio</div>
                <div class="col-sm-7"><input name="Municipio" type="text"></div>

                <div class="col-sm-5">Pais</div>
                <div class="col-sm-7"><input name="Pais" type="text"></div>

                <div class="col-sm-5">Fecha</div>
                <div class="col-sm-7"><input name="Fecha" type="text"></div>

                <button id="btnAdd" class="btn" type="submit">Agregar</button>
                <button id="btnCancelar" class="btn" onclick="limpiar()">Cancelar</button>

            </form>
        </div>
        <p>**La fecha tendra que ser introducida en el siguiente formato dia/mes/a&ntilde;o</p>
    </div>

    <div class="container-fluid padding">
    <div class="row text-center padding">
    	<div class="col-12 socialt">
    		<h2>Connect</h2>
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

    <script type="text/javascript">
        function limpiar(){
            for (var i=0; i<inputs.length; i++){
                inputs[i].value = "";
            }
        }
    </script>
    <script src="JS/bootstrap.min.js" type="text/javascript"></script>
    <script src="JS/jquery-3.3.1.min.map" type="text/javascript"></script>
</body>

</html>
