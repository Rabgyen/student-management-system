<div>
  <canvas id="doughnut2" width="300px" height="300px"></canvas>
</div>
<script src="
https://cdn.jsdelivr.net/npm/chart.js@4.5.0/dist/chart.umd.min.js
"></script>
<script>
  const ctx2 = document.getElementById('doughnut2');

  new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: ['BCSIT', 'BBA', 'BBA-Finance'],
      datasets: [{
        label: 'Total number of student',
        data: [12, 19, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>