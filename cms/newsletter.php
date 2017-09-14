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
		$seccion = "ado de newsletter";
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
                <div class="alert alert-success" role="alert"><?=NEWSLETTER_ADD_OK?></div>
              <?php
              } else if ($_GET["msg"] == 1) {
              ?>
                <div class="alert alert-danger" role="alert"><?=NEWSLETTER_ADD_KO?></div>
              <?php
              } else if ($_GET["msg"] == 2) {
              ?>
                <div class="alert alert-success" role="alert"><?=NEWSLETTER_ADD_KO2?></div>
              <?php
              } 
          	}
          ?>
	</section>

<!-- ADO DE POSTS -->

	<?php 
		$querynewsletter = "SELECT * FROM newsletter ORDER BY ID DESC";
		$resultnewsletter = mysqli_query($link, $querynewsletter);
	?>

	<section class="container">
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>#</th>
					<th>NOMBRE</th>
					<th>EMAIL</th>
          <th></th>
          <th></th>
				</tr>
				
				<?php 
				 while ($rownewsletter = mysqli_fetch_array($resultnewsletter)) {
                  ?>
                <tr>
                  <td><?=$rownewsletter['ID']?></td>
                  <td><?=$rownewsletter['NOMBRE']?></td>
                  <td><?=$rownewsletter['EMAIL']?></td>
                  <td>
                  	<a href="editarnewsletter.php?id=<?=$rownewsletter['ID']?>"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                  </td>
                  <td>
                  	<a href="sc_borrarnewsletter.php?id=<?=$rownewsletter['ID']?>"><i class="fa fa-minus-square fa-2x" aria-hidden="true"></i></a>
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