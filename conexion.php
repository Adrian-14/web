<?php 

$servername = 'localhost';
$user = 'root';
$pass = ' ';
$database = 'tienda';

$conn = mysqli_connect($servername,$user,$pass);
if(!$conn){
    die('Error : ' .mysqli_connect_errno());
}
echo 'Conexion Exitosa';
$conn->close();

?>