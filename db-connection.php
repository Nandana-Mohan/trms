<?php
$servername = "trmsserver1.mysql.database.azure.com";
$username = "nandana";
$password = "March14032003";
$databasename = "trms";
$port = 3306;

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$databasename;charset=utf8", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
