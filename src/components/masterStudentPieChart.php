<div>
  <canvas id="doughnut" ></canvas>
</div>
<script src="
https://cdn.jsdelivr.net/npm/chart.js@4.5.0/dist/chart.umd.min.js
"></script>
<script>
  const ctx = document.getElementById('doughnut');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Masters in Business Administration', 'Masters in Business Administration in Finance', 'Masters in IT', 'Masters in Computer Science'],
      datasets: [{
        label: 'Total number of student',
        data: [12, 19, ,22, 24],
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