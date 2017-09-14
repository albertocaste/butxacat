<?php
include_once "utils.php";

include_once "db.php";

if (isset($_POST["enviar"])) {
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$twitter = $_POST["twitter"];
	$bio = $_POST["bio"];
	$nick = $_POST["nick"];
	$pass = md5($_POST["pass"]);
	$fecha = date("d/m/Y H:i:s");
	$tipo = $_POST["tipo"];

	if (isset($_POST["activo"])) {
		$activo = $_POST["activo"];
	} else {
		$activo = 0;
	}

	$ruta = "assets/img/users/";

	

	// COMPROBAMOS LA EXISTENCIA DE LA UID EN LA BASE DE DATOS Y EL SISTEMA DE ARCHIVOS
	$count = 1;
	while ($count > 0) {
		$uid = alpha(10);
		$query = "SELECT UID FROM users WHERE UID = '$uid'";
		$result = mysqli_query($link , $query);
		$count = mysqli_num_rows($result);
		if ($count == 0) {
			if (is_dir($ruta . $uid)) {
				$count = 1;
			}
		}
	}

	// RECOGEMOS LOS ARCHIVOS

	// ARCHIVO FOTOPERFIL

	$fotoperfil = $ruta . $uid . "/";

	if (strpos($_FILES["imgperfil"]["type"], "gif")) {
		$extension = ".gif";
	} else if (strpos($_FILES["imgperfil"]["type"], "png")) {
		$extension = ".png";
	} else if (strpos($_FILES["imgperfil"]["type"], "jpeg")) {
		$extension = ".jpg";
	}

	$fotoperfil .= $uid . $extension;

	// Paso 4 creamos una consulta
	$queryusuario = "INSERT INTO users (UID, NOMBRE, APELLIDOS, EMAIL, FOTO, TELEFONO, TWITTER, FECHA, BIO, NICK, PASS, TIPO, ACTIVO) VALUES ('$uid', '$nombre', '$apellidos', '$email', '$fotoperfil', '$telefono', '$twitter', '$fecha', '$bio', '$nick', '$pass', '$tipo', '$activo')";

	// Paso 5 ejecutamos la consulta
	$resultusuario = mysqli_query($link , $queryusuario);

	if ($resultusuario) {

		if (mkdir($ruta . $uid)) {
			chmod($ruta . $uid, 0777);
			if (move_uploaded_file($_FILES["imgperfil"]["tmp_name"], $fotoperfil)) {
				header("Location: listadousuarios.php?msg=0");
			} else {
				header("Location: listadousuarios.php?msg=1");
			}
		}
		}
	} else {
	header("Location: index.php");
}
?>