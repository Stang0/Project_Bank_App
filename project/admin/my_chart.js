var ctx = document.getElementById('myChart').getContext('2d');
var earning = document.getElementById('earningWeek').getContext('2d');

var myChart = new Chart(ctx,{
    type: 'doughnut',
    data: {
        labels: ['ผู้ใช้ทั้งหมด','เงินฝากทั้งหมด','จำนวนนักเรียน'],
        datasets: [{
            label: 'จำนวน',
            data:[32,1365,32],
            backgroundColor: [
                'rgba(255,99,132,0.2)',
                'rgba(54,162,235,0.2)',
                'rgba(255,206,86,0.2)',
               
                
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54,162,235,1)',
                'rgba(255,206,86,1)'
                

            ],
            borderWidth:1
        }]
    },
    options: {
        responsive: true,
    }
});


var myChart = new Chart(earning,{
    type: 'line',
    data: {
        labels: ['เงินฝาก','เงินฝาก'],
        datasets: [{
            label: 'เงินฝากทั้งหมด',
            data:[1365,0],
         
            borderColor: [
               
                'rgba(54,162,235,1)',
                
            ],
            borderWidth:1
        }]
    },
    options: {
        responsive: true,
    }
});


