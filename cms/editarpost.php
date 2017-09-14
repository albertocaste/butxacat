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
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$seccion = "Editar post";
		include_once "db.php";
	?>
	<meta charset="UTF-8">
	<title>Editar post</title>

	<!-- FONTS AWESOME -->	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- BOOTSTRAP CORE CSS -->	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CKEDITOR -->
    <script src="assets/js/ckeditor/ckeditor.js"></script>

	<!-- GOOGLE FONTS -->
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

		
	<section class="container">
		<br>
		<!-- ERRORES EDITAR POST -->
		<?php 
	            if (isset($_GET["msg"])) {
	              if ($_GET["msg"] == 0) {
	              ?>
	                <div class="alert alert-success" role="alert"><?=USER_EDIT_OK?></div>
	              <?php
	              } else if ($_GET["msg"] == 1) {
	              ?>
	                <div class="alert alert-danger" role="alert"><?=USER_EDIT_KO?></div>
	              <?php
	              } else if ($_GET["msg"] == 2) {
	              ?>
	                <div class="alert alert-warning" role="alert"><?=USER_EDIT_KO2?></div>
	              <?php
	              }
	            }
	    ?>

		<!-- FORMULARIO DEL POST - EDITAR -->

		<?php 
			$queryedit = "SELECT * FROM posts WHERE ID = $id";
			$resultedit = mysqli_query($link, $queryedit);
			$rowedit = mysqli_fetch_array($resultedit);

			$autor = $rowedit["AUTOR"];
			$titular = $rowedit["TITULAR"];
			$texto = $rowedit["TEXTO"];
			$imagen = $rowedit["IMAGEN"];
			$thumb = $rowedit["THUMB"];
			$categoria = $rowedit["CATEGORIA"];
			$tags = $rowedit["TAGS"];
			$short = $rowedit["SHORT"];
			$publicado = $rowedit["PUBLICADO"];

		?>
		<form action="sc_editarpost.php" method="post" enctype="multipart/form-data">
			<div class="text-center" >
			 		<input type="checkbox" name="publicado" value="1" <?php if ($publicado == 1) {echo "checked";} ?>> Publicar
			</div> <br>
			<p>Autor: <?=$autor?></p>
                <input type="hidden" name="autor" id="autor" value="<?=$autor?>"> <br>
			<input type="text" name="titulo" placeholder ="Título del post" class="form-control" value="<?=$titulo?>"> <br>
			<select name="cat" id="cat" class="form-control">
				<option value="" disable> Selecciona una categoria</option>
				<option value="1" <?php if ($categoria == 1){echo "selected";}?>>Categoria1</option>
				<option value="2" <?php if ($categoria == 2){echo "selected";}?>>Categoria2</option>
			</select><br>
			<input type="text" name="short" id="short" maxlenght="100" placeholder="Introducción (máx. 100 caracteres)" class="form-control" value="<?=$short?>"> <br>
			<textarea name="texto" id="texto" class="form-control" placeholder=""> <?=$texto?> </textarea><br>
			<script>
			CKEDITOR.replace('texto');
			</script>
			<input type="text" name="tags" id="tags" placeholder="Tags" class="form-control"> <br>

			<div class="row text-center">
				<div class="col-md-6">
					<p>Imagen grande:</p>
					<span class="txt_img">Formato JPG o PNG - Tamaño máx. 5 Mb</span>
					<img src="<?=$imagen?>" class="thumbprofile img-circle" alt="">
					<input type="file" name="img_post_big"> <br>
				</div>
				<div class="col-md-6">
					<p>Imagen pequeña</p>
					<span class="txt_img">Formato JPG o PNG - Tamaño máx. 1 Mb (100 x 100 px.)</span>
					<img src="<?=$thumb?>" class="thumbprofile img-circle" alt="">
					<input type="file" name="img_post_thumb"> <br>
				</div>
			</div>
			<div class="col-xs-12 text-center">
                <input type="submit" class="btn btn-default" name="enviar" id="enviar" value="Subir post">
             </div>
		</form>
	</section>
</body>
</html>
<?php
	} else{
		header("Location: listadousuarios.php");
	}

  ?>