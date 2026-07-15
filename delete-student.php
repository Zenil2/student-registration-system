<?php
    require './required/function.php';
    session_start();
    $id = $_GET['id'];
    unset($_SESSION['students'][$id]);
    $_SESSION['students'] = array_values($_SESSION['students']);
    header("Location: students.php");
?>