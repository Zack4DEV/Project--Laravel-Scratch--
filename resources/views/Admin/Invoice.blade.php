<!-- None Laravel Controllers -->

@php
ob_start();

$id = $_GET['id'];

$sql = $conn->query("SELECT * FROM payment  where id = '$id' ");
$sql->execute();
$re = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach ($re as $row) :
    $id = $row['id'];
    $Name = $row['Name'];
    $troom = $row['roomtype'];
    $bed = $row['Bed'];
    $nroom = $row['noofroom'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $meal = $row['meal'];
    $ttot = $row['roomtotal'];
    $mepr = $row['mealtotal'];
    $btot = $row['bedtotal'];
    $fintot = $row['finaltotal'];
    $days = $row['noofdays'];
endforeach;

$type_of_room = 0;
if ($troom == "Superior Room") {
    $type_of_room = 320;
} elseif ($troom == "Deluxe Room") {
    $type_of_room = 220;
} elseif ($troom == "Guest House") {
    $type_of_room = 180;
} elseif ($troom == "Single Room") {
    $type_of_room = 150;
}

if ($bed == "Single") {
    $type_of_bed = $type_of_room * 1 / 100;
} elseif ($bed == "Double") {
    $type_of_bed = $type_of_room * 2 / 100;
} elseif ($bed == "Triple") {
    $type_of_bed = $type_of_room * 3 / 100;
} elseif ($bed == "Quad") {
    $type_of_bed = $type_of_room * 4 / 100;
}

$type_of_meal = 0;
if ($meal == "Room only") {
    $type_of_meal = $type_of_bed * 0;
} elseif ($meal == "Breakfast") {
    $type_of_meal = $type_of_bed * 2;
} elseif ($meal == "Half Board") {
    $type_of_meal = $type_of_bed * 3;
} elseif ($meal == "Full Board") {
    $type_of_meal = $type_of_bed * 4;
}

@endphp