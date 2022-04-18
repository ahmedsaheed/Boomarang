<?php 
session_start(); 
//Include connection file
include_once '../../../include/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/28528889ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <script defer src="script.js"></script>
    <title><?php if(isset($pageTitle))echo($pageTitle);?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
</head>
<body>
<section class="sub-header">
    <nav>
        <a href="index.php"><img src="images/logo.PNG"></a>
        <div class="nav-links" id="navLinks">
            <i class="fas fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="registration.php">REGISTRATION</a></li>
                <li><a href="services.php">SERVICES & FACILITIES</a></li>
                <li><a href="testimonial.php">TESTIMONIALS</a></li>
                <li><a href="contactUs.php">CONTACT US</a></li>
                <?php if (isset($_SESSION['user_email'])) { 
                    // if user logged in, give access to resources...
                    echo '<li><a href="logout.php">LOGOUT</a></li>';
                    } else {
                    echo '<li><a href="login.php">LOGIN</a></li>'; 
                    // do somethingmeaningful here
                    }?>
                
            </ul>
        </div>
        <i class="fas fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1><?php if(isset($pageTitle))echo($pageTitle);?></h1>
</section>
