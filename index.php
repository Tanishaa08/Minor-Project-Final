<?php 
include 'Includes/dbcon.php';
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:wght@300&family=Poppins:wght@100;300;400;600;700&family=Raleway:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header">
    <nav>
        <a href="#default" class="logo">AttendEase</a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()" ></i>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="ShowMenu()"></i>
    </nav>
<div class="text-box">
    <h1>Stay Accurate with our </h1>
     <h1>Attendance Management System</h1>
     <a href="index1.php#LogIn" class="hero-btn">LogIn</a>
</div>
</section>
<div class="heading" id="service">
    <h1>Service</h1>
    <p>Revolutionizing attendance management, this section highlights the brief overview of the project.</p>

</div>
<div class="container">
    <section class="about">
        <div class="about-image">
            <img src="images/Online-Attendance-Management-System.png" >
        </div>
        <div class="about-content">
            
            <p>Our student attendance management system website empowers teachers with efficient attendance management and report generation capabilities. Seamlessly integrated into the platform is a user-friendly chatbot, providing real-time assistance and enhancing accessibility for users. With its intuitive interface, educators can effortlessly track attendance and generate detailed reports, streamlining administrative tasks. Designed with usability in mind, our system ensures a smooth and hassle-free experience for teachers, fostering productivity and accountability in the classroom.</p>
             <a href="" class="read-more">Read More</a>
        </div>
 </section>
</div>
<section class="Features" id="features">
    <h1>Features</h1>
    <p>This section highlights the benefits of the student management system.</p>
    <div class="row">
        <div class="features-col">
        
            <h3>Attendance through QR Code</h3>
            <p>Streamline the attendance process and save valuable class time. Students simply scan a unique QR code displayed on their dashboard to mark their presence. This eliminates the need for manual roll calls, improving efficiency and accuracy.</p>


        </div>
        <div class="features-col">
           
            <h3>Proxy Detection</h3>
            <p>Implemented robust proxy detection algorithms to identify and prevent fraudulent attendance entries, ensuring the integrity and accuracy of attendance records. Monitor session activity for irregularities in login patterns, indicative of potential proxy use.</p>

            
        </div>
        <div class="features-col">
           
            <h3>Attendance tracking and Reporting</h3>
            <p>Allowing users to conveniently mark attendance, view attendance history, and generate detailed reports. Automate attendance updates through seamless integration with student databases and academic systems.</p>

            
        </div>
        
    </div>

</section>
<section class="team" id="team">
    <div class="header-teams"> 
    <h1>Our Team</h1>
</div>
<div class="sub-container">
    <div class="row-teams">
        <img src="images/Subandhu.jpg"  alt="">
        <div class="name">Subandhu</div>
        <div class="desig">Developer</div>
        <div class="about">A CSE student eager to unravel the mysteries of code and computation.Whether its debugging bugs or brainstorming breakthroughs, I'm always up for the challenge.</div>
        <div class="social-links">
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>
    </div>
    <div class="row-teams">
        <img src="images/Profile.jpg"  alt="">
        <div class="name">Tanisha Verma</div>
        <div class="desig">Developer</div>
        <div class="about">A CSE student on a mission to make bytes count. With a passion for problem-solving and a love for all things tech, I'm excited to code our way to success. </div>
        <div class="social-links">
            <a href="https://www.instagram.com/tanisha_08___/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/tanisha-verma-0118a623b/"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/Tanishaa08"><i class="fa fa-github"></i></a>
        </div>
    </div>
    <div class="row-teams">
        <img src="images/Aditya2.jpg"  alt="">
        <div class="name">Aditya Maurya</div>
        <div class="desig">Developer</div>
        <div class="about">A coding alchemist weaving dreams into lines of code. With a passion for innovation and a flair for problem-solving, I'm here to sprinkle some creativity into our project.</div>
        <div class="social-links">
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>
    </div>
    </div>
</section>

<footer>
    <div class="container" id="contact">
        <div class="row">

            <div class="col-lg-4">
                <div class="col-one">
                    <h4>AttendEase</h4>
                    <p>Address : KIIT University,Patia,Bhubaneswar </p>
                    <p>Contact No : <a href="tel: +91 98659****59">+91 7344567895</a></p>
                    <p>Email : <a href="mailto:attendease@kiit.ac.in">attendease@kiit.ac.in</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-two">
                    <h4>Important Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#features">Feature</a></li>
                        <li><a href="#team">Our Team</a></li>
                      
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-one">
                    <h4>Social Media</h4>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-mail"></i></a>
                    </div>
                    <p>Copyright &copy; 2024 | All Right Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>



<script>
    var navLinks=document.getElementById("navLinks");
    function ShowMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>
</body>
</html>