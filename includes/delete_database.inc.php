<?php
include_once 'conn.inc.php';

$number = $_GET['a'];
$query = "DELETE FROM infos WHERE id='$number'";
$data = mysqli_query($connection, $query);
if($data) {
    echo "Record deleted";
} 
header("Location: ../index.php");