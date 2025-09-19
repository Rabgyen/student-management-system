<?php
    include('connection/dbconnection.php');

    $student_result = mysqli_query($conn, "SELECT COUNT(*) AS total_students FROM student");
    $student_count = mysqli_fetch_assoc($student_result)['total_students'];

    $teacher_result = mysqli_query($conn, "SELECT COUNT(*) AS total_teachers FROM teachers");
    $teacher_count = mysqli_fetch_assoc($teacher_result)['total_teachers'];

    $course_result = mysqli_query($conn, "SELECT COUNT(DISTINcT course) AS total_courses FROM student");
    $course_count = mysqli_fetch_assoc($course_result)['total_courses'];

?>

<div class="flex-1 flex flex-col gap-4 h-full m-2 bg-white rounded-md shadow-md border-2 border-gray-200" style="border:2px solid #eeeeef; padding: 20px;">
    <header class="text-md flex flex-col gap-2">
        <h1 style="opacity: 70%; font-size: 18px;">Dashboard</h1>
        <?php
        echo "<p class='font-bold text-xl'>Welcome back, {$_SESSION["username"]}</p>";
        ?>
    </header>
    <main style="height: auto; width: 100%;margin-top:30px; gap:60px; flex: flex-wrap" class="flex justify-center">
        <div class="flex-1" style="max-width: 450px;">
            <?php
            include("components/bachStudentPieChart.php");
            ?>
        </div>
        <div class="flex-1" style="max-width: 450px;">
            <?php
            include("components/masterStudentPieChart.php");
            ?>
        </div>
    </main>
    <div class="flex gap-4" style="flex-wrap: wrap;">
        <div class="flex items-center bg-[#fcffff] gap-2 rounded-xl shadow-sm flex-1" style="padding: 20px; min-width: 200px">
            <div class="px-2 py-2 bg-[#cecece] rounded-full"><i class="fa-solid fa-people-group"></i></div>
            <div class="text-xs font-bold">
                <p>Stakeholders</p>
                <?php
                echo "<p>{$_SESSION['num_stakeholder']}</p>";
                ?>
            </div>
        </div>
        <div class="flex items-center bg-[#fcffff] gap-2 p-2 rounded-xl shadow-sm flex-1">
            <div class="px-2 py-2 bg-[#cecece] rounded-full"><i class="fa-solid fa-people-group"></i></div>
            <div class="text-xs font-bold">
                <p>Active Students</p>
                <?php
                echo "<p>{$student_count}</p>";
                ?>
            </div>
        </div>
        <div class="flex items-center bg-[#fcffff] gap-2 p-2 rounded-xl shadow-sm flex-1">
            <div class="px-2 py-2 bg-[#cecece] rounded-full"><i class="fa-solid fa-people-group"></i></div>
            <div class="text-xs font-bold">
                <p>Active Staffs</p>
                <?php
                echo "<p>{$teacher_count}</p>";
                ?>
            </div>
        </div>
        <div class="flex items-center bg-[#fcffff] gap-2 p-2 rounded-xl shadow-sm flex-1">
            <div class="px-2 py-2 bg-[#cecece] rounded-full"><i class="fa-solid fa-people-group"></i></div>
            <div class="text-xs font-bold">
                <p>Courses</p>
                <?php
                echo "<p>{$course_count}</p>";
                ?>
            </div>
        </div>
    </div>
</div>