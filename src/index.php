<?php
  session_start();
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
  <?php

  $page = $_GET['page'] ?? 'dashboard';

  include("components/sidebar.php");
  

  if($page === 'dashboard'){
    include("pages/dashboard.php");
  }elseif($page === 'staff'){
    include("pages/staff.php");
  }elseif($page === 'student'){
    include("pages/student.php");
  }elseif($page === 'course'){
    include("pages/courses.php");
  }
  else{
    include("pages/dashboard.php");
  }
  ?>
</body>

</html>

<?php
  $_SESSION["username"] = "Rabgyen Moktan";
  $_SESSION["role"] = "Admin";
  $_SESSION["num_student"] = 4567;
  $_SESSION["num_staff"] = 25;
  $_SESSION["num_stakeholder"] = 10;
  $_SESSION["num_course"] = 8;
?>
