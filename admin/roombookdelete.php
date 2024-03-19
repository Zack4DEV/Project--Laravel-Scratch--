<?php
inlcude '../config.php';

$id = $_GET['id'];
$idRoom = $_GET['idroom'];

$deletesql = $conn->prepare("DELETE FROM roombook WHERE id = $id");
$deletesql->execute();

$resultDeleteBooking = $deletesql->fetchColumn();
if($resultDeleteBooking > 0){
header("Location: roombook.php");
}
?>