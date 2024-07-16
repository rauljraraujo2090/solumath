<?php
include('config.php');
$id=$_GET['id'];
$sql="SELECT * FROM matricula_grupal where id='$id'";

$resultado=mysqli_query($con,$sql);

if(mysqli_num_rows($resultado)==1){

    $fila=mysqli_fetch_assoc($resultado);
    $archivo=$fila['excel'];
    $ruta_archivo="excell/".$archivo;
    //verificar que el archivo exista en el servidor

    if(file_exists($ruta_archivo)){

        //enviar el archivo al navegador

        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.$archivo.'"');
        readfile($ruta_archivo);
    }else{
        echo"El archivo no existe en el servidor";
    }
}else{
     echo"El archivo no se encontro en la base de datos ";
}


?>