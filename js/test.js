var ctx = document.getElementById("myChart");
        var chartData = {
        labels: ["2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021"],
            datasets: [{
                type: 'line',
                label: 'Dataset 1',
                borderColor: window.chartColors.blue,
                borderWidth: 2,
                fill: false,
                data: [
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',
                    'rgba(128,101,178,0.35)',

                    'rgba(251,131,137,0)',
                    'rgba(251,131,137,0)',
                    'rgba(251,131,137,0)',
                    'rgba(251,131,137,0)'
                ]
            }, {
                type: 'bar',
                label: 'Dataset 2',
                backgroundColor: window.chartColors.red,
                data: [
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',
                    'rgba(128,101,178,0)',

                    'rgba(251,131,137,0.35)',
                    'rgba(251,131,137,0.35)',
                    'rgba(251,131,137,0.35)',
                    'rgba(251,131,137,0.35)'
                ],
                borderColor: 'white',
                borderWidth: 2
            }, {
                type: 'bar',
                label: 'Dataset 3',
                backgroundColor: window.chartColors.green,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myMixedChart = new Chart(ctx, {
                type: 'bar',
                data: chartData,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Chart.js Combo Bar Line Chart'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            chartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });
            });
            window.myMixedChart.update();
        });

