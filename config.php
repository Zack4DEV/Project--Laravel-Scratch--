<?php

global $conn;

try {
<<<<<<< HEAD
   $conn = new PDO("mysql:host=localhost;dbname=db", 'root', '');
   // $conn = new PDO("sqlite:./database/DB.db");
=======
   //$conn = new PDO("mysql:host=localhost;dbname=db", 'root', '');
    $conn = new PDO("sqlite:./database/DB.db");
>>>>>>> 12f42310 (branch _ origin)
    $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected Successufully <br />";
}
catch (PDOException $e)
{
    echo "Connection Error: " . $e->getMessage();
}
?>
