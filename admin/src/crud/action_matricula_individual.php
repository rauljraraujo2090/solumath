 <?php
    include('config.php');
    date_default_timezone_set("America/Bogota");
    setlocale(LC_ALL, 'es_ES');

    $metodoAction  = (int) filter_var($_REQUEST['metodo'], FILTER_SANITIZE_NUMBER_INT);

    //$metodoAction ==1, es crear un registro nuevo
    if ($metodoAction == 1) {

        $fechaRegistro  = date('d-m-Y H:i:s A', time());
        $a_paterno      = filter_var($_POST['a_p'], FILTER_SANITIZE_STRING);
        $a_materno       = filter_var($_POST['a_m'], FILTER_SANITIZE_STRING);
        $namefull       = filter_var($_POST['nombress'], FILTER_SANITIZE_STRING);
        $direccion        = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
        $colegio_procedencia      = filter_var($_POST['c_procedencia'], FILTER_SANITIZE_STRING);
        $grado        = filter_var($_POST['grado'], FILTER_SANITIZE_STRING);
        $dni        = filter_var($_POST['dni'], FILTER_SANITIZE_STRING);
        $fecha_nacimiento        = filter_var($_POST['f_nacimiento'], FILTER_SANITIZE_STRING);

        $celular       = filter_var($_POST['celar'], FILTER_SANITIZE_STRING);
        $correo       = filter_var($_POST['correoo'], FILTER_SANITIZE_STRING);
        $me_matriculo       = filter_var($_POST['me_matriculo'], FILTER_SANITIZE_STRING);
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
            $logitudPass             = 8;
            $newNameFoto            = substr(md5(microtime()), 1, $logitudPass);
            $explode                = explode('.', $filename);
            $extension_foto         = array_pop($explode);
            $nuevoNameFoto          = $newNameFoto . '.' . $extension_foto;

            //Verificando si existe el directorio, de lo contrario lo creo
            $dirLocal       = "primaria";
            if (!file_exists($dirLocal)) {
                mkdir($dirLocal, 0777, true);
            }

            $miDir               = opendir($dirLocal); //Habro mi  directorio
            $urlFotoAlumno    = $dirLocal . '/' . $nuevoNameFoto; //Ruta donde se almacena la factura.

            //Muevo la foto a mi directorio.
            if (move_uploaded_file($sourceFoto, $urlFotoAlumno)) {
                $SqlInsertAlumno = ("INSERT INTO matricula_individual(
            
            a_paterno,
            a_materno,
            namefull,
            direccion,
            procedencia_c,
            grado,
            dni,
            fecha_nacimiento,
            celular,
            correo,
            me_matriculo,
            foto,
           
            fechaRegistro
          
        )
        VALUES(
         
  '" .  $a_paterno . "',
    '" . $a_materno . "',
    '" . $namefull . "',
    '" . $direccion . "',
    '" . $colegio_procedencia . "',
    '" . $grado . "',
    '" . $dni . "',
    '" . $fecha_nacimiento . "',
    '" . $celular . "',
      '" . $correo . "',
    '" . $me_matriculo . "',
     '" . $nuevoNameFoto . "',
    
'" . $fechaRegistro . "'


         
          
        )");
                $resulInsert = mysqli_query($con, $SqlInsertAlumno);
                ///print_r( $SqlInsertAlumno);

            }
            closedir($miDir);
            echo "exitosa";
            header("Location:../../../matricula_individual.php?a=1");
        } else {
            header("Location:../../../matricula_individual.php?errorimg=1");
            echo "fallo exitosa";
        }
    }


    //Actualizar registro del Alumno
    if ($metodoAction == 2) {
        $idAlumno      = (int) filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);

        $a_paterno      = filter_var($_POST['a_p'], FILTER_SANITIZE_STRING);
        $a_materno       = filter_var($_POST['a_m'], FILTER_SANITIZE_STRING);
        $namefull       = filter_var($_POST['nombress'], FILTER_SANITIZE_STRING);
        $direccion        = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
        $colegio_procedencia      = filter_var($_POST['c_procedencia'], FILTER_SANITIZE_STRING);
        $grado        = filter_var($_POST['grado'], FILTER_SANITIZE_STRING);
        $dni        = filter_var($_POST['dni'], FILTER_SANITIZE_STRING);
        $fecha_nacimiento        = filter_var($_POST['f_nacimiento'], FILTER_SANITIZE_STRING);

        $celular       = filter_var($_POST['celar'], FILTER_SANITIZE_STRING);
        $correo       = filter_var($_POST['correoo'], FILTER_SANITIZE_STRING);
        $me_matriculo       = filter_var($_POST['me_matriculo'], FILTER_SANITIZE_STRING);
        // $cedula         = (int) filter_var($_POST['cedula'], FILTER_SANITIZE_NUMBER_INT);
        // $sexo           = filter_var($_POST['sexo'], FILTER_SANITIZE_STRING);
        // $section        = filter_var($_POST['section'], FILTER_SANITIZE_STRING);
        //
        $UpdateAlumno    = ("UPDATE matricula_individual
        SET a_paterno='$a_paterno',
    a_materno= '$a_materno',
    namefull='$namefull',
    direccion='$direccion',
    procedencia_c='$colegio_procedencia',
    grado='$grado',
    dni='$dni',
    fecha_nacimiento='$fecha_nacimiento',
    celular='$celular',
    correo= '$correo',
    me_matriculo='$me_matriculo' WHERE id='$idAlumno'");
        $resultadoUpdate = mysqli_query($con, $UpdateAlumno);


        //Verificando si existe foto del alumno para actualizar
        if (!empty($_FILES["foto"]["name"])) {
            $filename       = $_FILES["foto"]["name"]; //nombre de la foto
            $tipo_foto      = $_FILES['foto']['type']; //tipo de archivo
            $sourceFoto     = $_FILES["foto"]["tmp_name"]; //url temporal de la foto
            $tamano_foto    = $_FILES['foto']['size']; //tamaño del archivo (foto)

            //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
            if (!((strpos($tipo_foto, "PNG") || strpos($tipo_foto, "jpg") && ($tamano_foto < 100000)))) {
                $logitudPass             = 8;
                $newNameFoto            = substr(md5(microtime()), 1, $logitudPass);
                $explode                = explode('.', $filename);
                $extension_foto         = array_pop($explode);
                $nuevoNameFoto          = $newNameFoto . '.' . $extension_foto;

                //Verificando si existe el directorio, de lo contrario lo creo
                $dirLocal       = "primaria";
                $miDir               = opendir($dirLocal); //Habro mi  directorio
                $urlFotoAlumno    = $dirLocal . '/' . $nuevoNameFoto; //Ruta donde se almacena la factura.

                //Muevo la foto a mi directorio.
                if (move_uploaded_file($sourceFoto, $urlFotoAlumno)) {
                    $updateFoto = ("UPDATE matricula_individual SET foto='$nuevoNameFoto' WHERE id='$idAlumno' ");
                    $resultFoto = mysqli_query($con, $updateFoto);
                }
            } else {
                header("Location:../notificacion.php?errorimg=1");
            } 
        }
echo"error";
        //header("Location:../matricula_individual.php?update=1&id=$idAlumno");
    }




    ?>