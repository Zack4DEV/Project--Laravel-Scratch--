@include('Admins.Admin.Show.SDashboard')

@push('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link rel="stylesheet" href="{{ asset('/storage/app/public/Admin/css/dashboard.css') }}">
@endpush

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

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
