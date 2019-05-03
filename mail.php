<?php
  $idEnviar = $_GET["idEnviar"];
  require "php/conexion.php";
  $sql="SELECT * FROM resgistro WHERE id='$idEnviar'";
  $resultado = mysqli_query($conexion, $sql);
  $row = mysqli_fetch_array($resultado);
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
    <title></title>
  </head>
  <body class="mail">
    <br><br>
    <h1 class="text-center titulos">Enviar correo</h1>
    <form class="jumbotron text-center tabla"  action="contactData.php" method="post">
      <fieldset>
      <input class="form-control" type="text" name="nom" value="<?php echo $row['nombre']; ?>"><br><br>
      <input class="form-control" type="text" name="cor" value="<?php echo $row['correo']; ?>"><br><br>
      </fieldset>
      <textarea class="form-control" name="comentario" rows="5"></textarea><br><br>
      <input class="btn loginb" type="submit" value="Enviar">
      <a href="editor.php" class="btn loginb" role="button" aria-pressed="true">Cancelar</a>

    </form>

  </body>
</html>
