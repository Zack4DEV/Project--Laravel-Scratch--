<?php
inlcude '../config.php';

$id = $_GET['id'];

$deletesql = $conn->query("DELETE FROM roombook WHERE id = $id");
$deletesql->execute();

$result = $deletesql->fetchColumn();
if($result > 0){
header("Location: roombook.php");
}
?>