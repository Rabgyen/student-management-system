<?php
  include('connection/dbconnection.php');

$sql = "SELECT course, COUNT(*) AS total_students FROM student GROUP BY course";
$result = mysqli_query($conn, $sql);

$courses = [];
$student_counts = [];

while ($row = mysqli_fetch_assoc($result)) {
    $courses[] = $row['course'];
    $student_counts[] = $row['total_students'];
}

  mysqli_close($conn);

?>


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
    labels:<?php echo json_encode($courses); ?>,
    datasets: [{
      label: 'Total number of student',
      data: <?php echo json_encode($student_counts); ?>,
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
    },
    scales: { y: { beginAtZero: true } }
  }
});

</script>
<script>

  let totalCourses = <?php echo $total_courses ?>
  console.log(totalCourses)

</script>