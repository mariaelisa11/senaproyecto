<?php
  $foto = $_FILES["foto"];
  $titulo = $_POST["titulo"];
  $texto = $_POST["texto"];
  $error = $_FILES["foto"]["error"];
  $id = $_POST["identidad"];

  require "php/conexion.php";

  if ($foto["error"] == "0") {

    if ($foto["type"] =="image/jpeg" || $foto["type"] =="image/png") {
      if ($foto["size"] <= 210000) {
        move_uploaded_file($foto["tmp_name"],"img/". $foto["name"]);
        $ruta = "img/" . $foto["name"];
        $sql ="UPDATE infografias SET titulo = '$titulo', texto = '$texto' , foto = '$ruta'  WHERE  id = '$id' ";
        $result = mysqli_query($conexion, $sql);

       
        //echo "si";
        //header("location: editor.php");
        echo "<script> location.href='editor.php'</script>";
        
      }else{
        //echo "Seleccione una imagen de menor peso";
        //header("location: editar.php?error3=dato&idEditar=$id");
        echo "<script> location.href='editar.php?error3=dato&idEditar=$id'</script>";
      }
    }else{
      //echo "seleccionar una imagen";
      //header("location: editar.php?error2=dato&idEditar=$id");
      echo "<script> location.href='editar.php?error2=dato&idEditar=$id'</script>";
    }
  }else if($error != "1") {
    $ruta = "img/" . $foto["name"];
    $sql ="UPDATE infografias SET titulo = '$titulo', texto = '$texto' WHERE id = '$id' ";
    $result = mysqli_query($conexion, $sql);
    //header("location: editor.php");
    echo "<script> location.href='editor.php'</script>";
    //echo "holi";
  }
  else {
    header("location: editar.php?error1=dato&idEditar=$id");
    //echo "<script> location.href='editar.php?error1=dato&idEditar=$id'</script>";
    //echo "negas";
  }

 ?>
