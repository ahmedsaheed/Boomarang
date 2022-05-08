<?php
//Include connection file
//include_once '../../include/connection.php';
include_once 'connection.php'; 
?>

<?php
$EmailSet = false;
$Subcribemail = '';
// function pass_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = strip_tags($data);
//     return $data;
// }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"><link rel="stylesheet" href="footer.css">
 
</head>
<body>
<!-- partial:index.partial.html -->
<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>S Circular Rd, Dublin 8, Dublin Ireland</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+353 83 365 4444</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>boomerang@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.php"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="services.php">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="contactUs.php">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="services.php">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="<?= $_SERVER['PHP_SELF'] ?>" method= "post" >
                                
                                    <input type="email" id="Submail" name="Submail"  placeholder="Email Address"
                                        value="<?php
                                        
                                        
                                        if (isset($_POST['Submail']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', Pass_Input($_POST['Submail']))){
                                            $Subcribemail = Pass_input($_POST['Submail']);
                                            echo $Subcribemail;
                                            $EmailSet = true;
                                        }?>">
                                        
                                            <?php 
                                            if (!empty($_POST)){
                                                if(!$EmailSet)echo'<center><p style="color: red;">Invalid email Input!</p></center>';
                                            }?>

                                            <button type="submit" class="hero-btn">Subscribe</button>
                                </form>
                                                             <!------------Database interaction----------->
                                                <?php
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    // create table subscribers(
                                                    // email varchar(50) NOT NULL
                                                    //     );

                                                    //check if ALL user data is ready to go to database                
                                                    if($EmailSet){

                                                        //statement to UPDATE feature box
                                                        $sql = "INSERT into subscribers (email) VALUES ('$Subcribemail');";
                                                        mysqli_query($conn,$sql);
                                                        echo '<center><p style="color: white;">🎉🎉Thanks for subscribing!🎉🎉</p></center>';
                                                   }
                                                }?>
                                                <!------------END Database interaction----------->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </footer>
<!-- partial -->
  
</body>
</html>
