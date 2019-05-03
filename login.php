<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

	<title>Contacto</title>
	
</head>
<body class="fondoContacto">
	<div class="container-fluid">
		
		<div class="row justify-content-center">
			<div class="login col-8 col-md-4 ">
				<h3 class="text-center ingresar titulos">Ingresar</h3>
				<br>
				<form action="informacion.php" method="post">
					<div class="form-group">
						<input type="text" name="nom" class="form-control" id="inputPassword4" placeholder="Usuario">
					</div>
					<br>
					<div class="form-group">
						<input type="password" name="pass" class="form-control" id="inputPassword4" placeholder="Contraseña">
					</div>
					<br>
					<div class="text-center">
					<button class="btn loginb" type="submit">Enviar</button>
					<a href="index.php" class="btn loginb" role="button" aria-pressed="true">Cancelar</a>
					</div>
				</form>
				<br>
				<p class="text-center alert-danger font-weight-bold'">
					<?php
					if(isset($_GET["error"])){
						echo "Error al ingresar";
					}
					?>
				</p>
			</div>
		</div>
	</div>
</body>
</html>