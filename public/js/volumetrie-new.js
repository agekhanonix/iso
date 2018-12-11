function volumetrie() {
    var url = "admin.php?action=getCreations";
    var creations = [0,0,0,0,0,0,0,0,0,0,0,0];
    chartOptions = {
        maintainAspectRation: false,
        legend: {display: true},
        tooltips: {
            backgroundColor: '#ffffff',
            titleFontColor: '#333333',
            bodyFontColor: '#666666',
            bodySpacing: 4,
            xPadding: 12,
            mode: 'nearest',
            intersect: 0,
            position: 'nearest'
        },
        responsive: true,
        scales: {
            yAxes: [{
                barPercentage: 1.6,
                gridLines: {drawBorder: false, color: 'rgba(29,140,248,0.0)', zeroLineColor: 'transparent'},
                ticks: {suggestedMin: 50, suggestedMax: 120, padding: 5, fontColor: '#9a9a9a'}
            }],
            xAxes: [{
                barPercentage: 1.6,
                gridLines: {drawBorder: false, color: 'rgba(220,53,69,0.1', zeroLineColor: 'transparent'},
                ticks: {padding: 20, fontColor: '#9a9a9a'}
            }]
        }
    };
    downloadUrl(url, function(data) {
        var jsonObj = JSON.parse(data);
        if(jsonObj.length > 0) {
            for(var i=0; i<jsonObj.length; i++) {
                notes[Number.parseInt(jsonObj[i]['Mois'])-1] = Number.parseFloat(jsonObj[i]['Nbr']);
            }
        }
        
        var ctx = document.getElementById('volumetrie').getContext('2d');
        var gradientStroke = ctx.createLinearGradient(0,230,0,50);
        gradientStroke.addColorStop(1, 'rgba(72,72,176, 0.2');
        gradientStroke.addColorStop(0.2, 'rgba(72,72,176, 0.0');
        gradientStroke.addColorStop(0, 'rgba(119,52,169,0');

        var data = {
            labels: ['JAN', 'FEV', 'MAR', 'AVR', 'MAI', 'JUN', 'JUI', 'AOU', 'SEP', 'OCT', 'NOV', 'DEC'],
            datasets: [{
            label: 'Créations',
            fill: true,
            backgroundColor: gradientStroke,
            borderColor: '#d048b6',
            borderWidth: 2,
            borderDash: [],
            borderDashOffset: 0.0,
            pointBackgroundColor: '#d048b6',
            pointBorderColor: 'rgba(255,255,255, 0)',
            pointHoverBackgroundColor: '#d048b6',
            pointBorderWidth: 20,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 15,
            pointRadius: 4,
            data: creations,
            }]
        };

        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: chartOptions
        });
    }
}