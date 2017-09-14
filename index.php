<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include_once "db.php";

		// Consulta de POST

		$querypost = "SELECT * FROM posts WHERE PUBLICADO = 1 ORDER BY ID DESC";
		$resultpost = mysqli_query($link, $querypost);
		
		$queryuser = "SELECT THUMB FROM users WHERE UID";
		$resultuser = mysqli_query($link, $queryuser);
		// $rowuser = mysqli_fetch_array($resultuser);
	?>
	<meta charset="UTF-8">
	<title>butxacat</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
		<div class="container">
			<div class="row">
				<div class="col-md-2" id="redes_sociales">
					<div class="row">
						<div class="col-md-3">
							<a href="#" id="icon_redessociales" class="transscale"><img src="assets/img/icon_fb.png" alt=""></a>
						</div>
						<div class="col-md-3">
							<a href="#"><img src="assets/img/icon_tw.png" alt=""></a>
						</div>
						<div class="col-md-3">
							<a href="#"><img src="assets/img/icon_insta.png" alt=""></a>
						</div>
						<div class="col-md-3">
							<a href="#"><img src="assets/img/icon_youtube.png" alt=""></a>
						</div>

					</div>

				</div>
				<div class="col-md-8">
					<ul class="nav nav-pills nav-justified">
						<li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
						<li class="nav-item"><a class="nav-link" href="#">LUGARES</a></li>
						<li class="nav-item"><a class="nav-link" href="#">RUTAS</a></li>
						<li class="nav-item"><a class="nav-link" href="#">MAPA</a></li>
						<li class="nav-item"><a class="nav-link" href="cms/login.php">LOGIN</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<form class="navbar-search pull-left" action="buscar.php" method="action" id="buscar">

						<input class="search-query span2" placeholder="BUSCAR..." type="text">
						<i class="fa fa-search" aria-hidden="true"></i>
					</form>
				</div>

			</div>
		</div>
	</nav>
	<br>
	<br>
<!--POST DESTACADO -->
	<div class="row">
		<div class="container">
			<div class="col-md-9" >
				<a href="last_post.php">
					<article  id="post_destacado" class="transscale">
						<?php 
								$rowpost = mysqli_fetch_array($resultpost);

								$fecha = $rowpost["FECHA"];
								$fechaarray = explode(" ", $fecha);
								$dia = $fechaarray[0];
								$hora = $fechaarray[1];
								$tags = $rowpost["TAGS"];
								$tagsarray = explode(",", $tags);
						?>
						
						<div style="background: url(<?=$rowpost["IMAGEN"]?>) no-repeat center; background-size: cover;" id="img_destacado">
						</div>
						<div id="back_destacado"></div>
						
						<div class="txt_destacado">
							
							<h2><?=$rowpost["TITULAR"]?></h2>
							<span class="txt_autor"> <!-- <img src=""> --> <?=$rowpost["AUTOR"]?> <?=$dia?></span> <br>

							<?php 

							foreach ($tagsarray as $key => $tag){ ?>
								<span class="tags"><?=$tag?></span>
							<?php 
								}
							?>
							<p class="txt_destacado_short"><?=$rowpost["SHORT"]?></p>
						</div>						
					</article>
				</a>
<!-- -->
<!--POST ÚLTIMO -->
				<div class="row" >
					<div class="col-md-4 transscale">
						<a href="#">
							<article class="post_ultimo" class="transscale">
								<?php 
										$rowpost = mysqli_fetch_array($resultpost);

										$fecha = $rowpost["FECHA"];
										$fechaarray = explode(" ", $fecha);
										$dia = $fechaarray[0];
										$hora = $fechaarray[1];
										$tags = $rowpost["TAGS"];
										$tagsarray = explode(",", $tags);
								?>
								<div  style="background: url(<?=$rowpost["IMAGEN"]?>) no-repeat center; background-size: cover;" class="img_postultimo">
								</div>

								<div class="back_postultimo"></div>

								<div class="txt_postultimo">
									<h3><?=$rowpost["TITULAR"]?></h3>
									<span class="txt_autor"> <!-- <img src=""> --> <?=$rowpost["AUTOR"]?> <?=$dia?></span> <br>

									<?php 
										foreach ($tagsarray as $key => $tag){ ?>
										<span class="tags"><?=$tag?></span>
									<?php 
										}
									?>
									<p class="txt_ultimo_short"><?=$rowpost["SHORT"]?></p>
								</div>
							</article>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#">
							<article class="post_ultimo" class="transscale">
								<?php 
										$rowpost = mysqli_fetch_array($resultpost);

										$fecha = $rowpost["FECHA"];
										$fechaarray = explode(" ", $fecha);
										$dia = $fechaarray[0];
										$hora = $fechaarray[1];
										$tags = $rowpost["TAGS"];
										$tagsarray = explode(",", $tags);
								?>
								<div  style="background: url(<?=$rowpost["IMAGEN"]?>) no-repeat center; background-size: cover;" class="img_postultimo">
								</div>

								<div class="back_postultimo"></div>

								<div class="txt_postultimo">
									<h3><?=$rowpost["TITULAR"]?></h3>
									<span class="txt_autor"> <!-- <img src=""> --> <?=$rowpost["AUTOR"]?> <?=$dia?></span> <br>

									<?php 
										foreach ($tagsarray as $key => $tag){ ?>
										<span class="tags"><?=$tag?></span>
									<?php 
										}
									?>
									<p class="txt_ultimo_short"><?=$rowpost["SHORT"]?></p>
								</div>
							</article>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#">
							<article class="post_ultimo" class="transscale">
								<?php 
										$rowpost = mysqli_fetch_array($resultpost);

										$fecha = $rowpost["FECHA"];
										$fechaarray = explode(" ", $fecha);
										$dia = $fechaarray[0];
										$hora = $fechaarray[1];
										$tags = $rowpost["TAGS"];
										$tagsarray = explode(",", $tags);
								?>
								<div  style="background: url(<?=$rowpost["IMAGEN"]?>) no-repeat center; background-size: cover;" class="img_postultimo">
								</div>

								<div class="back_postultimo"></div>

								<div class="txt_postultimo">
									<h3><?=$rowpost["TITULAR"]?></h3>
									<span class="txt_autor"> <!-- <img src=""> --> <?=$rowpost["AUTOR"]?> <?=$dia?></span> <br>

									<?php 
										foreach ($tagsarray as $key => $tag){ ?>
										<span class="tags"><?=$tag?></span>
									<?php 
										}
									?>
									<p class="txt_ultimo_short"><?=$rowpost["SHORT"]?></p>
								</div>
							</article>
						</a>
					</div>
				</div>
