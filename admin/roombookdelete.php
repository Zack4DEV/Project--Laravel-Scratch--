<?php
inlcude '../config';

$id = $_GET['id'];
$idRoom = $_GET['idroom'];

$deletesql = $conn->prepare("DELETE FROM roombook WHERE id = $id");
$deletesql->execute();

$result = $deletesql->fetchAll();

header("Location:roombook");

?>