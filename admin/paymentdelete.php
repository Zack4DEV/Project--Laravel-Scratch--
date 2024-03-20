<?php
include '../config.php';

$id = $_GET['id'];

$deletesql = $conn->query("DELETE FROM payment WHERE id = $id");
$deletesql->execute();
$result = $deletesql->fetchColumn(PDO::FETCH_ASSOC);
if($result > 0){
header("Location: payment.php");
}
?>
