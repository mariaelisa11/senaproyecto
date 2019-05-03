<?php
$nom = $_POST["nom"];
$com = $_POST["comentario"];
$correo = $_POST["cor"];

$asunto = "Mensaje enviado por Movy Rute";
$mensaje = "Hola, gracias por visitar nuestro sitio<br>" .$nom;
$mensaje .= "<br>Tenemos algo que contarte<br> " . $com;
$tipoContenido = "Content-type: text/html;charset=UTF-8";

mail($correo, $asunto, $mensaje, $tipoContenido);

//echo "<script> location.href='editor.php'</script>";

echo $mensaje;





 ?>
