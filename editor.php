<?php
session_start();
if (isset($_SESSION ["usuario"])) {
}else{
  echo "<script> location.href='login.php' </script>";
  //header("Location: login.php");
}

  require "php/conexion.php";
  $sql="SELECT * FROM infografias";
  $resultado = mysqli_query($conexion,$sql);
  $sql2="SELECT * FROM resgistro";
  $resultado2 = mysqli_query($conexion,$sql2);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/estilos.css">

  	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/bootstrap.bundle.min.js"></script>
    <title>Editor</title>
  </head>
  <body class="editor" ">
    <div>
      <a class="btn cerrar float-right" href="logout.php">Cerrar</a>
    </div>  
    <br><br>
    <h1 class="text-center titulos">Secciones</h1>
    <table class="table text-center " style="background:rgba(236, 240, 241,0.6); width:80%; margin: auto;">
       <!-- color de la tabla -->
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">editar</th>
				</tr>
			</thead>
      <?php


        while ($row = mysqli_fetch_array($resultado)) {
          echo "<tbody>";
            echo "<tr>";
              echo "<td>".$row['titulo'] . "</td>";
              	echo "<td><a href='editar.php?idEditar=" . $row['id'] . "' class='btn loginb'>editar</a></td>";
            echo "</tr>";
          echo "</tbody>";
        }

      ?>
		</table>
    <br><br>

    <h1 class="text-center" style="color:white;">Usuarios</h1>
    <table class="table text-center tabla" style="; width:80%; margin: auto;">
       <!-- color de la tabla -->
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">enviar</th>
					<th scope="col">eliminar</th>
          <th scope="col">editar</th>
				</tr>
			</thead>
      <?php
        while ($row = mysqli_fetch_array($resultado2)) {
          echo "<tbody>";
            echo "<tr>";
              echo "<td>".$row['nick'] . "</td>";
                echo "<td><a href='mail.php?idEnviar=" . $row['id'] . "' class='btn loginb'>Enviar</a></td>";
                echo "<td><a href='eliminar.php?idEliminar=" . $row['id'] . "' class='btn loginb'>Eliminar</a></td>";
                echo "<td><a href='editarRegistro.php?idEditar=" . $row['id'] . "' class='btn loginb'>Editar</a></td>";
            echo "</tr>";
          echo "</tbody>";
        }

      ?>
		</table>

  </body>
</html>
