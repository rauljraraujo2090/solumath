<?php

include('conexion.php');


$nombre=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];
$mensaje=$_POST['sms'];

$consulta="INSERT INTO mensaje_contacto (nombre,apellidos,celular,correo,mensaje)
VALUES ('$nombre','$apellidos','$celular','$correo','$mensaje')";
//$ejecutar=mysqli_query($conn,$consulta);
$ejecutar=mysqli_query($conn,$consulta);
if($ejecutar){
    

   

   

   
    header('location:../../../contactos.php');
    exit;

}else{

    echo "no se pudo registrar lo siento amigo ";
}


?>