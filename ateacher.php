<?php 

        if(!isset($_SESSION)){
            session_start();
        }
        

        include_once("connect/connections.php");
        $con =connections();
        $sql = "SELECT * FROM teacher_list";
        $teacher = $con->query($sql) or die($con->error);
        $row = $teacher->fetch_assoc();
        

        if(isset($_POST['delete'])){
            $id = $_POST['ID'];
            $sql = "DELETE FROM teacher_list WHERE id = '$id'";
            $con->query($sql) or die ($con->error);
            echo header("Location: ateacher.php");
        }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="cssadmin/admin.css">
    <link rel="stylesheet" href="cssadmin/abuttons.css">
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
        <a href="acourse.php?ID=<?php echo $row['id']; ?>">Course</a>
        </div>
      
        <div class="sidebar-link">
        <a href="ateacher.php">Teachers</a>
        </div>
       
        <div class="sidebar-link out">
        <a href="login.php">Logout</a>
        </div>
    </div>
    
    <section class="students-section section">
        <table id="course">
        <thead>
                 <Tr class="acourse-th">
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Location</th>
                    <th>Phone No.</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </Tr>
            </thead>

            <tbody>
            <?php do{ ?>
                <tr class="acourse-td">
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['phone#']; ?></td>
                    <Td><a href="viewteachers.php?ID=<?php echo $row['id']; ?>">View</a></Td>
                    <Td><a href="addteacher.php">Add</a></Td>
                    <Td><a class="form-a" href="teacheredit.php?ID=<?php echo $row['id']; ?>">Edit</a></Td>
                    <form action="" method="post">
                    <td><button class="delete-btn" type="submit" name="delete">Delete</button></td>
                     <input style="display: none;" type="text" name="ID" value="<?php echo $row['id'];?>">
                    </form>
                </tr>  
                <?php }while($row =  $teacher->fetch_assoc()); ?>
            </tbody>
        </table>
    </section>
</body>
</html>