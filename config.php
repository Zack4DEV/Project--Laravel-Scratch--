<?php

//$serverName = "127.0.0.1:8080";
//$db = "db";
//$user = "root";
//$passwd = "";

global $conn;
try {
   //$conn = new PDO('mysql:host=$serverName;dbname=$db, $user, $passwd');
    $conn = new PDO('sqlite:database/DB.db');
    $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected Successufully <br />";
}
catch (PDOException $e)
{
    echo "Connection Error: " . $e->getMessage();
}
?>
