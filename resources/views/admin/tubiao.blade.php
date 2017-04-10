@extends('admin/admin_template')
@section('content')
    {{$info[0]}}
<script src="{{ asset('/bower_components/chart.js/dist/chart.js')}}"></script>
<canvas id="myChar" width="20" height="20"></canvas>
<script>
    var ctx = document.getElementById("myChar");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<head>
    {{--{{ asset('/bower_components/chart.js/dist/Chart.bundle.js')}}--}}
    <title>Radar Chart</title>
    <script src="{{ asset('/bower_components/chart.js/dist/Chart.bundle.js')}}"></script>
    <script src="{{ asset('/bower_components/chart.js/samples/utils.js')}}"></script>
    <style>
        #myChar{
            width: 1100px !important;
            height: 700px !important;
        }
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>
@endsection

