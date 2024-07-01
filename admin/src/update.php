<?php
include('operaciones/conexion.php');
$ID=$_POST['txtid'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];

$sql = "UPDATE usuario set nombre='$nombre', apellidos='$apellido', edad='$edad', telefono='$telefono' WHERE id = '$ID'";
$rta = mysqli_query($conn, $sql);
header("Location: tabla.php");
?>