<?php
inlcude '../config.php';

$id = $_GET['id'];

$roomdeletesql = $conn->prepare("DELETE FROM room WHERE id = $id");
$roomdeletesql->execute();
$result = $roomdeletesql->fetchAll(PDO::FETCH_ASSOC);

header("Location:room.php");

?>