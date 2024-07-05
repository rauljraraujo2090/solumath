<?php
include('config.php');    
$id=$_REQUEST['Id'];  //request =pedido 

$eliminar="DELETE  from sexto_grado  where id='$id'";

$ejecutar=mysqli_query($con,$eliminar);
if($ejecutar){

    

header('location:../6primaria.php');

}
?>