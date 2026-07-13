<?php
require "./required/header.php";
require "./required/function.php";
?>
<!DOCTYPE html>
<html lang="en">
    
<h2>DASHBOARD</h2>
<p>
    Total Students: <?php echo totalStudents(); ?>
</p>
<a href="#">
    <button>Add Students</button>
</a>
<a href="#">
    <button>View Students</button>
</a>
<?php 

include './required/footer.php';
?>
<body>
    
</body>
</html>