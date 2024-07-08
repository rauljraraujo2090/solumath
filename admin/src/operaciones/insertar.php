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
    
    echo'<script type="text/javascript">
    alert("Gracias por contactarnos UN ASESOR SE ESTARA PONIENDO EN CONTACTO CON USTED GRACIAS");
    window.location.href="../../../contactos.php";
    </script>';
   // header("location:../../../contactos.php");


 }else{
  header("location:../../../contactos.php");
  

    
 }

