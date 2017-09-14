<?php 
	include_once "db.php";
	$nombre = addslashes(htmlspecialchars($_POST["nombre"]));
	$email = addslashes(htmlspecialchars($_POST["email"]));

	$fecha = date('d/m/Y H:i:s');

	$query = "SELECT * FROM newsletter WHERE EMAIL = '$email'";

	$result = mysqli_query($link, $query);

	$count = mysqli_num_rows($result);

	if ($count != 0) {
		echo "<div class='alert alert-danger text-center'><p>El email proporcionado ya existe en nuestra base de datos.</p></div>";
	} else{
		$query = "INSERT INTO newsletter (NOMBRE, EMAIL, FECHA) VALUES ('$nombre', '$email', '$fecha')";
		$result = mysqli_query($link , $query);

		if ($result) {
			echo "<div class='alert alert-success text-center'><p>Gracias por suscribirte a nuestra newsletter.</p></div>";
		}  else {
			echo "<div class='alert alert-danger text-center'><p>No se pudo realizar la suscripción a la newsletter.</p></div>";
		}
	}
?>
