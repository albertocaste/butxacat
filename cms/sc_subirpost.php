<?php 
	// UTILIDADES 
	include_once "utils.php";

	// BASE DE DATOS
	include_once "db.php";

	if (isset($_POST["enviar"])) {
		$fecha = $_POST["fecha"];
		$autor = $_POST["autor"];
		$titular = $_POST["titular"];
		$short = $_POST["short"];
		$categoria = $_POST["cat"];
		$texto = $_POST["texto"];
		$tags = $_POST["tags"];
		
		if (isset($_POST["publicado"])) {
			$publicado = $_POST["publicado"];
		} else {
			$publicado = 0;
		}

		$ruta = "../posts/";

		// COMPROBAMOS LA EXISTENCIA DE LA PID EN LA BASE DE DATOS Y EL SISTEMA DE ARCHIVOS
		$count = 1;
		while ($count > 0) {
			$pid = alpha(10);
			$query = "SELECT PID FROM posts WHERE PID = '$pid'";
			$result = mysqli_query($link , $query);
			$count = mysqli_num_rows($result);
			if ($count == 0) {
				if (is_dir($ruta . $pid)) {
					$count = 1;
				}
			}
		}
	// Recoger los archivos de imagen
	// Archivo BIG

	$nombrebig = $ruta . $pid . "/";
	$nombrebig .= "big_" . $pid;

	if (strpos($_FILES["big"]["type"], "gif")) {
		$extension = ".gif";
	} else if (strpos($_FILES["big"]["type"], "png")) {
		$extension = ".png";
	} else if (strpos($_FILES["big"]["type"], "jpeg")) {
		$extension = ".jpg";
	}

	$nombrebig .= $extension;

	// Archivo THUMB

	$nombrethumb = $ruta . $pid . "/";
	$nombrethumb .= "thumb_" . $pid;

	if (strpos($_FILES["thumb"]["type"], "gif")) {
		$extension = ".gif";
	} else if (strpos($_FILES["thumb"]["type"], "png")) {
		$extension = ".png";
	} else if (strpos($_FILES["thumb"]["type"], "jpeg")) {
		$extension = ".jpg";
	}

	$nombrethumb .= $extension;

	// Eliminar los 3 primeros caracteres para luego cargarlos en la pagina principal
	$dbnombrebig = substr($nombrebig, 3);
	$dbnombrethumb = substr($nombrethumb, 3);
	
	// Crear una consulta para insertar los datos del post a la bd
	$query = "INSERT INTO posts (PID, FECHA, AUTOR, TITULAR, TEXTO, IMAGEN, THUMB, CATEGORIA, TAGS, SHORT, PUBLICADO) VALUES ('$pid', '$fecha', '$autor', '$titular', '$texto', '$dbnombrebig', '$dbnombrethumb', '$categoria', '$tags', '$short', $publicado)";

	// Paso 5 ejecutamos la consulta
	$result = mysqli_query($link, $query);

	if ($result) {
		if (mkdir($ruta . $pid)) {
			chmod($ruta . $pid, 0777);
			if (move_uploaded_file($_FILES["big"]["tmp_name"], $nombrebig) && move_uploaded_file($_FILES["thumb"]["tmp_name"], $nombrethumb)) {
				header("Location: listadoposts.php?msg=0");
			} else {
				header("Location: listadoposts.php?msg=1");
			}
		}
	} else {
		header("Location: listadoposts.php?msg=2");
	}
} else {
	header("Location: index.php");
}
?>