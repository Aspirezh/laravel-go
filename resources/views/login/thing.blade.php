@extends('admin/admin_template')
@section('content')
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                货物轨迹：
                <script src="{{ asset('/bower_components/chart.js/dist/chart.js')}}"></script>
                <canvas id="myChar" width="20" height="20"></canvas>
                    <script src="{{ asset('/bower_components/chart.js/dist/Chart.bundle.js')}}"></script>
                    <script src="{{ asset('/bower_components/chart.js/samples/utils.js')}}"></script>
                <body>
                <div style="width:40%">
                    <canvas id="canvas"></canvas>
                </div>
                <button id="randomizeData">Randomize Data</button>
                <button id="addDataset">Add Dataset</button>
                <button id="removeDataset">Remove Dataset</button>
                <button id="addData">Add Data</button>
                <button id="removeData">Remove Data</button>
                <script>
                    var randomScalingFactor = function() {
                        return Math.round(Math.random() * 100);
                    };

                    var color = Chart.helpers.color;
                    var config = {
                        type: 'radar',
                        data: {
                            labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                            datasets: [{
                                label: "My First dataset",
                                backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                                borderColor: window.chartColors.red,
                                pointBackgroundColor: window.chartColors.red,
                                data: [
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor()
                                ]
                            }, {
                                label: "My Second dataset",
                                backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                                borderColor: window.chartColors.blue,
                                pointBackgroundColor: window.chartColors.blue,
                                data: [
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor(),
                                    randomScalingFactor()
                                ]
                            },]
                        },
                        options: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Chart.js Radar Chart'
                            },
                            scale: {
                                ticks: {
                                    beginAtZero: true
                                }
                            }
                        }
                    };

                    window.onload = function() {
                        window.myRadar = new Chart(document.getElementById("canvas"), config);
                    };

                    document.getElementById('randomizeData').addEventListener('click', function() {
                        config.data.datasets.forEach(function(dataset) {
                            dataset.data = dataset.data.map(function() {
                                return randomScalingFactor();
                            });
                        });

                        window.myRadar.update();
                    });

                    var colorNames = Object.keys(window.chartColors);
                    document.getElementById('addDataset').addEventListener('click', function() {
                        var colorName = colorNames[config.data.datasets.length % colorNames.length];;
                        var newColor = window.chartColors[colorName];

                        var newDataset = {
                            label: 'Dataset ' + config.data.datasets.length,
                            borderColor: newColor,
                            backgroundColor: color(newColor).alpha(0.2).rgbString(),
                            pointBorderColor: newColor,
                            data: [],
                        };

                        for (var index = 0; index < config.data.labels.length; ++index) {
                            newDataset.data.push(randomScalingFactor());
                        }

                        config.data.datasets.push(newDataset);
                        window.myRadar.update();
                    });

                    document.getElementById('addData').addEventListener('click', function() {
                        if (config.data.datasets.length > 0) {
                            config.data.labels.push('dataset #' + config.data.labels.length);

                            config.data.datasets.forEach(function (dataset) {
                                dataset.data.push(randomScalingFactor());
                            });

                            window.myRadar.update();
                        }
                    });

                    document.getElementById('removeDataset').addEventListener('click', function() {
                        config.data.datasets.splice(0, 1);
                        window.myRadar.update();
                    });

                    document.getElementById('removeData').addEventListener('click', function() {
                        config.data.labels.pop(); // remove the label first

                        config.data.datasets.forEach(function(dataset) {
                            dataset.data.pop();
                        });

                        window.myRadar.update();
                    });
                </script>
                </body>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection