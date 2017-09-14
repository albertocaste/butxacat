<?php
	$link = mysqli_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());

	mysqli_select_db($link , "butxacat") or die('No se pudo seleccionar la base de datos');

	mysqli_set_charset($link , "utf8");
?>