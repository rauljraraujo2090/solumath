<?php
include('config.php');    
$id=$_REQUEST['Id'];  //request =pedido 

$eliminar="DELETE  from matricula_individual  where id='$id'";

$ejecutar=mysqli_query($con,$eliminar);
if($ejecutar){

    

header('location:../matricula_individual.php');

}
?>