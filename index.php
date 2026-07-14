<?php
    require "./required/header.php";
    require "./required/function.php";
?>
<!DOCTYPE html>
<html lang="en">
    <body>
        <h2>DASHBOARD</h2>
    <p>
        Total Students: <?php echo totalStudents(); ?>
    </p>
    <a href="add-student.php">
        <button>Add Students</button>
    </a>
    <a href="students.php">
         <button>View Students</button>
    </a>
        <?php 

            include './required/footer.php';
        ?>

    </body>
</html>