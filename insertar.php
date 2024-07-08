<?php
include('conexion.php');



if(isset($_POST)){
  if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['celular']) >= 1 
  && strlen($_POST['correo']) >= 1 && strlen($_POST['sms']) >= 1) {
      $nombre = trim($_POST['nombre']);
      $apellido = trim($_POST['apellido']);
      $celular = trim($_POST['celular']);
      $correo = trim($_POST['correo']);
      $sms= trim($_POST['sms']);


      $consulta="INSERT INTO   mensaje_contacto (nombre,apellidos,celular,correo,mensaje) VALUES ('$nombre','$apellido','$celular','$correo','$sms')";

      $ejecutar=mysqli_query($con,$consulta );
       if($ejecutar){
          
          
       //  echo "exitosa";
      
      
       }else{
        //  header("location:../../../contactos.php");
        echo "error";
      
          
       }
}
}




//$nombre=$_POST['nombre'];
//$apellidos=$_POST['apellido'];
//$celular=$_POST['celular'];
//
//$correo=$_POST['correo'];
//$mensaje=$_POST['sms']; 
//
// 
//$consulta="INSERT INTO   mensaje_contacto (nombre,apellidos,celular,correo,mensaje) VALUES ('$nombre','$apellidos','$celular','$correo','$mensaje')";
//
//$ejecutar=mysqli_query($con,$consulta );
// if($ejecutar){
//    
//    
//   echo "exitosa";
//
//
// }else{
//  //  header("location:../../../contactos.php");
//  echo "error";
//
//    
// }
//
