<!-- None Laravel Session -->
@php

global $conn;

try {
    $conn = new PDO("sqlite:__DIR__.'/database/create_SQLite.db'");
    $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected Successufully <br />";
}
catch (PDOException $e)
{
    echo "Connection Error: " . $e->getMessage();
}
session_start();
@endphp

