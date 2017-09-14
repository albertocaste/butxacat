<?php 
	// UTILIDADES 
	include_once "utils.php";

	// BASE DE DATOS
	include_once "db.php";

	if (isset($_GET["id"])) {
		$id = $_GET["id"];

		$query = "SELECT * FROM users WHERE ID = $id";

		$result = mysqli_query($link, $query);

		$row = mysqli_fetch_array($result);

		$foto = $row["FOTO"];
		$uid = $row["UID"];

		$querydelete = "DELETE FROM users WHERE ID = $id";
	
	$result = mysqli_query($link , $querydelete);

	if ($result) {
		if (is_file($foto)) {
			if (unlink($foto)) {
				if (is_dir("assets/img/users/" . $uid)) {
					if (rmdir("assets/img/users/" . $uid)) {
						header("Location: listadousuarios.php?msg=2");
					} else {
						header("Location: listadousuarios.php?msg=3");
					}
				} else {
					header("Location: listadousuarios.php?msg=3");
				}
			} else {
				header("Location: listadousuarios.php?msg=4");
			}
		} else {
			header("Location: listadousuarios.php?msg=4");
		}	
		
	} else {
		header("Location: listadousuarios.php?msg=5");
	}
} else {
	header("Location: index.php");
}

?>