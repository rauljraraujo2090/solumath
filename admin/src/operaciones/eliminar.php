<?php
include('conexion.php');    
$id=$_REQUEST['Id'];  //request =pedido 

$eliminar="DELETE  from usuario  where id='$id'";

$ejecutar=mysqli_query($conn,$eliminar);
if($ejecutar){

    

header('location:../tabla.php');

}
?>