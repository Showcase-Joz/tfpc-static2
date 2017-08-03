var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {  
        labels: ["2004", "2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021"],
        datasets: [{
            label: 'Historical Costs',
			data: [2000, 2100, 2250, 2500, 2700, 2820, 2920, 3120, 3410, 3500, 3700, 3840, 3960, 4280, 0, 0, 0, 0],            
			backgroundColor: [
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
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)'
            ],
            borderColor: [
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(128,101,178,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)'
            ],
            borderWidth: 1
        },
        {
        	label: 'Perceived Costs',
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4490, 4620, 4910, 5000],
	        backgroundColor: [
        		'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)',
            	'rgba(251,131,137,0.35)'
            ],
            borderColor: [
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)',
                'rgba(251,131,137,1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                	// Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return '£' + value;
                    },
                    beginAtZero:true
                }
            }]
        },
        title: {
            display: true,
            fontFamily: "'Open Sans', Arial, sans-serif",
            fontSize: 30,
            text: 'Annual rise in Funeral Costs'
        },
        animation: {
            duration: 7000,
            easing: 'easeOutExpo'
        }
    }
});

