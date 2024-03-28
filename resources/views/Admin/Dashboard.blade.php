<!-- None Laravel Controllers -->

@php
$query = $conn->prepare("SELECT * FROM payment");
$res = $query->execute();
$result = $res->fetch(PDO::FETCH_NUM);
$chart_data = '';
$tot = 0;
foreach ($result as $row) :
    $chart_data .= "{ date:'" . $row["cout"] . "', profit:" . $row["finaltotal"] * 10 / 100 . "}, ";
    $tot = $tot + $row["finaltotal"] * 10 / 100;
endforeach;

$chart_data = substr($chart_data, 0, -2);

@endphp
