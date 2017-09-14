<?php 
	// UTILIDADES 
	include_once "utils.php";

	// BASE DE DATOS
	include_once "db.php";

	if (isset($_POST["enviar"])) {
		$email = $_POST["email"];

	//Comprobar existencia de NID en la base de datos;
		$count = 1;
		while ($count > 0) {
			$nid = alpha(10);
			$query = "SELECT NID FROM newsletter WHERE NID = '$nid'";
			$result = mysqli_query($link , $query);
			$count = mysqli_num_rows($result);
		}
	$querynews = "INSERT INTO newsletter (NID, EMAIL) VALUES ('$nid', '$email')";

	$resultnews = mysqli_query($link, $querynews);

		if ($resultnews) {
			header("Location: index.php?msg=1");
		} else {
			header("Location: index.php?msg=2");
		}
	} else {
		header("Location: index.php");
	}


?>