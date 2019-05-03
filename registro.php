<?php
$nom = $_POST["nombre"];
$nick = $_POST["nick"];
$pas = $_POST["password"];
$correo = $_POST["mail"];

require "php/conexion.php";
$sql = "SELECT * FROM resgistro WHERE nick = '$nick'";
$result = mysqli_query($conexion, $sql);
$count = mysqli_num_rows($result);

$sql3 = "SELECT * FROM resgistro WHERE correo = '$correo'";
$result3 = mysqli_query($conexion, $sql3);
$count3 = mysqli_num_rows($result3);

if($count >= 1){
	echo "<script> location.href='registroFormulario.php?error=usu' </script>";
	//echo "Ingrese un usuario diferente";
}else if($count3 >=3){
	echo "<script>location.href='registroFormulario.php?correo=co'</script>";
	//echo "Ingrese un correo diferente";
}
else{
	$sql2 = "INSERT INTO resgistro (nombre, nick, password, correo) VALUES('$nom', '$nick', '$pas', '$correo')";
	$result2 = mysqli_query($conexion, $sql2);
	echo "<script>location.href='index.php'</script>";
}



?>