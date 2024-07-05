<?php
include('conexion.php');
$descripcion=$_REQUEST['titulo'];
$img=$_FILES['imagen']['name'];
$ruta=$_FILES['imagen']['tmp_name'];
$destino="img/".$img;
copy($ruta,$destino);

$consulta="INSERT INTO galeria(descripcion,img) VALUES ('$descripcion','$img')";

$ejecutar=mysqli_query($conn,$consulta);



if($ejecutar){
   
   header('location:../galeria.php');
        }else{
           echo"ocurrio un error";
        }


//if(isset($_POST['Guardar'])){
//    $nombre = $_POST['titulo'];
//    $imagen = $_FILES['imagen']['name'];
//  
//
//    if(isset($imagen) && $imagen != ""){
//        $tipo = $_FILES['imagen']['type'];
//        $temp  = $_FILES['imagen']['tmp_name'];
//
//       if( !((strpos($tipo,'png') || strpos($tipo,'jpg') || strpos($tipo,'webp')))){
//          $_SESSION['mensaje'] = 'solo se permite archivos jpg, png, webp';
//          $_SESSION['tipo'] = 'danger';
//          
//       }else{
//         $query = "INSERT INTO galeria(descripcion,img) values('$nombre','$imagen')";
//         $resultado = mysqli_query($conn,$query);
//         if($resultado){
//              move_uploaded_file($temp,'imagenes/'.$imagen);   
//             $_SESSION['mensaje'] = 'se ha subido correctamente';
//             $_SESSION['tipo'] = 'success';
//             //header('location:../index.php');
//         }else{
//             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
//             $_SESSION['tipo'] = 'danger';
//         }
//       }
//    }
//}
//
//
?>