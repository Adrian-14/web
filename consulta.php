<?php
require "conn.php";

$consultar = "SELECT * FROM alumnos";
$query = mysqli_query($conn, $consultar);
$array =  mysqli_fetch_array($query);

?>