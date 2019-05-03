<?php
$nom = $_POST ["nombre"];
$comen = $_POST["comentario"];
$correo = "mariaelisamt11@gmail.com";

$asunto = "Mensaje enviado por Movy Rute";
$mensaje = "<b> Hola, </b>".$nom ."";
$mensaje .= "<b> Asunto: </b>".$comen;
$tipoContenido = "Content-type: text/html;charset=UTF-8";

mail($correo, $asunto, $mensaje, $tipoContenido);
echo "Mensaje enviado: <br>";
echo $mensaje;







?>