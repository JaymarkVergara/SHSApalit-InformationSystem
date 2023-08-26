<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentsInformationSystem</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/course.css">
    <link rel="stylesheet" href="css/profs.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
    <section id="header">
        <a href="#"><img src="img/shslogo.png" alt="logo" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Courses.php">Courses</a></li>
                <li><a href="Teachers.php">Teachers</a></li>
                <li><a href="Contact.php">Admission</a></li>
                <button id="login-btn" onclick="window.location.href = 'index.php';">Login</button>
            </ul>
        </div>
    </section>


    <section id="about">
    <h2 class="sub-header">About Us</h2>
        <div class="about-container">
        <div class="about-img">
            <img src="img/shslogo.png">
        </div>

        <div class="about-texts">
             <h1>Senior High School in Apalit</h1>
             <p>offers a wide range of undergraduate, graduate, and professional degree programs across various disciplines, including the I.T, Computer Science, Computer Engineer, and more. </p>
        </div>
        </div>
    </section>


    <footer>
        <div class="footer-container">
        <div>
            <ul class="footer">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Courses.php">Courses</a></li>
                <li><a href="Teachers.php">Teachers</a></li>
                <li><a href="Contact.php">Admission</a></li>
            </ul>
        </div>

        <div class="location">
            <div><h3>LOCATION</h3></div>
            <p>Apalit, Pampanga</p>
        </div>
        </div>
    </footer>
</body>
</html>