<?php
// Datos de conexión a la base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rauljr";


    // Conexión utilizando PDO
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($conn){

        echo "conexion exitosa";
    }else{
        echo "conexion fallida";

    }



    

    