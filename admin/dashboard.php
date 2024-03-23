<?php
include '../config.php';
//session_start();
//$id = $_SESSION['id'];

// roombook
$roombooksql = $conn->prepare("SELECT * FROM roombook WHERE id = '?'");
$roombookre = $roombooksql->execute();
$roombookrow = (int)  $roombookre->fetch(PDO::FETCH_NUM);

//$roombookrow = (int) $conn->prepare("SELECT * FROM roombook WHERE id = '?'")->execute()->fetch(PDO::FETCH_NUM);

// staff
$staffsql = $conn->prepare("SELECT * FROM staff WHERE id = '?'");
$staffre = $staffsql->execute();
$staffrow = (int) $staffre->fetch(PDO::FETCH_NUM);


//$staffrow = (int)  $conn->prepare("SELECT * FROM staff WHERE id = '?'")->execute()->fetch(PDO::FETCH_NUM);

// room
$roomsql = $conn->prepare("SELECT * FROM room WHERE id = '?'");
$roomre = $roomsql->execute();
$roomrow = (int) $roomre->fetch(PDO::FETCH_NUM);

//$roomrow = (int) $conn->prepare("SELECT * FROM room WHERE id = '?'")->execute()->fetch(PDO::FETCH_NUM);


//roombook RoomType
$chartroom1 = $conn->prepare("SELECT * FROM roombook WHERE RoomType = 'Superior Room' AND id = '?'");
$chartroom1re = $chartroom1->execute();
$chartroom1row = (int) $chartroom1re->fetch(PDO::FETCH_NUM);

//$chartroom1row = (int) $conn->prepare("SELECT * FROM roombook WHERE RoomType = 'Superior Room' AND id = '?'")->execute()->fetch(PDO::FETCH_NUM);


$chartroom2 = $conn->prepare("SELECT * FROM roombook WHERE RoomType = 'Deluxe Room' AND id = '?'");
$chartroom2re = $chartroom2->execute();
$chartroom2row = (int) $chartroom2re->fetch(PDO::FETCH_NUM);

//$chartroom2row = (int)  $conn->prepare("SELECT * FROM roombook WHERE RoomType = 'Deluxe Room' AND id = '?'")->execute()->fetch(PDO::FETCH_NUM);

$chartroom3 = $conn->prepare("SELECT * FROM roombook WHERE RoomType = 'Guest House' AND id = '?'");
$chartroom3re = $chartroom3re->execute();
$chartroom3row = (int) $chartroom3re->fetch(PDO::FETCH_NUM);
//$chartroom3row = (int) $conn->prepare("SELECT * FROM roombook WHERE RoomType = 'Guest House' AND id = '?'")->execute()->fetch(PDO::FETCH_NUM);

$chartroom4 = $conn->prepare("SELECT * FROM roombook WHERE RoomType = 'Single Room' AND id = '?'");
$chartroom4re = $chartroom4->execute();
$chartroom4row = (int) $chartroom4re->fetch(PDO::FETCH_NUM);

//$chartroom4row = (int) $conn->prepare("SELECT * FROM roombook WHERE RoomType = 'Single Room' AND id = '?'")->execute()->fetch(PDO::FETCH_NUM);

?>

<?php
$query = $conn->prepare("SELECT * FROM payment");
$res = $query->execute();
$result = $res->fetch(PDO::FETCH_NUM);
$chart_data = '';
$tot = 0;
foreach ($result as $row) {
    $chart_data .= "{ date:'" . $row["cout"] . "', profit:" . $row["finaltotal"] * 10 / 100 . "}, ";
    $tot = $tot + $row["finaltotal"] * 10 / 100;
}

$chart_data = substr($chart_data, 0, -2);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/dashboard.css">
  <!-- chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- morish bar -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  <title>Admin</title>
</head>

<body>
  <div class="databox">
    <div class="box roombookbox">
      <h2>Total Booked Room</h1>
        <h1><?php echo $roombookrow ?> / <?php echo $roomrow ?></h1>
    </div>
    <div class="box guestbox">
      <h2>Total Staff</h1>
        <h1><?php echo $staffrow ?></h1>
    </div>
    <div class="box profitbox">
    <h2>Profit</h1>
        <h2><?php echo $tot ?> <span>$</span></h2>
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
</body>



<script>
  const labels = [
    'Superior Room',
    'Deluxe Room',
    'Guest House',
    'Single Room',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(153, 102, 255, 1)',
      ],
      borderColor: 'black',
      data: [<?php echo $chartroom1row ?>, <?php echo $chartroom2row ?>, <?php echo $chartroom3row ?>, <?php echo $chartroom4row ?>],
    }]
  };

  const doughnutchart = {
    type: 'doughnut',
    data: data,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('bookroomchart'),
    doughnutchart);
</script>

<script>
  Morris.Bar({
    element: 'profitchart',
    data: [<?php echo $chart_data; ?>],
    xkey: 'date',
    ykeys: ['profit'],
    labels: ['Profit'],
    hideHover: 'auto',
    stacked: true,
    barColors: [
      'rgba(153, 102, 255, 1)',
    ]
  });
</script>

</html>
