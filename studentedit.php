<?php 


            include_once("connect/connections.php");
            $con = connections();
            $id= $_GET['ID'];
            $sql = "SELECT * FROM student_list WHERE id = '$id'";
            $students = $con->query($sql) or die($con->error);
            $row = $students->fetch_assoc();


        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $course = $_POST['course'];
            $location = $_POST['location'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];

            $sql = "UPDATE `student_list` SET `id`='$id',`firstname`='$firstname',
            `lastname`='$lastname',`age`='$age',`course`='$course',`location`='$location',
            `gender`='$gender',`phone#`='$phone' WHERE id = $id";
            $con->query($sql) or die ($con->error);  
            echo header("Location: students.php");

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
            <input class="as-input" type="text" name="firstname" id="firstname" 
            value="<?php echo $row['firstname']; ?>"><br>
            <label>Lastname</label><br>
            <input class="as-input" type="text" name="lastname" id="lastname"
            value="<?php echo $row['lastname']; ?>"><br>
            <label>Age</label><br>
            <input type="text" name="age" id="ages" 
            value="<?php echo $row['age']; ?>"><br>
            <label>Course</label><br>
            <select class="as-input" name="course" id="course">
                <option value="Programming"<?php 
                echo($row['course']=="Programming") ? 'Selected' : '';  ?>>Programming</option>
                <option value="Eim"<?php 
                echo($row['course']=="Eim") ? 'Selected' : '';  ?>>Eim</option>
                <option value="Tailoring"<?php 
                echo($row['course']=="Tailoring") ? 'Selected' : '';  ?>>Tailoring</option>
                <option value="Animation"<?php 
                echo($row['course']=="Animation") ? 'Selected' : '';  ?>>Animation</option>
                <option value="Abm"<?php 
                echo($row['course']=="Abm") ? 'Selected' : '';  ?>>Abm</option>
            </select><Br>
            <label>Location</label><br>
            <input type="text" name="location" id="location" 
            value="<?php echo $row['location']; ?>"><br>
            <label>Gender</label><br>
            <select class="as-input" name="gender" id="gender">
                <option value="Male"<?php 
                echo($row['gender']=="Male") ? 'Selected' : '';  ?>>Male</option>
                <option value="Female"<?php 
                echo($row['gender']=="Female") ? 'Selected' : '';  ?>>Female</option>
                <option value="Other"<?php 
                echo($row['gender']=="Other") ? 'Selected' : '';  ?>>Other</option>
            </select><Br>
            <label>Phone No.</label><br>
            <input type="text" name="phone" id="phone"
            value="<?php echo $row['phone#']; ?>"><br>
            <input  class="as-input btn" type="submit" name="submit" value="UPDATE">
        </form>
        </form>
    </section>
</body>
</html>