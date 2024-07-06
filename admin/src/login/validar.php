<?php 

$usuario=$_POST['usuarios'];
$password=$_POST['password'];

session_start();

$_SESSION['usuarios']=$usuario;
include('conexion.php');


$consulta="SELECT * FROM login where usuario='$usuario'and contrasena='$password'";


$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);


if($filas){


    header("location:../galerias.php");


}else{
    ?>
    <?php 
include("login.php");
?>
<h1 class="bad">ERROR DE LA AUTENTICACION</h1>
<?php 
}

mysqli_free_result($resultado);
mysqli_close($con);

?>