<?php

//$hostName = "localhost";
//$db = "database_hotel";
//$user = "root";
//$passwd = "";

global $conn;
try {
   // $conn = new PDO('mysql:host=$hostName;dbname=$db, $user, $passwd');
    $conn = new PDO('sqlite:database/DB.db');
    $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected Successufully <br />";
}
catch (PDOException $e)
{
    echo "Connection Error: " . $e->getMessage();
}
  ?>
