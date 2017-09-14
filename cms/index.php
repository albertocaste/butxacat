<?php
 //Protección de sesión
session_start();

include_once "conf.php";
include_once "db.php";

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
	$seccion = "Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>butxacat CMS</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Viga|Arapey" rel="stylesheet">
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
</body>
</html>