@php

$roombookrow = DB::select("SELECT * FROM roombook");
$staffrow = DB::select("SELECT * FROM staff");
$roomrow = DB::select("SELECT * FROM room");

$result = DB::select("SELECT cout,finaltotal FROM payment");
$chart_data = '';
$tot = 0;
foreach ($result as $row) {
$chart_data .= "{ date:'" . $row["cout"] . "', profit:" . $row["finaltotal"] * 10 / 100 . "}, ";
$tot = $tot + $row["finaltotal"] * 10 / 100;
}
$chart_data = substr($chart_data, 0, -2);

<div class="databox">
    <div class="box roombookbox">
        <h2>Total Booked Room</h1>
            <h1>
                echo "$roombookrow / $roomrow"
            </h1>
    </div>
    <div class="box guestbox">
        <h2>Total Staff</h1>
            <h1>
                echo "$staffrow"
            </h1>
    </div>
    <div class="box profitbox">
        <h2>Profit</h1>
            <h2>
                echo "$tot"
            <span>$</span></h2>
    </div>
</div>
@endphp
<div class="chartbox">
    <div class="bookroomchart">
        <canvas id="bookroomchart"></canvas>
        <h3 style="text-align: center;margin:10px 0;">Booked Room</h3>
    </div>
    <div class="profitchart">
        <div id="profitchart"></div>
        <h3 style="text-align: center;margin:10px 0;">Profit</h3>
    </div>
</div>
