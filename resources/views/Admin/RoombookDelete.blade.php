<!-- None Laravel Controllers -->

@php
$id = $_GET['id'];
$query = "DELETE FROM roombook WHERE id = ?";

//$sql = $conn->query($query);
$delete = $conn->prepare($query);
$resultdel = $delete->execute(array($id));

@endphp