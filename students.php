<?php   

    session_start();
    require "./required/header.php";

?>
<!DOCTYPE html>
<html lang="en">

<body>
    <table border="1" cellpadding="10">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Course</th>
            <th>Date Of Birth</th>
            <th>City</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php
            foreach($_SESSION['students'] as $index=>$student){
                echo "<tr>";
                echo "<td>".$student['stud_id']."</td>";
                echo "<td>".$student['name']."</td>";
                echo "<td>".$student['mobile']."</td>";
                echo "<td>".$student['email']."</td>";
                echo "<td>".$student['gender']."</td>";
                echo "<td>".$student['course']."</td>";
                echo "<td>".$student['dob']."</td>";
                echo "<td>".$student['city']."</td>";
                echo "<td>".$student['addr']."</td>";
                echo "<td>
                <a href = 'edit-student.php?id=".$index."'>Edit</a>
                 |
                  <a href = 'delete-student.php?id=".$index."'>Delete</a>
                </td>";
                echo "</tr>";
                }
        ?>

    </table>
    <?php
    require "./required/footer.php";
    ?>
</body>
</html>