@php
session_start();

// roombook
$roombooksql = "SELECT * FROM roombook;--'";
$roombookre = mysqli_query($conn, $roombooksql);
$roombookrow = mysqli_num_rows($roombookre);

// staff
$staffsql = "SELECT * FROM staff;--'";
$staffre = mysqli_query($conn, $staffsql);
$staffrow = mysqli_num_rows($staffre);

// room
$roomsql = "SELECT * FROM room;--'";
$roomre = mysqli_query($conn, $roomsql);
$roomrow = mysqli_num_rows($roomre);

//roombook roomtype
$chartroom1 = "SELECT * FROM roombook WHERE roomtype='Superior Room';--'";
$chartroom1re = mysqli_query($conn, $chartroom1);
$chartroom1row = mysqli_num_rows($chartroom1re);

$chartroom2 = "SELECT * FROM roombook WHERE roomtype='Deluxe Room';--'";
$chartroom2re = mysqli_query($conn, $chartroom2);
$chartroom2row = mysqli_num_rows($chartroom2re);

$chartroom3 = "SELECT * FROM roombook WHERE roomtype='Guest House';--'";
$chartroom3re = mysqli_query($conn, $chartroom3);
$chartroom3row = mysqli_num_rows($chartroom3re);

$chartroom4 = "SELECT * FROM roombook WHERE roomtype='Single Room';--'";
$chartroom4re = mysqli_query($conn, $chartroom4);
$chartroom4row = mysqli_num_rows($chartroom4re);


$query = "SELECT cout,finaltotal FROM payment;--'";
$result = mysqli_query($conn, $query);
$chart_data = '';
$tot = 0;
while ($row = mysqli_fetch_array($result)){
$chart_data .= "{ date:'" . $row["cout"] . "', profit:" . $row["finaltotal"] * 10 / 100 . "}, ";
$tot = $tot + $row["finaltotal"] * 10 / 100;
}

$chart_data = substr($chart_data, 0, -2);

@endphp


<div class="databox">
    <div class="box roombookbox">
        <h2>Total Booked Room</h1>
            <h1>@php
                echo "$roombookrow / $roomrow"
                @endphp
            </h1>
    </div>
    <div class="box guestbox">
        <h2>Total Staff</h1>
            <h1>@php
                echo "$staffrow"
                @endphp</h1>
    </div>
    <div class="box profitbox">
        <h2>Profit</h1>
            <h2>@php
                echo "$tot"
                @endphp<span>$</span></h2>
    </div>
</div>
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