<!-- -->
<!--POST OTRO -->
				<div class="row">
					<a href="#">
						<article class="post_otro">
							<img src="assets/img/river.jpg" alt="" class="img-circle" width="100" height="100">
							<div class="txt_post_otro">
								<h4>Post</h4>
								<span class="txt_autor">Publicado por XXXX a la hora XXXXX</span> <br>
								<span class="tags">COSTA</span>
								<span class="tags">MAR</span>
								<span class="tags">SURF</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ducimus sequi, et numquam, illo dolor. Sunt nihil totam iusto molestiae commodi, libero esse suscipit cumque numquam, exercitationem tenetur tempore amet!</p>
							</div>
						</article>
					</a>				
				</div>
				<div class="row">
					<a href="#">
						<article class="post_otro">
							<img src="assets/img/river.jpg" alt="" class="img-circle" width="100" height="100">
							<div class="txt_post_otro">
								<h4>Post</h4>
								<span class="txt_autor">Publicado por XXXX a la hora XXXXX</span> <br>
								<span class="tags">COSTA</span>
								<span class="tags">MAR</span>
								<span class="tags">SURF</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ducimus sequi, et numquam, illo dolor. Sunt nihil totam iusto molestiae commodi, libero esse suscipit cumque numquam, exercitationem tenetur tempore amet!</p>
							</div>
						</article>
					</a>				
				</div>
				<div class="row">
					<a href="#">
						<article class="post_otro">
							<img src="assets/img/river.jpg" alt="" class="img-circle" width="100" height="100">
							<div class="txt_post_otro">
								<h4>Post</h4>
								<span class="txt_autor">Publicado por XXXX a la hora XXXXX</span> <br>
								<span class="tags">COSTA</span>
								<span class="tags">MAR</span>
								<span class="tags">SURF</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ducimus sequi, et numquam, illo dolor. Sunt nihil totam iusto molestiae commodi, libero esse suscipit cumque numquam, exercitationem tenetur tempore amet!</p>
							</div>
						</article>
					</a>				
				</div>
				<div class="row">
					<a href="#">
						<article class="post_otro">
							<img src="assets/img/river.jpg" alt="" class="img-circle" width="100" height="100">
							<div class="txt_post_otro">
								<h4>Post</h4>
								<span class="txt_autor">Publicado por XXXX a la hora XXXXX</span> <br>
								<span class="tags">COSTA</span>
								<span class="tags">MAR</span>
								<span class="tags">SURF</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ducimus sequi, et numquam, illo dolor. Sunt nihil totam iusto molestiae commodi, libero esse suscipit cumque numquam, exercitationem tenetur tempore amet!</p>
							</div>
						</article>
					</a>				
				</div>
			</div>
<!-- -->
<!-- ASIDE -->
			<aside class="col-md-3">
				<div id="aboutme">
					<img src="assets/img/me.png" id="img_me">
					<div class="txt_aside">
						<h5>ABOUT ME</h5>
						<p>Empecé como periodista, pero las ganas de descubrir el mundo a mi modo, me llevaron a viajar por todos los caminos que encontré a mi paso.</p>
					</div>
				</div>
				<div id="aside2">
					<div class="news">
						<h5>NEWSLETTER</h5>
						<form method="post" id="newsletter" class="text-center">
							<input type="text" name="nombre" id="nombre" placeholder="Nombre"> <br><br>
							<input type="email" name="email" id="email" placeholder="Email"> <br> <br>
							<input type="submit" name="enviar" id="enviar" value="Subscribete a nuestra newsletter!" class="btn btn-default">
						</form>
					</div>	

					<form>
						<div id="resultado"></div>
					</form>		
					
					<h5>MEJORES POSTS</h5>
					<h5>MÁS LEÍDOS</h5>s
					<h5>MAPA INTERACTIVO</h5>
					<h5>INSTAGRAM</h5>
				</div>

			</aside>
		</div>
	</div>

	<footer>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script>
      $(function(){
       $("#enviar").click(function(){
       var url = "sc_altanews.php"; // El script a dónde se realizará la petición.
          $.ajax({
             type: "POST",
             url: url,
             data: $("#newsletter").serialize(), // Adjuntar los campos del formulario enviado.
             success: function(data)
             {
                 $("#resultado").html(data); // Mostrar la respuestas del script PHP.
             }
          });

          return false; // Evitar ejecutar el submit del formulario.
       });
      });
    </script>
</body>
</html>