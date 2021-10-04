<?php

$CarpetaDireccion = "imagenes";
$ruta_archivo = $CarpetaDireccion ."/". $_FILES["archivo"]["name"];
$uploadOk = 1;
//contiene el tipo de imagen que se va a subir
$Tipo_de_imagen = strtolower(pathinfo($ruta_archivo,PATHINFO_EXTENSION));


// Verifico si el archivo existe
if (file_exists($ruta_archivo)) 
{
    echo "No existe el archivo";
    $uploadOk = 0;
}
  
  // Verifico que el archivo no seas mas del peso permitido
if ($_FILES["archivo"]["size"] > 500000) 
{
    echo "elija un archivo mas liviano";
    $uploadOk = 0;
}
  
  // Aviso que tipo de formatos no son aceptados
if($Tipo_de_imagen != "jpg" && $Tipo_de_imagen != "png" && $Tipo_de_imagen != "jpeg"
  && $Tipo_de_imagen != "gif" ) 
{
    echo "No se permite ese tipo de imagen.";
    $uploadOk = 0;
}
  
  // Aviso de si no se subio el archivo
if ($uploadOk == 0) 
{
    echo "No se subio la imagen";
} 
else 
{
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta_archivo);
    header("Location: Insta-gramo.php");
    exit();
}

?>

