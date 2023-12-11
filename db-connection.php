<?php

$servername = "nandana";
$username = "root";
$password = "";
$databasename = "trms";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ".mysqli_connect_errno();
}

?>