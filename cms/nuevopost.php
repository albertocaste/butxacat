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
		$seccion = "Post nuevo";
		include_once "conf.php";
		include_once "db.php";
	?>
	<meta charset="UTF-8">
	<title>butxacat</title>
	<!-- FONTS AWESOME -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- CKEDITOR -->
	<script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
	
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

<!-- 	FORMULARIO DEL POST -->	
	<section class="container">
		<br>
		<form action="sc_subirpost.php" method="post" enctype="multipart/form-data">
			<p>Autor: <b><?=$rowsession["NICK"]?></b></p>
                <input type="hidden" name="autor" id="autor" value="<?=$rowsession["NOMBRE"]?>" required> <br>
			<input type="text" name="titular" placeholder ="Titular del post" class="form-control" required> <br>
			<select name="cat" id="cat" class="form-control" required>
				<option disable> Selecciona una categoria</option>
				<option value="1">Categoria1</option>
				<option value="2">Categoria2</option>
				
			</select><br>
			<input type="text" name="short" id="short" maxlenght="100" placeholder="Introducción (máx. 100 caracteres)" class="form-control" required> <br>
			<textarea name="texto" id="texto" class="form-control" placeholder="" required> </textarea><br>
			<script>
			CKEDITOR.replace('texto');
			</script>
			<input type="text" name="tags" id="tags" placeholder="Tags" class="form-control" required> <br>
			<input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha" value="<?=date('d/m/Y H:i:s')?>" required> <br>

			<div class="row text-center">
				<div class="col-md-6">
					<p>Imagen grande</p>
					<span class="txt_img">Formato JPG o PNG - Tamaño máx. 5 Mb</span>
					<input type="file" name="big" id="big"> <br>
				</div>
				<div class="col-md-6">
					<p>Imagen pequeña</p>
					<span class="txt_img">Formato JPG o PNG - Tamaño máx. 1 Mb (100 x 100 px.)</span>
					<input type="file" name="thumb" id="thumb"> <br>
				</div>
			</div>
			<div class="text-center" >
			 		<input type="checkbox" name="publicado" value="1"> Publicar
			</div> <br>
			<div class="col-xs-12 text-center">
                <input type="submit" class="btn btn-default" name="enviar" id="enviar" value="Subir post">
            </div>
		</form>
	</section>
</body>
</html>