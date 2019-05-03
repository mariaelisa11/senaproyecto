<?php
  $idEditar = $_GET["idEditar"];
  require "php/conexion.php";
  $sql="SELECT * FROM resgistro WHERE id='$idEditar'";
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
    <h1 class="text-center" style="color:white;">Editar</h1>
    <div class="jumbotron login text-center">
      
      <form action="updateRegistro.php" method="post" enctype="multipart/form-data">
        <input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre']; ?>" placeholder="Nombre"><br><br>
        <input class="form-control" type="text" name="nick" value="<?php echo $row['nick']; ?>" placeholder="Nombre"><br><br>
        <p class="text-center alert-success font-weight-bold">
            <?php
            if(isset($_GET["usuario"])){
              echo "Ingrese un correo diferente";
            }
            ?>
          </p>
        <input class="form-control" type="text" name="password" value="<?php echo $row['password']; ?>" placeholder="Nombre"><br><br>
        <input class="form-control" type="text" name="correo" value="<?php echo $row['correo']; ?>" placeholder="Nombre"><br><br>
        <p class="text-center alert-success font-weight-bold">
            <?php
            if(isset($_GET["correo"])){
              echo "Ingrese un correo diferente";
            }
            ?>
          </p>
        <input class="form-control" type="hidden" value="<?php echo $row['id']?>" name="identidad"><br><br>
        <input class="btn btn-success" type="submit" value="Editar">
        <a class="btn btn-success" href="editor.php">Cancelar</a>
      </form>


    </div>


  </body>
</html>
