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

	<title>Registro</title>
	
</head>
<body class="fondoContacto">
	<div class="container-fluid">
		
		<div class="row justify-content-center">
			<div class="login col-8 col-md-4 ">
				<h3 class="text-center ingresar titulos">Registro</h3>
				<br>
				<form action="registro.php" method="post" >
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" id="inputPassword4" placeholder="Nombre">
					</div>
					<div class="form-group">
						<input type="text" name="nick" class="form-control" id="inputPassword4" placeholder="Usuario">
					</div>
					<p class="text-center alert-success font-weight-bold">
						<?php
						if(isset($_GET["error"])){
							echo "Ingrese un usuario diferente";
						}
						?>
					</p>
					<div class="form-group">
						<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<input type="text" name="mail" class="form-control" id="inputPassword4" placeholder="Correo electrónico">
					</div>
					<p class="text-center alert-success font-weight-bold">
						<?php
						if(isset($_GET["correo"])){
							echo "Ingrese un correo diferente";
						}
						?>
					</p>
					<br>
					<div class="text-center">
					<button class="btn loginb" type="submit">Enviar</button>
					<a href="index.php" class="btn loginb" role="button" aria-pressed="true">Cancelar</a>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>