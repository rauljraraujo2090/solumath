<?php
include('config.php');    
$id=$_REQUEST['Id'];  //request =pedido 

$eliminar="DELETE  from matricula_grupal  where id='$id'";

$ejecutar=mysqli_query($con,$eliminar);
if($ejecutar){

    

header('location:../matricula_grupal.php');

}
?>