<?php
inlcude '../config';

$id = $_GET['id'];

$roomdeletesql = -$conn->("DELETE FROM room WHERE id = $id");
$roomdeletesql->execute();
$result = $roomdeletesql->fetchAll(PDO::FETCH_ASSOC);

header("Location:room");

?>