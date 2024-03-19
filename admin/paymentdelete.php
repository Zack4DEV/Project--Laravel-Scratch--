<?php
include '../config.php';

$id = $_GET['id'];

$deletesql = $conn->prepare("DELETE FROM payment WHERE id = $id");
$deletesql->execute();
$result = $deletesql->fetchColumn(PDO::FETCH_ASSOC);

header("Location: payment.php");

?>
