<?php

/* start the session */
session_start();

include_once "db.php";
include_once "conf.php";

if (isset($_POST["enviar"])) {
	$nick = $_POST['nick'];
	$pass = md5($_POST['pass']);


	$query = "SELECT * FROM users WHERE NICK = '$nick' and PASS = '$pass' and ACTIVO = 1";

	$result = mysqli_query($link, $query);

	//Busca cuantas filas hay con la consulta
	$count = mysqli_num_rows($result);

	$row = mysqli_fetch_array($result);


	if($count == 1){

		//Variables hiperglobales
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $row["ID"];
		
		//Cuando se inicia la sesion
		$_SESSION['start'] = time();

		//Cuando quieres que se expire la sesion - 5 minutos 
		$_SESSION['expire'] = $_SESSION['start'] + SESSION_TIME;

		//Crear coockie con último usuario para imagen login
		setcookie('imglastuser', $row["FOTO"]);
		setcookie('namelastuser', $row["NOMBRE"] . " " . $row["APELLIDOS"]);
		setcookie('timelastuser', date("d/m/Y H:i:s"));
	
		header("Location: index.php");

	} else {
		header("Location: login.php");
	}
} else {
	header("Location: login.php");
}


?>

</body>
</html>