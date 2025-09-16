<main class="flex flex-1 justify-center items-center bg-white m-2 rounded-md shadow-xs"
    style="border:2px solid #eeeeef">
    <span class="flex flex-col items-center gap-2">
        <?php
            echo "<h1 class='text-4xl font-bold'>Welcome {$_SESSION["username"]} </h1>";
            echo "<p >Role: {$_SESSION["role"]}</p>"
        ?>
    </span>
</main>