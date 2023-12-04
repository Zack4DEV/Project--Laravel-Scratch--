<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('Dashboard')</title>
<link rel="stylesheet" href="https//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link rel="stylesheet" src="{{ URL::asset('/admin/css/dashboard.css') }}">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    </head>
    <body>
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
</script>

<script>
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
</script>


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

    </body>
</html>