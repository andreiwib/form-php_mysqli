<?php

$host = "localhost";
$name = "root";
$password = "";
$dbname = "contacts";
$connection = mysqli_connect($host, $name, $password, $dbname);
if(!$connection) {
    die("Could not connect to database:" .mysql_error());
}
