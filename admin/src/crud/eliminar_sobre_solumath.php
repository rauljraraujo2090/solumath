<?php
include('config.php');    
$id=$_REQUEST['Id'];  //request =pedido 

$eliminar="DELETE  from sobre_sulemath where id='$id'";

$ejecutar=mysqli_query($con,$eliminar);
if($ejecutar){

    

header('location:../sobre_sulemath.php');

}
?>