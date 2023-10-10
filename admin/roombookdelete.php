<?php


$id = $_GET['id'];
$idRoom = $_GET['idroom'];

$deletesql = "DELETE FROM roombook WHERE id = $id;--'";

$result = mysqli_query($conn, $deletesql);

header("Location:roombook");

?>