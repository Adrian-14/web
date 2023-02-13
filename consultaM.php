<?php
require "conn.php";

$consultar = "SELECT * FROM maestros";
$query = mysqli_query($conn, $consultar);
$array =  mysqli_fetch_array($query);

?>