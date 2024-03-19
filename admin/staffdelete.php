<?php
inlcude '../config.php';

$id = $_GET['id'];

$roomdeletesql = $conn->prepare("DELETE FROM staff WHERE id = $id");
$roomdeletesql->execute();

$resultStaffDelete = $roomdeletesql->fetchColumn(PDO::FETCH_ASSOC);
if ($resultStaffDelete > 0){
header("Location: staff.php");
}
?>