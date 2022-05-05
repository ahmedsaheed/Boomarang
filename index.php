<?php 
session_start(); 
//Include connection file
//include_once '../../include/connection.php';
include_once 'connection.php'; ?> 
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
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <script defer src="script.js"></script>
    <title>Boomerang</title>
</head>
<body>
    <section class="header">
            <nav>
                <a href="index.php"><img src="images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fas fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="services.php">SERVICES & FACILITIES</a></li>
                        <li><a href="testimonial.php">TESTIMONIALS</a></li>
                        <li><a href="contactUs.php">CONTACT US</a></li>
                        <?php
                        if (isset($_SESSION['user_email'])) { 
                            // if user logged in, give access to resources...
                            echo '<li><a href="day_details.php">DAY DETAILS</a></li>';
                            echo '<li><a href="logout.php">LOGOUT</a></li>';
                            // if user logged in as admin, give admin privilegies
                            if(($_SESSION['user_email'] == 'admin@boomerang.com')){
                                echo '<li><a href="index_edit.php">INDEX EDIT</a></li>';
                                echo '<li><a href="registration_edit.php">REGISTRATION EDIT</a></li>';
                                echo '<li><a href="day_details_edit.php">DAY DETAILS EDIT</a></li>';
                                echo '<li><a href="testimonial_manage.php">TESTIMONIAL MANAGE</a></li>';
                                echo '<li><a href="contact_us_manage.php">CONTACT US MANAGE</a></li>';
                            }
                        }
                        //display login page only if not logged in
                        else {
                            echo '<li><a href="login.php">LOGIN</a></li>'; 
                            echo '<li><a href="registration.php">REGISTRATION</a></li>';
                        }?>
                    </ul>
                </div>
                <i class="fas fa-bars" onclick="showMenu()"></i>
            </nav>
            <div class="text-box">
                <h1>Boomerang Childcare</h1>
            
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    <br>sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="services.php" class="hero-btn">Find Out More</a>
            </div>

        </section>

    <!--------------------------  Location  ---------------->

    <section class="location">
        <h1 style="color: white;">Where we are located</h1>
        <p style="color: white;">Come visit us, you won't regret.</p>

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



    
    
    <!--------------------------Feature Boxes database SELECT---------------->
    <?php 
    //Look for feature box 1 data in database and output 
    $query = "SELECT * FROM page WHERE feature_ID = '1';";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['title'];
            $message = $row['message'];
            $imageURL = $row['picture_path'];
        } 
    }

    //Look for feature box 2 data in database and output 
    $query = "SELECT * FROM page WHERE feature_ID = '2';";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $title2 = $row['title'];
            $message2 = $row['message'];
            $imageURL2 = $row['picture_path'];
        } 
    }
    ?>


    <!--------------------------Feature Boxes ---------------->
    <!-------------------------- url(<?php // echo $imageURL;?>); ---------------->
    <section class="featureBox">
        <style>
        .featureBox{
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(<?php echo $imageURL;?>);
        } 
        </style>
        <h1><?php echo $title;?></h1>
        <p><?php echo $message;?></p>
        <a href="#" class="hero-btn">Find out more</a>
    </section>

    <section class="featureBox2">
        <style>
            .featureBox2{
                background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(<?php echo $imageURL2;?>);
            } 
        </style>
        <h1><?php echo $title2;?></h1>
        <p><?php echo $message2;?></p>
        <a href="#" class="hero-btn">Find out more</a>
    </section>



<!-------------------------- Footer  ---------------->
<?php
include_once('footer2.php');
?>   
