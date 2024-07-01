<?php

include('conexion.php');

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];

$consulta="INSERT INTO usuario (nombre,apellidos,edad,telefono)
VALUES ('$nombre','$apellidos','$edad','$telefono')";
//$ejecutar=mysqli_query($conn,$consulta);
$ejecutar=mysqli_query($conn,$consulta);
if($ejecutar){

    echo '<div class="col-12 col-md-4">
    <button id="background" class="btn btn-outline-primary btn-block btn-lg">Custom
        Background</button>
</div>';
    header('location:../tabla.php');
    exit;

}else{

    echo "no se pudo registrar lo siento amigo ";
}


?>