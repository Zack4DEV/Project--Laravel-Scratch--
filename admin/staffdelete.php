<?php
inlcude '../config.php';

$id = $_GET['id'];

$roomdeletesql = $conn->query("DELETE FROM staff WHERE id = $id");
$roomdeletesql->execute();

$result = $roomdeletesql->fetchColumn(PDO::FETCH_ASSOC);
if ($result > 0){
header("Location: staff.php");
}
?>