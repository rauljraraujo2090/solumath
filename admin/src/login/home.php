
    <?php 

session_start();
error_reporting(0);
$varsesion=$_SESSION['usuarios'];

if($varsesion==null or $varsesion=''){
 
echo "usted no tiene autorizacion";
die();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola mundo</h1>
    <a href="cerrar_sesion.php">CERRAR SESION</a>
</body>
</html>