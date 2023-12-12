<?php
$servername = "127.0.0.1";
$username = "nandana";
$password = "March14032003";
$databasename = "trms";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";

// Perform database operations or close the connection as needed

$conn->close();
?>
