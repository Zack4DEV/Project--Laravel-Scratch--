<?php

/**
$servername = "0.0.0.0";
$username = "root";
$password = "";
$dbname = "database_hotel";
*/
global $conn;

try {
    $conn = new PDO(sqlite:".__DIR__/database/DB.sql");
    /**
    $conn = new PDO("mysql:host=$servername;port=;dbname=$dbname",
        $username, $password);
    */
    $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected Successufully <br />";
}
catch (PDOException $e)
{
    echo "Connection Error: " . $e->getMessage();
}
  ?>
