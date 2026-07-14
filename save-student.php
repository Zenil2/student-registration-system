<?php
    require "./required/function.php";
    session_start();
    $student = [
        "stud_id" => $_POST['stud_id'],
        "name" => $_POST['name'],
        "mobile" => $_POST['mobile'],
        "email" => $_POST['email'],
        "gender" => $_POST['gender'],
        "course" => $_POST['course'],
        "dob" => $_POST['dob'],
        "city" => $_POST['city'],
        "addr" => $_POST['addr']
    ];
    

    $_SESSION['students'][]= $student;
    header("Location: students.php");
?>