<?php

$servername = "trmsql.mysql.database.azure.com";
$username = "nandana";
$password = "March14032003";
$databasename = "trms";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ".mysqli_connect_errno();
}

?>
