<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login!</title>
	<!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Arapey" rel="stylesheet"> 
</head>
<body>

	<div class="container">
    	<div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4" id="login">
	            <h1 class="text-center login-title">Iniciar sesion</h1>
	            <div class="account-wall">
					<?php 
						if (isset($_COOKIE['imglastuser'])) {
							$foto = $_COOKIE['imglastuser'];
						} else{
							$foto = "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120";
						}

						if (isset($_COOKIE['namelastuser'])) {
							$nombre = $_COOKIE['namelastuser'];
							$msgultimo = "Último usuario:";
						} else{
							$nombre = "";
							$msgultimo = "";
						}

						if (isset($_COOKIE['timelastuser'])) {
							$time = $_COOKIE['timelastuser'];
						} else{
							$time = "";
						}
					 ?>
					<div class="text-center">
						<img src="<?=$foto?>"
	                    alt="" class="img-circle">
					</div>
	                
	                <p class="text-center">Último usuario: <?=$nombre?></p>
	                <p class="text-center">Hora: <?=$time?></p>
	                	<form class="form-signin" id="loginform" action="sc_checklogin.php" method="post">
	                		<input type="text" name="nick" id="nick" class="form-control" placeholder="Nick" required autofocus> <br>
	               			 <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required> <br>
	               			 <input class="btn btn-lg btn-primary btn-block" value="Enviar" id="enviar" name="enviar" type="submit">
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	
</body>
</html>