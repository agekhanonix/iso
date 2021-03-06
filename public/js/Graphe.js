var notes = [tirage(0, 100),
        tirage(0, 100),
        tirage(0, 100),
        tirage(0, 100),
        tirage(0, 100),
        tirage(0, 100),
        tirage(0, 100),
        tirage(0, 100),
        tirage(0, 100),
        tirage(0, 100)];
    var ctx = document.getElementById("myGraph").getContext('2d');
    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 10;
    var chartDatas = {
        labels: ["CHAP.I", "CHAP.II", "CHAP.III", "CHAP.IV", "CHAP.V", "CHAP.VI", "CHAP.VII", "CHAP.VIII", "CHAP.IX", "CHAP.X"],
        datasets: [{
            label: 'Objectif',
            data: [60, 60, 60, 60, 60, 60, 60, 60, 60, 60],
            backgroundColor: "rgba(27,246,65, 0.6)",
            borderColor: "rgba(13,118,31, 0.6)",
            borderWidth: 1,
            fill: false,
            radius: 6,
            pointRadius: 6,
            pointBorderWidth: 1,
            pointBackgroundColor: "rgba(27,246,65, 0.6)",
            pointBorderColor: "rgba(13,118,31, 0.6)",
            pointHoverRadius: 10,
            pointStyle: 'triangle'
        }, {
            label: 'Score moyen',
            data: [52, 42, 42, 45, 62, 59, 58, 31, 30, 48],
            backgroundColor: "rgba(193,199,246, 0.4)",
            borderColor: "rgba(13,24,118, 0.6)",
            borderWidth: 1,
            fill: true,
            radius: 6,
            pointRadius: 6,
            pointBorderWidth: 1,
            pointBackgroundColor: "rgba(193,199,246, 0.6)",
            pointBorderColor: "rgba(13,24,118, 0.6)",
            pointHoverRadius: 10,
            pointStyle: 'star'
        }, {
            label: 'Organisme',
            data: notes,
            backgroundColor: "rgba(246,191,12, 0.4)",
            borderColor: "rgba(246,56,20, 0.6)",
            borderWidth: 1,
            fill: true,
            radius: 6,
            pointRadius: 6,
            pointBorderWidth: 1,
            pointBackgroundColor: "rgba(246,191,12, 0.6)",
            pointBorderColor: "rgba(246,56,20, 0.6)",
            pointHoverRadius: 10
        }]
    };
    var chartOptions = {
        scale: {
            ticks: {
            beginAtZero: true,
            min: 0,
            max: 100,
            callback: function(value){return value+ " %"},
            stepSize: 10
            },
            pointLabels: {
            fontSize: 10
            }
        }
    }

    var radarChart = new Chart(ctx, {
        type: 'radar',
        data: chartDatas,
        options: chartOptions
    });
function tirage(min, max) {
    return Math.random() * (max - min) + min;
  }