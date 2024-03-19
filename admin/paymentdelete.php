<?php
include '../config.php';

$id = $_GET['id'];

$deletesql = $conn->prepare("DELETE FROM payment WHERE id = $id");
$deletesql->execute();
$resultPaymentDelete = $deletesql->fetchColumn(PDO::FETCH_ASSOC);
if($resulPaymentDelete > 0){
header("Location: payment.php");
}
?>
