<?php
include '../config.php';

$id = $_GET['id'];

$deletesql = $conn->prepare("DELETE FROM payment WHERE id = $id");
$deletesql->execute();
$result = $deletesql->fetchAll(PDO::FETCH_ASSOC);

header("Location:paymant.php");

?>
