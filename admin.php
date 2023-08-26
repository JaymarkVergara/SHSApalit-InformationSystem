<?php 

     
        include_once("connect/connections.php");
        $con =connections();
        


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="cssadmin/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header>
        
        <img src="img/shslogo.png" alt="logo" class="logoadmin">
        <h1>Admin</h1>
   

    </header>
    <div class="sidebar">
    <div class="sidebar-link">
        <a href="Students.php">Students</a>
        </div>
        
        <div class="sidebar-link">
        <a href="acourse.php">Course</a>
        </div>
      
        <div class="sidebar-link">
        <a href="ateacher.php">Teachers</a>
        </div>
       
        <div class="sidebar-link out">
        <a href="login.php">Logout</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>