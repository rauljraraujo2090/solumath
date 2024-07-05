<?php

//$usuario  = "root";
//$password = "";
//$servidor = "localhost";
//$basededatos = "table_alumnos";
//$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
//$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");





//
//$host = 'localhost'; // Host de la base de datos
//$dbname = 'rauljr'; // Nombre de la base de datos
//$user = 'postgres'; // Usuario de la base de datos
//$password = 'Neymar_2090_jr'; // Contraseña de la base de datos
//
//try {
//    // Conexión con PDO
//    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
//    
//    // Configurar PDO para manejar errores en modo de excepción
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    
//    echo "Conexión exitosa";
//} catch(PDOException $e) {
//    // Manejar errores
//    echo "Error de conexión: " . $e->getMessage();
//}
//


// Datos de conexión a la base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "solumath";
//
//
//    // Conexión utilizando PDO
    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($con){

        //echo "conexion exitosa";
    }else{
        echo "conexion fallida";

    }


//$DB_HOST = 'localhost';
// $DB_USER = 'root';
// $DB_PASS = '';
// $DB_NAME = 'solumath';
// 
// try{
//  $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
//  $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch(PDOException $e){
//  echo $e->getMessage();
// }



    

    