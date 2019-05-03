<?php
  $idEditar = $_GET["idEditar"];
  require "php/conexion.php";
  $sql= "SELECT * FROM infografias WHERE id='$idEditar'";
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
    <title>Editar</title>
  </head>
  <body class="fondoContacto">
    <h1 class="text-center titulos">Editar</h1>
    <div class="jumbotron editar text-center col-8 col-md-8">
      <p class="text-center alert-danger" role="alert">
        <?php
          if (isset($_GET["error1"])) {
              echo "Selecione una imagen de menor peso";
          }
          else if (isset($_GET["error2"])) {
              echo "seleccione una imagen";
          }
          else if (isset($_GET["error3"])) {
              echo "seleccione una imagen de menor peso";
          }
         ?>
      </p>
      <form class="" action="update.php" method="post" enctype="multipart/form-data">
        <label for="formGroupExampleInput" class="font-weight-bold">Título</label>
        <input class="form-control" type="text" name="titulo" value="<?php echo $row['titulo']; ?>" placeholder="Nombre"><br><br>
        <label for="formGroupExampleInput" class="font-weight-bold">Párrafo</label>
        <textarea class="form-control" name="texto" rows="3"><?php echo $row['texto']; ?></textarea><br><br>
        <input class="form-control-file" type="file" name="foto" accept="image/*"><br><br>
        <input type="hidden" name="identidad" value="<?php echo $row['id']; ?>">
        <input class="btn loginb" type="submit"   value="Editar">
        <a class="btn loginb" href="editor.php">Cancelar</a>
      </form>

    </div>


  </body>
</html>
