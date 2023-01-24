<?php 
$servername = 'localhost';
$user = 'root';
$pass = '';
$database = 'db';

$conn = mysqli_connect($servername,$user,$pass,$database);
if(!$conn){
    die('Error : ' .mysqli_connect_errno());
}
?>