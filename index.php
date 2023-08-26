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
    <link src="js.js">

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
                <button id="login-btn" onclick="location.href = 'http://localhost/StudentsInformationSystem/login.php';">Login</button>
            </ul>
        </div>
    </section>

    <section id="hero">
        <div class="hero-texts">
        <h1>Senior High School in Apalit</h1>
        <p>a distinguished senior high school nestled in the vibrant town of Apalit. We are proud to offer a wide array of educational opportunities to empower and inspire the next generation of leaders and innovators.</p>
        <div class="hero-btn">
         <div><button  onclick="location.href = 'http://localhost/StudentsInformationSystem/Contact.php';" >Enroll Now!</button></div>
        </div>
        </div>
        <div class="hero-img">
            <img src="img/bg-home.jpg">
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

    <section id="course">
        <h2 class="sub-header">Courses</h2>
        <div class="main-course-container">

        <div class="course-container">
            <div class="course-img">
                <img src="img/css.jfif" alt="">
            </div>
            <div class="course-txt">
                <p>Computer System Servicing</p>
            </div>
        </div>

        <div class="course-container">
            <div class="course-img">
                <img src="img/eim.jfif" alt="">
            </div>
            <div class="course-txt">
                <p>EIM</p>
            </div>
        </div>

        <div class="course-container">
            <div class="course-img">
                <img src="img/programming.jpg" alt="">
            </div>
            <div class="course-txt">
                <p>Programming</p>
            </div>
        </div>  
        
        <div class="course-container">
            <div class="course-img">
                <img src="img/abm.jfif" alt="">
            </div>
            <div class="course-txt">
                <p>ABM</p>
            </div>
        </div>  

        <div class="course-container">
            <div class="course-img">
                <img src="img/animation.png" alt="">
            </div>
            <div class="course-txt">
                <p>Animation</p>
            </div>
        </div>  

        <div class="course-container">
            <div class="course-img">
                <img src="img/tailoring.jfif" alt="">
            </div>
            <div class="course-txt">
                <p>TAIloring</p>
            </div>
        </div>  
       
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

    <section id="contact">
        <div class="contact-container">
        <h2 class="sub-header">Admission Form</h2>

        <form action="/action_page.php">
        
            <input type="text" class="contact-input" name="name" placeholder="Your Name">
            <input type="email" class="contact-input" name="email" placeholder="Your Email">
            <input type="text" class="contact-input" name="phonenumber" placeholder="Phone Number">
            
            <label for="Subject" class="subject">Subject</label>
            <select id="subject" name="subject">
            <option value="">Select Option</option>
            <option value="CSS">CSS</option>
            <option value="STEM">STEM</option>
            <option value="ABM">ABM</option>
            <option value="ABM">TAILORING</option>
            <option value="ABM">EIM</option>
            </select>
            
            <textarea type="text" class="contact-input text-area" placeholder="Your Message" rows="4" cols="5" > Your Message
            </textarea>
            <input type="submit" id="send-btn" value="Submit">
    </form>   
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