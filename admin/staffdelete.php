<?php
inlcude '../config.php';

$id = $_GET['id'];

$roomdeletesql = $conn->prepare("DELETE FROM staff WHERE id = $id");
$roomdeletesql->execute();

$result = $roomdeletesql->fetchColumn(PDO::FETCH_ASSOC);

header("Location: staff.php");

?>