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
                <li><a class="active" href="About.php">About</a></li>
                <li><a class="active" href="Courses.php">Courses</a></li>
                <li><a class="active" href="Teachers.php">Teachers</a></li>
                <li><a class="active" href="Contact.php">Admission</a></li>
                <button id="login-btn" onclick="window.location.href = 'index.php';">Login</button>
            </ul>
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