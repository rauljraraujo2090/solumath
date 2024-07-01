<?php



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


    // Conexión utilizando PDO
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($conn){

        //echo "conexion exitosa";
    }else{
        echo "conexion fallida";

    }



    

    