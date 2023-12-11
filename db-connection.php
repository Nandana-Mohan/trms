<?php

$servername = "trmsserver1.mysql.database.azure.com";
$username = "nandana";
$password = "March14032003";
$databasename = "trms";
$port = 3306;  // This is the default MySQL port

$conn = mysqli_connect($servername, $username, $password, $databasename, $port);

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ".mysqli_connect_errno();
}

?>
