<?php 
$pageTitle="Contact Us";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
?>
<!-------------------------- body  ---------------------->
<!------------php basics----------->
<?php
//variables to help output error messages
$nameSet = false;
$mailSet = false;
$phoneSet = false;
$messageSet = false; 


//Function to sanitize user input
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

//Declaring variables that will store final database values
$name = '';
$mail = '';
$phone = '';
$message = '';
?>


<!---------------------- Contact Us  -------------->
<section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4904.928447664439!2d-6.283179955446332!3d53.3316673403097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c1833b915c7%3A0x4f83acae16f5062e!2sGriffith%20College!5e0!3m2!1spt-BR!2sie!4v1649857067136!5m2!1spt-BR!2sie" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5>S Circular Rd, Dublin 8</h5>
                    <p>Dublin, Ireland</p>
                </span>
            </div>
            <div>
                <i class="fas fa-phone-alt"></i>
                <span>
                    <h5>+353 83 365 4444</h5>
                    <p>Monday to Saturday, 7AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fas fa-envelope-square"></i>
                <span>
                    <h5>boomerang@gmail.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>




        <div class="contact-col">
            <form action="contactUs.php" method="post">


            <!------------person Name----------->
            <input type="text" id="name" name="name" placeholder="Enter your name" 
            value="<?php
            if (isset($_POST['name']) && preg_match('/^[a-z ]{3,40}$/i', Pass_Input($_POST['name']))){
                $name = ucfirst(strtolower(Pass_input($_POST['name'])));
                echo $name;
                $nameSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$nameSet)echo'<p>Invalid name Input!</p>';
                }?>
            </div>



            <!------------email----------->
            <input type="email" id="mail" name="mail" placeholder="Enter email address" 
            value="<?php
             
            if (isset($_POST['mail']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', Pass_Input($_POST['mail']))){
                $mail = Pass_input($_POST['mail']);
                echo $mail;
                $mailSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$mailSet)echo'<p>Invalid email Input!</p>';
                }?>
            </div>



            <!------------number----------->
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" 
            value="<?php
            if (isset($_POST['phone']) && preg_match('/^[0-9 ]{7,20}$/', Pass_Input($_POST['phone']))){
                $phone = Pass_input($_POST['phone']);
                echo $phone;
                $phoneSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$phoneSet)echo'<p>Invalid phone Input!</p>';
                }?>
            </div>



            <!------------testimonial message----------->
            <textarea rows="8" id="message" name="message" placeholder="Your Message Here" 
            ><?php
            if (isset($_POST['message']) && (strlen(Pass_input($_POST['message'])) <= 500)){
                $message = Pass_input($_POST['message']);
                echo $message;
                $messageSet = true;
            }?></textarea><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$messageSet)echo'<p>Invalid message Input!</p>';
                }?>
            </div>


                <button type="submit" class="hero-btn blue-btn">Send Message</button>
            </form>


            <!------------Database interaction----------->
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                //check if ALL user data is ready to go to database                
                if($nameSet && $messageSet && $mailSet && $phoneSet){

                    //statement to insert parent data into database
                    $sql = "INSERT INTO contact_us (name, email, phone, message)
                    VALUES ('$name', '$mail', '$phone', '$message');";
                    mysqli_query($conn,$sql);
                    mysqli_close($conn);

                    echo'<h4>Message sent successfully!</h4>';
                }
            }?>
            <!------------END Database interaction----------->

        </div>




    </div>
</section>

<?php
include_once('footer2.php');
?>   
