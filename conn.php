<?php 

$servername = 'localhost';
$user = 'root';
$pass = '';
$database = 'database';

$conn = mysqli_connect($servername,$user,$pass,$database);
if(!$conn){
    die('Error : ' .mysqli_connect_errno());
}
echo 'Conexion Exitosa';

?>