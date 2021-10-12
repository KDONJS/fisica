<?php

$servername = "localhost";
$database = "fisica_pruebas";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("error de conexion: " . mysqli_connect_error());
}
echo "conecxion satisfactoria";
mysqli_close($conn);

?>