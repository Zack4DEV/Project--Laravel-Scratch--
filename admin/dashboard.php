<?php
inlcude('../config.php');

// roombook
$roombooksql = $conn->prepare("SELECT * FROM roombook");
$roombooksql->execute();
$roombookre =  $roombook->fetchColumn(PDO::FETCH_ASSOC);
$roombookrow = $roombookre-columnCount();

// staff
$staffsql = $conn->prepare("SELECT * FROM staff");
$staffsql->execute();
$staffre = $staff->fetchColumn(PDO::FETCH_ASSOC);
$staffrow = $staffre->columnCount();

// room
$roomsql = $conn->prepare("SELECT * FROM room");
$roomsql->execute();
$roomre = $roomsql->fetchColumn(PDO::FETCH_ASSOC);
$roomrow = $roomre->columnCount();

//roombook roomtype
$chartroom1 = $conn->prepare("SELECT * FROM roombook WHERE roomtype = 'Superior Room'");
$chartroom1->execute();
$chartroom1re = $chartroom1->fetchColumn(PDO::FETCH_ASSOC);
$chartroom1row = $chartroom1re->columnCount();

$chartroom2 = $conn->prepare("SELECT * FROM roombook WHERE roomtype = 'Deluxe Room'");
$chartroom2->execute();
$chartroom2re = $chartroom2->fetchColumn(PDO::FETCH_ASSOC);
$chartroom2row = $chartroom2re->columnCount();

$chartroom3 = $conn->prepare("SELECT * FROM roombook WHERE roomtype = 'Guest House'");
$chartroom3->execute();
$chartroom3re = $chartroom3->fetchColumn(PDO::FETCH_ASSOC);
$chartroom3row = $chartroom3re->columnCount();

$chartroom4 = $conn->prepare("SELECT * FROM roombook WHERE roomtype = 'Single Room'");
$chartroom4->execute();
$chartroom4re = $chartroom4->fetchColumn(PDO::FETCH_ASSOC);
$chartroom4row = $chartroom4re->columnCount();
?>
<!--moriss profit -->
<?php
$query = $conn->prepare("SELECT cout,finaltotal FROM payment");
$query->execute();
$result = $query->fetchColumn(PDO::FETCH_ASSOC);
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
