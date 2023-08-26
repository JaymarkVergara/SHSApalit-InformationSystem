<?php 
include_once("connect/connections.php");
$con = connections();


    session_start();


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

 $sql = "SELECT * FROM `user` WHERE username = '$username' 
  AND password = '$password'";
  $user = $con->query($sql) or die($con->error);
  $row = $user->fetch_assoc();
  $total = $user->num_rows;

    //tignan ang total may nakuha
    if($total > 0){
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['Access'] = $row['access'];
        echo header("Location: admin.php");
    }
    else{
        echo "no user";
    }



}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssadmin/login.css">
    <title>Document</title>
</head>
<body>
<section id="login">
        <div class="login-container">
        <div>
        <h2 class="sub-header">Admin Login</h2>
        </div>
        <form action="" method="post">
            <input type="text" class="login-input" name="username" placeholder="Username">
            <input type="password" class="login-input" name="password" placeholder="Password">
            <input type="submit" name="login" id="send-btn" value="Submit">
         </form>   
            
        </div>  
    </section>
</body>
</html>