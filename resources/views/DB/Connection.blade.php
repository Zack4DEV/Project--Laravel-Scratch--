@php

global $conn;

try{
$conn = new PDO("sqlite:__DIR__.'DB.sql'");

}catch(PDOException $e){

    echo "Connection failed: " . $e->getMessage();
}

@endphp
