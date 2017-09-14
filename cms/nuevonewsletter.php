<?php
 //Protección de sesión
session_start();

include_once "conf.php";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

} else {
  header("Location: login.php");
  exit;
}

$now = time(); // checking the time now when home page starts

if($now > $_SESSION['expire']){
  session_destroy();
  header("Location: login.php");
  exit; // Interrupcion interrumpida
} else{
	$_SESSION['expire'] = time() + SESSION_TIME; //Alargar la sesión 5 minutos más si no ha expirado
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$seccion = "Newsletter";
		include_once "conf.php";
		include_once "db.php";
	?>
	<meta charset="UTF-8">
	<title>Usuario nuevo</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Arapey" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container text-center" id="butxacat">
			<h1>Butxacat</span></h1>
		</div>
	</header>
	<nav>
		<?php 
			include_once "wd_nav.php";			
		?>
	</nav>
	<br>

<!-- 	ERRORES AL SUBIR EL POST -->	
<section class="container">
		<?php 
            if (isset($_GET["msg"])) {
              if ($_GET["msg"] == 0) {
              ?>
                <div class="alert alert-success" role="alert"><?=POST_UPLOAD_OK?></div>
              <?php
              } else if ($_GET["msg"] == 1) {
              ?>
                <div class="alert alert-danger" role="alert"><?=POST_UPLOAD_KO?></div>
              <?php
              }
            }
          ?>
</section>
<section>
		<div class="container">
			<form action="sc_crearnewsletter.php" method="post" id="form" enctype="multipart/form-data">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control"> <br>
				
				<input type="email" name="email" id="email" placeholder="Correo electrónico" class="form-control"> <br>

                <div class="row">
             		 <div class="col-xs-12 text-center">
               		 <input type="submit" class="btn btn-default" name="enviar" id="enviar" value="Crear suscriptor">
            	 </div>

			</form>
		</div>
</section>
</body>
</html>