<aside class="h-screen w-[220px] p-2 flex flex-col gap-4">
    <section class="flex items-center gap-2">
        <img src="img/RSM-logo.png" alt="RSM-logo" class="w-8 h-8 rounded-full shadow-xl">
        <h1 class="font-bold">RSM Institution</h1>
    </section>
    <div class="flex items-center bg-[#fcffff] gap-2 p-2 rounded-xl shadow-sm">
        <div class="px-2 py-1 bg-[#cecece] rounded-full"><i class="fa-solid fa-user"></i></div>
        <div>
            <?php
            echo "<p class='text-xs font-bold'>{$_SESSION["username"]}</p>";
            ?>
            <?php
            echo "<p class='text-[10px]'>{$_SESSION["role"]}</p>";
            ?>
        </div>
    </div>
    <section class="flex flex-1 justify-between flex-col">
        <div class="opacity-80">
            <p class="text-xs opacity-70">Daily operation</p>
            <div class="flex items-center gap-2 py-2 px-3 ">
                <i class="fa-solid fa-table-columns"></i>
                <a href="index.php?page=dashboard" class="text-xs">Dashboard</a>
            </div>
            <div class="flex items-center gap-2 p-2">
                <i class="fa-solid fa-chalkboard-user"></i>
                <a href="index.php?page=staff" class="text-xs">Manage Staffs</a>
            </div>
            <div class="flex items-center gap-2 p-2">
                <i class="fa-solid fa-users"></i>
                <a href="index.php?page=student" class="text-xs">Manage Students</a>
            </div>
            <div class="flex items-center gap-2 p-2">
                <i class="fa-solid fa-book"></i>
                <a href="index.php?page=course" class="text-xs">Courses</a>
            </div>
        </div>
        <div class="flex flex-col opacity-80 gap-2 px-2">
            <div class="flex gap-2">
                <i class="fa-solid fa-bell"></i>
                <p class="text-xs">Notification</p>
            </div>
            <div class="flex gap-2">
                <i class="fa-solid fa-question"></i>
                <p class="text-xs">Support</p>
            </div>
            <div class="border-t-1 border-gray-500">
                <div class="py-2 flex items-center px-2 mt-2 mb-4 gap-2">
                    <img src="img/random-user.png" alt="RSM-logo" class="w-8 h-8 rounded-full">
                    <span>
                        <?php
                        echo "<p class='text-xs font-bold'>{$_SESSION["username"]}</p>";
                        ?>
                        <?php
                        echo "<p class='text-[10px]'>{$_SESSION["role"]}</p>";
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </section>
</aside>