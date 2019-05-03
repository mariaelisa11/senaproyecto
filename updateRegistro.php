<?php
  require "php/conexion.php";
  $correo = $_POST["correo"];
  $nom = $_POST["nombre"];
  $nick = $_POST["nick"];
  $password = $_POST["password"];
  $id = $_POST["identidad"];

  $sql = "UPDATE resgistro SET nombre='$nom', nick='$nick',password='$password',correo='$correo' WHERE id = '$id'";
  echo $sql;
  $resultado = mysqli_query($conexion, $sql);
  echo "<script> location.href='editor.php' </script>";
 ?>
