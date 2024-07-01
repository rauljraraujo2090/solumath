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

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'rauljr');
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>