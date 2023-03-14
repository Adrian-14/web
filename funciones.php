<?php
include 'conn.php';

function delete($database,$field_id, $id){
    $sql = "delete from ".$database." where ".$field_id."=".$id."";
    return $sql;
}
?>