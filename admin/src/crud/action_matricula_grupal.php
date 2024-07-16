 <?php
include('config.php');
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL, 'es_ES');

if(isset($_FILES['excel'])){

extract($_POST);
$a_paterno= $_POST['a_p'];
$a_materno= $_POST['a_m'];
$namefull= $_POST['nombress'];
$direccion = $_POST['direccion'];
$dni= $_POST['dni'];
$celular = $_POST['celar'];
$correo= $_POST['correoo'];
$fechaRegistro= date('d-m-Y H:i:s A', time()); 


//definir la carpeta de destino
$carpeta_destino="excell/";

//obtener el nombre y la extension del archivo
$nombre_archivo=basename($_FILES["excel"]["name"]);
$extension=strtolower(pathinfo($nombre_archivo,PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES["excel"]["tmp_name"],$carpeta_destino.$nombre_archivo)){

    $consulta="INSERT INTO matricula_grupal(a_paterno,a_materno,namefull,direccion,dni,celular,correo,excel,fechaRegistro)
    vALUES ('$a_paterno','$a_materno','$namefull','$direccion','$dni','$celular','$correo','$nombre_archivo','$fechaRegistro')";
    $query=mysqli_query($con,$consulta);

    if($query){

      
   header("Location:../../../notificacion.php");
    }else{


        echo"fallo";
    //header("Location:../../../matricula_grupal.php");
    }
}


}

