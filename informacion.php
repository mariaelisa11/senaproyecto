<?php
$nombre = $_POST['nom'];
$contra = $_POST['pass'];


$link = mysqli_connect("localhost", "root", "", "proyectomovyrute") or die ("Error en la conexión");
$sql = "SELECT * FROM login WHERE usuarios_log = '$nombre' AND contrasena_log = '$contra'";
$result = mysqli_query ($link, $sql);

$count = mysqli_num_rows($result);
if ($count == 1) {
	session_start(); //inicie sesion
	$_SESSION ["usuario"] = $nombre;
	echo "<script> location.href='editor.php' </script>";
}else{
	echo "<script> location.href='login.php?error=info' </script>";
	//header("Location: login.php?error=info");
}

mysqli_close($link);

?>