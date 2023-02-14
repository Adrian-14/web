<?php
require "conn.php";

$total = "SELECT * FROM registro";
if($query = mysqli_query($conn, $total)){
    $rowcount =  mysqli_num_rows($query);
}

$totalinstructor = "SELECT * FROM maestros";
if($query = mysqli_query($conn, $totalinstructor)){
    $rowcountins = mysqli_num_rows($query);
}
?>