<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/28528889ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <script defer src="script.js"></script>
    <title>index</title>
</head>
<body>
    <section class="header">
            <nav>
                <a href="home.html"><img src="images/logo.PNG"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fas fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="registration.php">REGISTRATION</a></li>
                        <li><a href="services.php">SERVICES & FACILITIES</a></li>
                        <li><a href="testimonial.php">TESTIMONIALS</a></li>
                        <li><a href="contactUs.php">CONTACT US</a></li>
                        <li><a href="login.php">LOGIN</a></li>

                    </ul>
                </div>
                <i class="fas fa-bars" onclick="showMenu()"></i>
            </nav>
            <div class="text-box">
                <h1>Boomerang Childcare</h1>
            
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    <br>sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="about.html" class="hero-btn">Find Out More</a>
            </div>

        </section>

    <!--------------------------  Location  ---------------->

    <section class="location">
        <h1>Where we are located</h1>
        <p>Come visit us, you won't regret.</p>

        <div class="row">
            <div class="location-col">
                <img src="images/cork.jpg">
                <div class="layer">
                    <h3>CORK</h3>
                </div>
            </div>
            <div class="location-col">
                <img src="images/dublin.jpg">
                <div class="layer">
                    <h3>DUBLIN</h3>
                </div>
            </div>
            <div class="location-col">
                <img src="images/galway.jpg">
                <div class="layer">
                    <h3>GALWAY</h3>
                </div>
            </div>
        </div>
    </section>



    <!--------------------------Feature Boxes ---------------->
    <!-------------------------- url(<?php // echo $imageURL;?>); ---------------->
    <section class="featureBox">
        <style>
        .featureBox{
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(images/feature1.jpg);
        } 
        </style>
        <h1>Feature Box 1</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        <br>sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#" class="hero-btn">link feature 1</a>
    </section>

    <section class="featureBox2">
        <style>
            .featureBox2{
                background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(images/feature2.jpg);
            } 
        </style>
        <h1>Feature Box 2</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        <br>sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#" class="hero-btn">link feature 2</a>
    </section>



<!-------------------------- Footer  ---------------->
<?php
include_once('footer.php');
?>   
