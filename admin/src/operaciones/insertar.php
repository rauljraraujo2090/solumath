<?php
include('conexion.php');
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$celular=$_POST['celular'];

$correo=$_POST['correo'];
$mensaje=$_POST['sms']; 

 
$consulta="INSERT INTO   mensaje_contacto (nombre,apellidos,celular,correo,mensaje) VALUES ('$nombre','$apellidos','$celular','$correo','$mensaje')";

$ejecutar=mysqli_query($con,$consulta );
 if($ejecutar){
    include('index.php');
    
    header("location:../../../contactos.php");


 }else{
    header("location:../../../contactos.php");

    
 }

