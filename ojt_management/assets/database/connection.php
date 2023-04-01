<?php

$server = "localhost";
$username = "root";
$password = '';
$database = "ojt_management";

$conn = new mysqli($server, $username, $password, $database);

if(!$conn){
    die("Database is failed".$conn->connect_error());
}

?>