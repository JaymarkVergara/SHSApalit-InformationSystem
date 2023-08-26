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

    <section id="prof">
        <h2 class="sub-header">Professor</h2>
        <div class="main-prof-container">

        <div class="prof-container">
            <div class="prof-img">
                <img src="img/prof.jfif" alt="">
            </div>
            <div class="prof-txt">
                <p>Mr.Euclid Vergara</p>
                <p style="opacity: 0.7; font-weight: 500;">Css teacher</p>
            </div>
        </div>

        <div class="prof-container">
            <div class="prof-img">
                <img src="img/prof2.jpg" alt="">
            </div>
            <div class="prof-txt">
                <p>Mr.Angelo Reyes</p>
                <p style="opacity: 0.7; font-weight: 500;">EIM teacher</p>
            </div>
        </div>

        <div class="prof-container">
            <div class="prof-img">
                <img src="img/prof3.jpg" alt="">
            </div>
            <div class="prof-txt">
                <p>Mr.Martin Rivera</p>
                <p style="opacity: 0.7; font-weight: 500;">Abm teacher</p>
            </div>
        </div>  

        <div class="prof-container">
            <div class="prof-img">
                <img src="img/prof4.jpg" alt="">
            </div>
            <div class="prof-txt">
                <p>Mr.Pory Gates</p>
                <p style="opacity: 0.7; font-weight: 500;">Animation teacher</p>
            </div>
        </div>  

        <div class="prof-container">
            <div class="prof-img">
                <img src="img/prof5.jpg" alt="">
            </div>
            <div class="prof-txt">
                <p>Mr.Annah Henley</p>
                <p style="opacity: 0.7; font-weight: 500;">Programming teacher</p>
            </div>
        </div>  

        <div class="prof-container">
            <div class="prof-img">
                <img src="img/prof6.jfif" alt="">
            </div>
            <div class="prof-txt">
                <p>Mr.Marie Peroramas</p>
                <p style="opacity: 0.7; font-weight: 500;">Tailoring teacher</p>
            </div>
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