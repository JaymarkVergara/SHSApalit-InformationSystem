<?php 


        include_once("connect/connections.php");
        $con =connections();

        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $course = $_POST['course'];
            $location = $_POST['location'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO `student_list` (`firstname`, `lastname`, `age`, `course`, 
            `location`, `gender`, `phone#`) VALUES ('$firstname', '$lastname','$age',
            '$course', '$location', '$gender', '$phone')";
            $con->query($sql) or die ($con->error);  
            echo header("Location: Students.php");

        }
        

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="cssadmin/admin.css">
    <link rel="stylesheet" href="cssadmin/aform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header>
        <img src="img/shslogo.png" alt="logo" class="logoadmin">
        <h1>Admin</h1>
       
        
    </header>
    <div class="sidebar">
    <div class="sidebar-link">
        <a href="students.php">Students</a>
        </div>
        
        <div class="sidebar-link">
        <a href="Students.php">Course</a>
        </div>
      
        <div class="sidebar-link">
        <a href="ateacher.php">Teachers</a>
        </div>
       
        <div class="sidebar-link out">
        <a href="login.php">Logout</a>
        </div>
    </div>
    
    <section class="students-section">
    
        <form action="" class="add-student-form" method="post">
            <div class="aheader"><h2 style="text-align:center;">Add Students</h2></div>
            <label>Firstname</label><br>
            <input class="as-input" type="text" name="firstname" id="firstname" required><br>
            <label>Lastname</label><br>
            <input class="as-input" type="text" name="lastname" id="lastname" required><br>
            <label>Age</label><br>
            <input type="text" name="age" id="ages" required><br>
            <label>Course</label><br>
            <select class="as-input" name="course" id="course">
                <option value="Programming">Programming</option>
                <option value="Eim">Eim</option>
                <option value="Tailoring">Tailoring</option>
                <option value="Animation">Animation</option>
                <option value="Abm">Abm</option>
            </select><Br>
            <label>Location</label><br>
            <input type="text" name="location" id="location" required><br>
            <label>Gender</label><br>
            <select class="as-input" name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><Br>
            <label>Phone No.</label><br>
            <input type="text" name="phone" id="phone" required><br>
            <input  class="as-input btn" type="submit" name="submit" value="ADD">
        </form>
        </form>
    </section>
</body>
</html>