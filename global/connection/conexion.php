<?php 
$servername = "localhost";
$database = "fisica_pruebas";
$username = "root";
$password = "";

//crear conexión

$conn = mysqli_connect($servername,$database,$username,$password);

if (!$conn) {
    die("no se puede conectar: " . mysqli_connect_error());
}
echo "Se realizo conexion";
mysqli_close($conn);

?>