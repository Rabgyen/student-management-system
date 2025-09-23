<?php
include("connection/dbconnection.php");

$searched_name = isset($_POST['search']) ? $_POST['search'] : '';

$sql = "SELECT * FROM student";

if (isset($_POST['course']) && $_POST['course'] != "") {
    $selected_course = mysqli_real_escape_string($conn, $_POST['course']);
    $sql = "SELECT * FROM student WHERE course = '$selected_course'";
}

$course_result = mysqli_query($conn, "SELECT DISTINCT course FROM student");

if (isset($_POST['search_btn']) && !empty($_POST['search'])) {
    $searched_name = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM student WHERE name LIKE '%$searched_name%'";
}

$result = mysqli_query($conn, $sql);

?>

<style>
    table {
        width: 100%;
        font-size: 12px;
        cursor: default;
    }

    thead {
        border-bottom: 1px solid black;
        background-color: #f7f7f7;
        opacity: 60%;
    }

    th {
        padding: 8px;
    }

    td {
        text-align: center;
        padding: 10px 0;
        border-bottom: 1px solid black;
    }

    #course {
        padding: 8px 12px;
        border: 1px solid #DDDAD0;
        font-size: 12px;
        background-color: #f7f7f7;
    }
</style>

<div class="flex-1 flex flex-col bg-white m-2 rounded-md shadow-xs gap-4"
    style="border:2px solid #eeeeef; padding: 20px; max-height: 100vh; overflow-y: auto">
    <header class="text-md flex flex-col gap-2 ">
        <div class="flex justify-between">
            <h1 style="opacity: 70%; font-size: 18px;">Manage Students</h1>
            <div class="text-xs" style="background-color: #3B38A0; color: white; border-radius: 8px; padding: 10px"><a href="pages/addStudentForm.php">+ Add new student</a></div>
        </div>
        <div class="flex items-center gap-2">
            <div class=" flex justify-center items-center text-4xl rounded-xl shadow-xl" style="height: 60px; width: 60px; background-color: #f7f7f7;border: 1px solid #DDDAD0"><i class="fa-solid fa-graduation-cap"></i></div>
            <p class="text-2xl font-bold">Students List</p>
        </div>
    </header>
    <form method="POST" class="flex justify-between">
        <select name="course" id="course" class="shadow-xl rounded-md " onchange="this.form.submit()">
            <option value="">-- All Courses --</option>
            <?php while ($c = mysqli_fetch_assoc($course_result)) { ?>
                <option value="<?= $c['course'] ?>"
                    <?= (isset($selected_course) && $selected_course == $c['course']) ? "selected" : "" ?>>
                    <?= $c['course'] ?>
                </option>
            <?php } ?>
        </select>
        <div class="shadow-xl rounded-md" style="height: 30px; width: 225px; position: relative; background-color: #f7f7f7; border: 1px solid #DDDAD0;font-size: 12px">
            <input name="search" id="search" type="text" style="height: 100%; width: 100%;border: none; outline:none; padding: 0 10px">
            <button type="submit" name="search_btn" style="position: absolute;top: 50%; transform: translateY(-50%); right: 10px"><i class="fa-solid fa-magnifying-glass "></i></button>
        </div>
    </form>
    <main>
        <table>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <TH>Phone no</TH>
                    <th>Admission Date</th>
                    <th>Semester</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr >";
                        echo "<td>" . $count . "</td>";
                        echo "<td> " . $row['name'] . "</td>";
                        echo "<td >" . $row['email'] . "</td>";
                        echo "<td>" . $row['course'] . "</td>";
                        echo "<td>" . $row['phone']. "</td>";
                        echo "<td >" . $row['admission_date'] . "</td>";
                        echo "<td >" . $row['semester'] . "</td>";
                        echo "<td >" . $row['address'] . "</td>";
                        echo "<td>" . "<a href='#'>Take action</a>" . "</td>";
                        echo "</tr>";

                        $count++;
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='7'>" . "'{$searched_name}' not found" .  "</td>";
                }

                mysqli_close($conn);

                ?>
            </tbody>
        </table>
    </main>
</div>