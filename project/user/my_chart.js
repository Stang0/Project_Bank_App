var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx,{
    type: 'bar',
    data: {
        labels: ['อันดับทที่1','อันดับทที่2','อันดับทที่3','อันดับทที่4','อันดับทที่5'],
        datasets: [{
            label: 'จำนวน',
            data:[2500,10000,3000,5000,8000],
            backgroundColor: [
                'rgba(255,99,132,0.2)',
                'rgba(54,162,235,0.2)',
                'rgba(255,206,86,0.2)',
                'rgba(238,130,238,0.2)',
                'rgb(106, 90, 205,0.2)'

                
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54,162,235,1)',
                'rgba(255,206,86,1)',
                'rgba(238,130,238,01)',
                'rgb(106, 90, 205,1)'


            ],
            borderWidth:1
        }]
    },
    options: {
        responsive: true,
    }
});

