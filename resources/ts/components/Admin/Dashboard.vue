<style scoped>
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
                data: array(
                    "{{ $chartroom1row }}",
                    "{{ $chartroom1row }}",
                    "{{ $chartroom1row }}",
                    "{{ $chartroom1row }}"
                )
            }],
        };

        const doughnutchart = {
            type: 'doughnut',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('bookroomchart'),
            doughnutchart);

        Morris.Bar({
            element: 'profitchart',
            data: "{{ $chart_data }}",
            xkey: 'date',
            ykeys: 'profit',
            labels: 'Profit',
            hideHover: 'auto',
            stacked: true,
            barColors: [
                'rgba(153, 102, 255, 1)',
            ]
        });

    @import url("https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Cookie&family=Poppins:wght@600&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400&display=swap");

    :root {
      --bg-text-shadow: 0 2px 4px rgb(13 0 77 / 8%), 0 3px 6px rgb(13 0 77 / 8%),
        0 8px 16px rgb(13 0 77 / 8%);
      --bg-box-shadow: 0px 0px 20px 6px rgba(26, 30, 164, 0.31);
    }
    *::-webkit-scrollbar {
      width: 0.4rem;
    }
    *::-webkit-scrollbar-track {
      background: rgb(6, 6, 44);
    }
    *::-webkit-scrollbar-thumb {
      background: #0040ff;
    }

    body {
      /* background-color: #ffff; */
    }

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      /* text-shadow: var(--bg-text-shadow); */
    }

    .databox {
      width: 100%;
      display: flex;
      justify-content: space-evenly;
    }

    .databox .box {
      height: 200px;
      width: 380px;
      margin: 20px 0;
      background-color: #ccdff4;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    .databox .box h1 {
      font-size: 80px;
      font-family: "Hind Siliguri", sans-serif;
      color: rgb(20, 20, 83);
    }
    .box:nth-child(1) {
      border-bottom: 8px solid red;
    }
    .box:nth-child(2) {
      border-bottom: 8px solid rgba(0, 255, 68, 0.814);
    }
    .box:nth-child(3) {
      border-bottom: 8px solid rgb(51, 0, 255);
    }

    /* chart */
    .chartbox {
      width: 100%;
      display: flex;
      justify-content: space-evenly;
    }

    .profitchart {
      width: 660px;
      background-color: #ccdff4;
      padding: 10px;
      border-radius: 10px;
    }

    .bookroomchart {
      width: 330px;
      padding: 10px 80px;
      background-color: #ccdff4;
      border-radius: 10px;
    }
</style>
<script setup lang="ts">
</script>

<template>
<div class="databox">
    <div class="box roombookbox">
        <h2>Total Booked Room</h1>
            <h1>
                {{ $roombookrow / $roomrow }}
            </h1>
    </div>
    <div class="box guestbox">
        <h2>Total Staff</h1>
            <h1>
                {{ $staffrow }}
            </h1>
    </div>
    <div class="box profitbox">
        <h2>Profit</h1>
            <h2>
                {{ $tot }}
                <span>$</span>
            </h2>
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

@foreach($result as $row)
$chart_data = '';
$tot = 0;
$chart_data .= "{ date:'" . {{ $row["cout"] }} . "', profit:" . {{ $row["finaltotal"] }} * 10 / 100 . "}, ";
$tot = $tot + $row["finaltotal"] * 10 / 100;
$chart_data = substr($chart_data, 0, -2);
@endforeach

</template>


