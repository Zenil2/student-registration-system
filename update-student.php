<?php
    require './required/function.php';
    session_start();

    $index = $_POST['index'];
    $_SESSION['students'][$index]['name'] = $_POST['nameEdit'];
    $_SESSION['students'][$index]['mobile'] = $_POST['mobileEdit'];
    $_SESSION['students'][$index]['email'] = $_POST['emailEdit'];
    $_SESSION['students'][$index]['course'] = $_POST['courseEdit'];

    header("Location: students.php");
?>