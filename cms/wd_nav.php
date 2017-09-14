<?php 
	$idsession = $_SESSION["username"];

	$querysession = "SELECT * FROM users WHERE ID = '$idsession'";

	$resultsession = mysqli_query($link, $querysession);

	$rowsession = mysqli_fetch_array($resultsession);
?>

<div class="row">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-10">
		 		 <a href="editarusuario.php?id=<?=$rowsession['ID']?>"><div class="session"><img src="<?=$rowsession["FOTO"]?>" alt="" class="img-circle thumbnav"><?=$rowsession["NOMBRE"] . " " . $rowsession["APELLIDOS"]?></div></a>
		 	</div>
		 	<div class="col-md-2">
		 		<div class="logout text-center">
		 		<a  href="sc_killsession.php">Logout</a>
		 		</div>
		 	</div>
		 </div>
		 <h2 class="text-center"><?=$seccion?></h2>
	</div>
</div>
<div class="row">
	<div class="container">
		<ul class="nav nav-pills nav-justified">
			<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="nuevopost.php">Post nuevo</a></li>
			<li class="nav-item"><a class="nav-link" href="listadoposts.php">Listado de post</a></li>
			<li class="nav-item"><a class="nav-link" href="listadousuarios.php">Listado de usuarios</a></li>
			<li class="nav-item"><a class="nav-link" href="nuevousuario.php">Usuario nuevo</a></li>
			<li class="nav-item"><a class="nav-link" href="newsletter.php">Newsletter</a></li>
			<li class="nav-item"><a class="nav-link" href="nuevonewsletter.php">Nuevo suscriptor</a></li>
		</ul>
	</div>
</div>
	

