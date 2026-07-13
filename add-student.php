<?php
    require './required/header.php';
    require './required/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <form action="save-students.php" method="post">
            <label for="stud_id">Student ID:</label>
            <input type="text" name="stud_id" id="stud_id" placeholder="e.g.101" required>
            <br>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="e.g.John Doe" required>
            <br>

            <label for="Mobile">Mobile:</label>
            <input type="text" name="Mobile" id="Mobile" placeholder="e.g.12345xxxx" required>
            <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="e.g.johndo@gmail.com" required>
            <br>

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" id="gender" value="male">Male
            <input type="radio" name="gender" id="gender" value="female">Female
            <br>
            <br>

            <label for="dob">Date Of Birth</label>
            <input type="date" name="dob" id="dob" required>
            <br>

            <label for="course">Course:</label>
            <select name="course" id="course" required>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JS">JS</option>
                <option value="BOOTSTRAP">BOOTSTRAP</option>
                <option value="PHP">PHP</option>
            </select>
            <br>

            <label for="city">city:</label>
            <input type="text" name="city" id="city" placeholder="e.g.Rajkot" required>
            <br>

            <label for="addr">Address:</label>
            <textarea name="addr" id="addr"></textarea>
            <br>

            <input type="submit" value="Save Student">

        </form>

    </div>
</body>
</html>