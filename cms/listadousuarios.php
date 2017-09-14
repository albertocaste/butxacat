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
		$seccion = "Listado de usuarios";
		include_once "db.php";
		include_once "conf.php";
	?>
	<meta charset="UTF-8">
	<title>butxacat</title>
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

<!-- 	ERRORES POSTS -->	
	<section class="container">
  <br>
		<?php 
            if (isset($_GET["msg"])) {
              if ($_GET["msg"] == 0) {
              ?>
                <div class="alert alert-success" role="alert"><?=USER_UPLOAD_OK?></div>
              <?php
              } else if ($_GET["msg"] == 1) {
              ?>
                <div class="alert alert-danger" role="alert"><?=USER_UPLOAD_KO?></div>
              <?php
              } else if ($_GET["msg"] == 2) {
              ?>
                <div class="alert alert-success" role="alert"><?=USER_DELETE_OK?></div>
              <?php
              } else if ($_GET["msg"] == 3) {
              ?>
                <div class="alert alert-danger" role="alert"><?=USER_DELETE_KO?></div>
              <?php
              } else if ($_GET["msg"] == 4) {
              ?>
                <div class="alert alert-danger" role="alert"><?=USER_DELETE_KO?></div>
              <?php
              } else if ($_GET["msg"] == 5) {
              ?>
                <div class="alert alert-danger" role="alert"><?=USER_DELETE_KO?></div>
              <?php
              }
          	}
          ?>
	</section>

<!-- LISTADO DE POSTS -->

	<?php 
		$queryusuarios = "SELECT * FROM users ORDER BY ID DESC";
		$resultusuarios = mysqli_query($link, $queryusuarios);
	?>

	<section class="container">
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th></th>
					<th>#</th>
					<th>NOMBRE</th>
					<th>EMAIL</th>
          <th>TWITTER</th>
					<th>NICK</th>
					<th>TIPO</th>
					<th>ACTIVO</th>
					<th></th>
					<th></th>
				</tr>
				
				<?php 
				 while ($rowusuarioslist = mysqli_fetch_array($resultusuarios)) {
                  ?>
                <tr>
                  <td><img class="thumblist img-circle" src="<?=$rowusuarioslist['FOTO']?>" alt=""></td>
                  <td><?=$rowusuarioslist['UID']?></td>
                  <td><?=$rowusuarioslist['NOMBRE']?></td>
                  <td><?=$rowusuarioslist['EMAIL']?></td>
                  <td><?=$rowusuarioslist['TWITTER']?></td>
                  <td><?=$rowusuarioslist['NICK']?></td>
                  <td><?=$rowusuarioslist['TIPO']?></td>
                  <td><?=$rowusuarioslist['ACTIVO']?></td>
                  <td>
                  	<a href="editarusuario.php?id=<?=$rowusuarioslist['ID']?>"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                  </td>
                  <td>
                  	<a href="sc_borrarusuario.php?id=<?=$rowusuarioslist['ID']?>"><i class="fa fa-minus-square fa-2x" aria-hidden="true"></i></a>
                  </td>
                </tr>
                  <?php
                }
              ?>
			</table>			
		</div>
	</section>


</body>
</html>