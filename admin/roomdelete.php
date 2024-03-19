<?php
inlcude '../config.php';

$id = $_GET['id'];

$roomdeletesql = $conn->prepare("DELETE FROM room WHERE id = $id");
$roomdeletesql->execute();
$resultRoomDelete = $roomdeletesql->fetchColumn(PDO::FETCH_ASSOC);
if($resultRoomDelete > 0){
header("Location: room.php");
}
?>