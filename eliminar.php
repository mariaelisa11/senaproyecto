<?php
$eliminar = $_GET["idEliminar"];
require "php/conexion.php";
$sql="DELETE FROM resgistro WHERE id='$eliminar'";
$resultado = mysqli_query($conexion,$sql);

  //header("location:editor.php");
  echo "<script> location.href='editor.php'</script>";
 ?>
