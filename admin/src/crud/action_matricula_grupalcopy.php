 <?php
include('config.php');
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL, 'es_ES');

$metodoAction  = (int) filter_var($_REQUEST['metodo'], FILTER_SANITIZE_NUMBER_INT);

//$metodoAction ==1, es crear un registro nuevo
if($metodoAction == 1){

   
    $a_paterno      = filter_var($_POST['a_p'], FILTER_SANITIZE_STRING);
    $a_materno       = filter_var($_POST['a_m'], FILTER_SANITIZE_STRING);
    $namefull       = filter_var($_POST['nombress'], FILTER_SANITIZE_STRING);
    $direccion        = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
   
   
    $dni        = filter_var($_POST['dni'], FILTER_SANITIZE_STRING);
  

    $celular       = filter_var($_POST['celar'], FILTER_SANITIZE_STRING);
    $correo       = filter_var($_POST['correoo'], FILTER_SANITIZE_STRING);
    $exc       = filter_var($_FILES['excell']["name"], FILTER_SANITIZE_STRING);
   
    $fechaRegistro  = date('d-m-Y H:i:s A', time()); 


   // $sexo           = filter_var($_POST['sexo'], FILTER_SANITIZE_STRING);
   // $section        = filter_var($_POST['section'], FILTER_SANITIZE_STRING);



 


    //Informacion de la foto
    $filename       = $_FILES["foto"]["name"]; //nombre de la foto
    $tipo_foto      = $_FILES['foto']['type']; //tipo de archivo
    $sourceFoto     = $_FILES["foto"]["tmp_name"]; //url temporal de la foto
    $tamano_foto    = $_FILES['foto']['size']; //tamaño del archivo (foto)



    
//Se comprueba si la foto a cargar es correcto observando su extensión y tamaño, 100000 = 1 Mega 
if (!((strpos($tipo_foto, "PNG") || strpos($tipo_foto, "jpg") && ($tamano_foto < 100000)))) {
    //código para renombrar la foto 
    $logitudPass 	        = 8;
    $newNameFoto            = substr( md5(microtime()), 1, $logitudPass);
    $explode                = explode('.', $filename);
    $extension_foto         = array_pop($explode);
    $nuevoNameFoto          = $newNameFoto.'.'.$extension_foto;

    //Verificando si existe el directorio, de lo contrario lo creo
    $dirLocal       = "primaria";
    if (!file_exists($dirLocal)) {
        mkdir($dirLocal, 0777, true);
    }

    $miDir 		      = opendir($dirLocal); //Habro mi  directorio
    $urlFotoAlumno    = $dirLocal.'/'.$nuevoNameFoto; //Ruta donde se almacena la factura.

    //Muevo la foto a mi directorio.
    if(move_uploaded_file($sourceFoto, $urlFotoAlumno)){
        $SqlInsertAlumno = ("INSERT INTO matricula_grupal(
            
            a_paterno,
            a_materno,
            namefull,
            direccion,
           
           
            dni,
           celular,
            correo,
            excel,
           
            foto,
           
            fechaRegistro
          
        )
        VALUES(
         
  '".  $a_paterno."',
    '". $a_materno."',
    '". $namefull."',
    '". $direccion."',
   
  
    '". $dni."',
    '". $celular."',
   '". $correo."',
   '". $exc."',
     '".$nuevoNameFoto."',
    
'". $fechaRegistro."'


         
          
        )");
        $resulInsert = mysqli_query($con, $SqlInsertAlumno);
        ///print_r( $SqlInsertAlumno);

    }
    closedir($miDir);
    echo"exitosa";
    header("Location:../../../matricula_grupal.php?a=1");

  }else{
    header("Location:../../../matricula_grupal.php?errorimg=1");
   echo"fallo exitosa";
  }
}


//Actualizar registro del Alumno
if($metodoAction == 2){
    $idAlumno      = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);

    $namefull       = filter_var($_POST['namefull'], FILTER_SANITIZE_STRING);
    
    $videos       = filter_var($_POST['movie'], FILTER_SANITIZE_STRING);
   // $cedula         = (int) filter_var($_POST['cedula'], FILTER_SANITIZE_NUMBER_INT);
   // $sexo           = filter_var($_POST['sexo'], FILTER_SANITIZE_STRING);
   // $section        = filter_var($_POST['section'], FILTER_SANITIZE_STRING);
//
    $UpdateAlumno    = ("UPDATE primer_grado
        SET namefull='$namefull',
        videos='$videos'
     
        WHERE id='$idAlumno' ");
    $resultadoUpdate = mysqli_query($con, $UpdateAlumno);


    //Verificando si existe foto del alumno para actualizar
    if (!empty($_FILES["foto"]["name"])){
            $filename       = $_FILES["foto"]["name"]; //nombre de la foto
            $tipo_foto      = $_FILES['foto']['type']; //tipo de archivo
            $sourceFoto     = $_FILES["foto"]["tmp_name"]; //url temporal de la foto
            $tamano_foto    = $_FILES['foto']['size']; //tamaño del archivo (foto)

            //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
        if (!((strpos($tipo_foto, "PNG") || strpos($tipo_foto, "jpg") && ($tamano_foto < 100000)))) {
            $logitudPass 	        = 8;
            $newNameFoto            = substr( md5(microtime()), 1, $logitudPass);
            $explode                = explode('.', $filename);
            $extension_foto         = array_pop($explode);
            $nuevoNameFoto          = $newNameFoto.'.'.$extension_foto;

            //Verificando si existe el directorio, de lo contrario lo creo
            $dirLocal       = "primaria";
            $miDir 		      = opendir($dirLocal); //Habro mi  directorio
            $urlFotoAlumno    = $dirLocal.'/'.$nuevoNameFoto; //Ruta donde se almacena la factura.

            //Muevo la foto a mi directorio.
        if(move_uploaded_file($sourceFoto, $urlFotoAlumno)){
            $updateFoto = ("UPDATE segundo_grado SET foto='$nuevoNameFoto' WHERE id='$idAlumno' ");
            $resultFoto = mysqli_query($con, $updateFoto);
        }
    }else{
        header("Location:../1primaria.php?errorimg=1");
    }
  }

  header("Location:../1primaria.php?update=1&id=$idAlumno");
 }



//Eliminar Alumno
if($metodoAction == 3){
    $idAlumno  = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);
    $namePhoto = filter_var($_REQUEST['namePhoto'], FILTER_SANITIZE_STRING);

    $SqlDeleteAlumno = ("DELETE FROM galerias WHERE  id='$idAlumno'");
    $resultDeleteAlumno = mysqli_query($con, $SqlDeleteAlumno);
    
    if($resultDeleteAlumno !=0){
        $fotoAlumno = "primaria/".$namePhoto;
        unlink($fotoAlumno);
    }
    
    $msj ="Galeria Borrado correctamente.";
   // header("Location:../galerias.php?deletAlumno=1&mensaje=".$msj);
 
}

?>