
<?php
include('config.php');

 $excel=$_POST['excel'];
 $insertar="INSERT INTO excel(excell) VALUES('$excel')";

$ejecutar=mysqli_query($con,$insertar);
if($ejecutar){

echo"registro exitoso";
};


?>