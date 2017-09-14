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
		$seccion = "Listado de posts";
		include_once "db.php";
	?>
	<meta charset="UTF-8">
	<title>Posts</title>
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
              } else if ($_GET["msg"] == 2) {
              ?>
                <div class="alert alert-danger" role="alert"><?=POST_UPLOAD_KO2?></div>
              <?php
              }
            }
          ?>
	</section>

<!-- LISTADO DE POSTS -->

	<?php 
		$queryposts = "SELECT * FROM posts ORDER BY ID DESC";
		$resultposts = mysqli_query($link, $queryposts);
	?>

	<section class="container">
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th></th>
					<th>#</th>
					<th>FECHA</th>
					<th>TITULAR</th>
					<th>SHORT</th>
					<th>CATEGORIA</th>
					<th>TAGS</th>
				</tr>
				
				<?php 
				 while ($rowpostslist = mysqli_fetch_array($resultposts)) {
                  ?>
                <tr>
                  <td><img class="thumblist img-circle" src="<?='../'.$rowpostslist['THUMB']?>" alt=""></td>
                  <td><?=$rowpostslist['PID']?></td>
                  <td><?=$rowpostslist['FECHA']?></td>
                  <td><?=$rowpostslist['TITULAR']?></td>
                  <td><?=$rowpostslist['SHORT']?></td>
                  <td><?=$rowpostslist['CATEGORIA']?></td>
                  <td><?=$rowpostslist['TAGS']?></td>
                </tr>
                  <?php
                }
              ?>
			</table>			
		</div>
	</section>


</body>
</html>