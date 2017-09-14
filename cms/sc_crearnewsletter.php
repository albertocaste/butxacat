<?php
include_once "utils.php";

include_once "db.php";

if (isset($_POST["enviar"])) {
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];

	$fecha = date('d/m/Y H:i:s');

	$query = "SELECT * FROM newsletter WHERE EMAIL = '$email'";

	$result = mysqli_query($link, $query);

	$count = mysqli_num_rows($result);

	if ($count != 0) {
		header("Location: newsletter.php?msg=2");
	} else{
		// Paso 4 creamos una consulta
		$querynewsletter = "INSERT INTO newsletter (NOMBRE, EMAIL, FECHA) VALUES ('$nombre', '$email', '$fecha')";

		// Paso 5 ejecutamos la consulta
		$resultnewsletter = mysqli_query($link , $querynewsletter);

		if ($resultnewsletter) {
			header("Location: newsletter.php?msg=0");
		}  else {
			header("Location: newsletter.php?msg=1");
		}
	}

	} else {
	header("Location: newsletter.php");
}
?>