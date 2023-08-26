

    <?php 
        include_once("connect/connections.php");
        $con =connections();
        if(!isset($_SESSION)){
            session_start();
        }
        
        
        $id= $_GET['ID'];
        $sql = "SELECT * FROM student_list WHERE id = '$id'";
        $students = $con->query($sql) or die($con->error);
        $row = $students->fetch_assoc();


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
        <a href="#">Course</a>
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
            <div class="aheader" style="text-align:center;">
                <h2 style="text-align:center;">Course</h2>
                <p style="font-size: 25px;">PROGRAMMING</p>
                <p style="font-size: 25px;">ABM</p>
                <p style="font-size: 25px;">EIM</p>
                <p style="font-size: 25px;">ANIMATION</p>
                <p style="font-size: 25px;">TAILORING</p>
            </div>

        </form>
        </form>
    </section>
</body>
</html>


</body>
</html>