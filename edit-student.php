<?php
    require './required/function.php';
    require './required/header.php';
    session_start();
    $id = $_GET['id'];
    $student = $_SESSION['students'][$id];
?>
<!DOCTYPE html>
<html lang="en">
<body>
   <h1>UPDATE STUDENT</h1> 
   <form action="update-student.php" method="post">
    <input type="hidden" name="index" id="index" value="<?php echo $id; ?>">
    <label for="nameEdit">Name:</label>
    <input type="text" name="nameEdit" id="nameEdit" value="<?php echo $student['name']; ?>">
    <br>

    <label for="mobileEdit">Mobile:</label>
    <input type="text" name="mobileEdit" id="mobileEdit" value="<?php echo $student['mobile']; ?>">
    <br>

    <label for="emailEdit">Email:</label>
    <input type="email" name="emailEdit" id="emailEdit" value="<?php echo $student['email'];?>">
    <br>

    <label for="courseEdit">Course:</label>
    <select name="courseEdit" id="courseEdit">
        <option value="HTML" <?php if($student['course']=='HTML')echo 'selected';?>>HTML</option>
        <option value="CSS" <?php if($student['course']=='CSS')echo 'selected';?>>CSS</option>
        <option value="JS" <?php if($student['course']=='JS')echo 'selected';?>>JS</option>
        <option value="BOOTSTAP" <?php if($student['course']=='BOOTSTRAP')echo 'selected';?>>BOOTSTRAP</option>
        <option value="PHP" <?php if($student['course']=='PHP')echo 'selected';?>>PHP</option>
    </select>
    <br>

    <input type="submit" value="Updates Student">
   </form>
</body>
<?php
require './required/footer.php';
?>
</html>