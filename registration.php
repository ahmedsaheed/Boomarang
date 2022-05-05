<?php
/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
/* Include the Composer generated autoload.php file. */
require 'vendor/autoload.php';
?>

<?php 
$pageTitle="Registration";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
?>

<!------------body starts----------->

<!------------php basics----------->
<?php



//variables to help output error messages
$parentFirstNameSet = false;
$parentLastnameSet = false;
$categorySet = false;
$dayCareSet = false;
$childFirstNameSet = false;
$childLastNameSet = false;
$mailSet = false;
$passwordSet = false;
$userNameSet = false;


//Function to sanitize user input
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

//Declaring variables that will store final database values
$parentFirstName = '';
$parentLastName = '';
$category = '';
$dayCare = '';
$childFirstName = '';
$childLastName = '';
$mail = '';
$password = '';
$userName = '';
$code=substr(md5(mt_rand()),0,15);


//fetch fee information
$query = "SELECT * FROM fee where name = 'babies';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$feePriceBaby = $row['price'];

$query = "SELECT * FROM fee where name = 'wobblers';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$feePriceWobbler = $row['price'];

$query = "SELECT * FROM fee where name = 'Toddlers';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$feePriceToddlers = $row['price'];

$query = "SELECT * FROM fee where name = 'Preschool';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$feePricePreschool = $row['price'];



?>

<!-------------------------- Childcare Info  ---------------->
<section class="childInfo">
    <div class="row">
        <div class="about-col">
        <h1 style="color: white;">Childcare Information</h1>
        <h2 style="color: white;">Babies</h2>
        <h3 style="color: white;">Day Fee: <?php echo $feePriceBaby?>$</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <h2 style="color: white;">Wobblers</h2>
        <h3 style="color: white;">Day Fee: <?php echo $feePriceWobbler?>$</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <h2 style="color: white;">Toddlers </h2>
        <h3 style="color: white;">Day Fee: <?php echo $feePriceToddlers?>$</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>    
        <h2 style="color: white;">Preschool</h2>
        <h3 style="color: white;">Day Fee: <?php echo $feePricePreschool?>$</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="about-col">
            <img src="images/childCareInfo.jpg">
        </div>
    </div>
</section>

<!------------Form Box----------->
<section class="main">
<!-- <div class="login-box">
  <h2>Login</h2>
  <form action="login.php" method="post">
    <div class="user-box">
      <label for="mail">First Name:</label><br>
            <input type="email" id="mail" name="mail" 
            value="<?php
            
            if (isset($_POST['mail']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', Pass_Input($_POST['mail']))){
                $mail = Pass_input($_POST['mail']);
                echo $mail;
                $mailSet = true;
            }?>">
            
                <?php 
                if (!empty($_POST)){
                    if(!$mailSet)echo'<p style="color: red;">Invalid email Input!</p>';
                }?>
            
    </div>
    <div class="user-box">
      <label for="mail">Last Name:</label><br>
            <input type="email" id="mail" name="mail" 
            value="<?php
            
            if (isset($_POST['mail']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', Pass_Input($_POST['mail']))){
                $mail = Pass_input($_POST['mail']);
                echo $mail;
                $mailSet = true;
            }?>">
            
                <?php 
                if (!empty($_POST)){
                    if(!$mailSet)echo'<p style="color: red;">Invalid email Input!</p>';
                }?>
            
    </div>
    <div class="user-box">
      <label for="mail">Email:</label><br>
            <input type="email" id="mail" name="mail" 
            value="<?php
            
            if (isset($_POST['mail']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', Pass_Input($_POST['mail']))){
                $mail = Pass_input($_POST['mail']);
                echo $mail;
                $mailSet = true;
            }?>">
            
                <?php 
                if (!empty($_POST)){
                    if(!$mailSet)echo'<p style="color: red;">Invalid email Input!</p>';
                }?>
            
    </div>
    <div class="user-box">
      <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" 
            value="<?php
            //Between 8-12 alphanumeric, include at least 1 number and exactly 1 special character
            if (isset($_POST['password']) && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', Pass_Input($_POST['password']))){
                $password = Pass_input($_POST['password']);
                echo $password;
                $passwordSet = true;
            }?>">
                <?php 
                if (!empty($_POST)){
                    if(!$passwordSet)echo'<p style="color: red;">Invalid password Input!</p>';
                }?>
            
    </div>    
    

      <span></span><button type="submit" class="hero-btn">Login</button>
</div> -->
    <div class="box-form">
        <h1>Registration form</h1>
        <form action="registration.php" method="post">

            <!------------Parent first name----------->
            <label for="parentFirstName">Parent First Name:</label>
            <input type="text" id="parentFirstName" name="parentFirstName" 
            value="<?php
             
            if (isset($_POST['parentFirstName']) && preg_match('/^[a-z]{3,25}$/i', Pass_Input($_POST['parentFirstName']))){
                $parentFirstName = ucfirst(strtolower(Pass_input($_POST['parentFirstName'])));
                echo $parentFirstName;
                $parentFirstNameSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$parentFirstNameSet)echo'<p style="color: red;">Invalid name Input!</p>';
                }?>
            </div>

            <!------------Parent  last name----------->
            <label for="parentLastName">Parent Last Name:</label>
            <input type="text" id="parentLastName" name="parentLastName" 
            value="<?php
             
            if (isset($_POST['parentLastName']) && preg_match('/^[a-z]{3,25}$/i', Pass_Input($_POST['parentLastName']))){
                $parentLastName = ucfirst(strtolower(Pass_input($_POST['parentLastName'])));
                echo $parentLastName;
                $parentLastnameSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$parentLastName)echo'<p style="color: red;">Invalid name Input!</p>';
                }?>
            </div>
            

            <!------------email----------->
            <label for="mail">Email:</label>
            <input type="email" id="mail" name="mail" 
            value="<?php
             
            if (isset($_POST['mail']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', Pass_Input($_POST['mail']))){
                $mail = Pass_input($_POST['mail']);
                echo $mail;
                $mailSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$mailSet)echo'<p style="color: red;">Invalid email Input!</p>';
                }?>
            </div>


            <!------------password----------->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" 
            value="<?php
            //Between 8-12 alphanumeric, include at least 1 number and exactly 1 special character
            if (isset($_POST['password']) && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', Pass_Input($_POST['password']))){
                $password = Pass_input($_POST['password']);
                echo $password;
                $passwordSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$passwordSet)echo'<p style="color: red;">Invalid password Input! Try something stronger 8-12 in length.</p>';
                }?>
            </div>


            <!------------child  first name----------->
            <label for="childFirstName">Child First Name:</label>
            <input type="text" id="childFirstName" name="childFirstName" 
            value="<?php
             
            if (isset($_POST['childFirstName']) && preg_match('/^[a-z]{3,25}$/i', Pass_Input($_POST['childFirstName']))){
                $childFirstName = ucfirst(strtolower(Pass_input($_POST['childFirstName'])));
                echo $childFirstName;
                $childFirstNameSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$childFirstNameSet)echo'<p style="color: red;">Invalid name Input!</p>';
                }?>
            </div>


            <!------------child  last name----------->
            <label for="childLastName">Child Last Name:</label>
            <input type="text" id="childLastName" name="childLastName" 
            value="<?php
             
            if (isset($_POST['childLastName']) && preg_match('/^[a-z]{3,25}$/i', Pass_Input($_POST['childLastName']))){
                $childLastName = ucfirst(strtolower(Pass_input($_POST['childLastName'])));
                echo $childLastName;
                $childLastNameSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$childLastNameSet)echo'<p style="color: red;">Invalid name Input!</p>';
                }?>
            </div>


            <!------------category----------->
            <label for="category">Category:</label>
            <select name="category" id="category">
                <option value="">None</option>
                <option value="babies"<?php if(isset($_POST['category'])&& $_POST['category']=="babies") echo 'selected="selected"',$categorySet = true;?>>babies</option>
                <option value="wobblers"<?php if(isset($_POST['category'])&& $_POST['category']=="wobblers") echo 'selected="selected"',$categorySet = true;?>>wobblers</option>
                <option value="toddlers"<?php if(isset($_POST['category'])&& $_POST['category']=="toddlers") echo 'selected="selected"',$categorySet = true;?>>toddlers</option>
                <option value="preschool"<?php if(isset($_POST['category'])&& $_POST['category']=="preschool") echo 'selected="selected"',$categorySet = true;?>>preschool</option>
            </select><br>
            <div class='invalid'>
                <?php
                if($categorySet){
                    $category = pass_input($_POST['category']);
                }
                else{
                    if (!empty($_POST)){
                        echo '<p style="color: red;">Invalid category selected!<p>';}
                    }
                ?>
            </div>

            <!------------day care need----------->
            <label for="dayCare">Day Care:</label>
            <select name="dayCare" id="dayCare" >
                <option value="">None</option>
                <option value="halfDay"<?php if(isset($_POST['dayCare'])&& $_POST['dayCare']=="halfDay") echo 'selected="selected"',$dayCareSet = true;?>>Half day care</option>
                <option value="fullDay"<?php if(isset($_POST['dayCare'])&& $_POST['dayCare']=="fullDay") echo 'selected="selected"',$dayCareSet = true;?>>Full day care</option>
                <option value="1day"<?php if(isset($_POST['dayCare'])&& $_POST['dayCare']=="1day") echo 'selected="selected"',$dayCareSet = true;?>>1 day care</option>
                <option value="3day"<?php if(isset($_POST['dayCare'])&& $_POST['dayCare']=="3day") echo 'selected="selected"',$dayCareSet = true;?>>3 days care</option>
                <option value="5day"<?php if(isset($_POST['dayCare'])&& $_POST['dayCare']=="5day") echo 'selected="selected"',$dayCareSet = true;?>>5 days care</option>                  
            </select><br>
            <div class="invalid">
                <?php
                if ($dayCareSet){
                    $dayCare = pass_input($_POST['dayCare']);
                }
                else{
                    if (!empty($_POST)){
                        echo '<p style="color: red;">Invalid day care selected!<p>';}
                    }
                ?>
            </div>  
            
            
            <button type="submit" class="hero-btn ">Register</button><p></p>
        </form>
        

        <!------------Database interaction----------->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            //check if ALL user data is ready to go to database                
            if($categorySet && $dayCareSet && $childFirstNameSet && $childLastNameSet && 
                $mailSet && $passwordSet && $parentFirstNameSet && $parentLastnameSet){
                    
                    //Check if email already exists in database
                    $duplicatedMail = false;                
                    $query = "SELECT email FROM parent";
                    $result = mysqli_query($conn, $query);
                    if($result){
                        while($row = mysqli_fetch_array($result)){
                            $emailInTable = $row['email'];
                            if($emailInTable == $mail){
                                echo '<div class="invalid"><h2 style="color: red;">Registration failed!</h2></div>';
                                echo '<div class="invalid" style="color: red;">Email already registered</div>';
                                $duplicatedMail = true;
                            } 
                        }
                    }

                    //if email is unique, run query
                    if(!$duplicatedMail){
                        $codes = $code;
                        //statement to insert parent data into database
                    //**********************YOU'D HAVE TO RUN THIS QUERY TO CREATE AN INTENT TABLE*********************************** */
                        // CREATE TABLE `intent` (
                        //     `email` varchar(50) NOT NULL,
                        //     `first_name` varchar(30) NOT NULL,
                        //     `last_name` varchar(30) NOT NULL,
                        //     `password` varchar(20) NOT NULL,
                        //     `code` text NOT NULL,
                        //     `child_first_name` varchar(30) NOT NULL,
                        //     `child_last_name` varchar(30) NOT NULL,
                        //     `category` varchar(15) NOT NULL,
                        //     `day_care` varchar(20) NOT NULL,
                        //     PRIMARY KEY(email)
                        //   );
                    /********************************************************************************************* */

                        $sql = "INSERT INTO intent (email, first_name, last_name, password, code, child_first_name, child_last_name, category, day_care)
                        VALUES ('$mail', '$parentFirstName', '$parentLastName', '$password', '$codes', '$childFirstName', '$childLastName', '$category', '$dayCare');";
                        mysqli_query($conn,$sql);
                        //Send confirmation link email
                            $xmail = new PHPMailer();
                            try{
                            $xmail->isSMTP();
                            $xmail->SMTPDebug = SMTP::DEBUG_OFF;
                            $xmail->Host = 'smtp.gmail.com';
                            $xmail->Port = 465;
                            $xmail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                            $xmail->SMTPAuth = true;
                            
                            //Make sure to use your gmail address here
                            $xmail->Username = 'abdulrazaqahmed60@gmail.com';
                            
                            //Password to use for SMTP authentication
                            /*App needs a specific password from your email to work follow this link and it's instructions
                             https://support.google.com/mail/answer/185833?hl=en */
                                
                            $xmail->Password = 'wkvovnnvfshhlgeu';
                            $xmail->setFrom('noreply@boomerang.com', 'Boomerang');
                            $xmail->addAddress($mail, $parentFirstName);
                            $xmail->isHTML(true);  
                            $xmail->Subject = 'Activation Link From Boomerang Child Care ';
                            $xmail->Body = 'Hi '.$parentLastName.' '.$parentFirstName.',<br><br>
                            
                            Thanks for signing up!
                            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                            <br><br><br>
                            
                            Please click this link to activate your account:
                            
                            <a href="http://localhost:8888/registration.php?email='.$mail.'&code='.$codes.'">Verify Email!</a>                            
                            ';
                            $xmail->send();
                            }catch (Exception $e)
                             {
                                /* PHPMailer exception. */
                                echo $e->errorMessage();
                             }
                             catch (\Exception $e)
                             {
                                /* PHP exception (note the backslash to select the global namespace Exception class). */
                                echo $e->getMessage();
                             }

                    
                            // echo'<h2>Registration successfully!</h2>';
                            echo'<h3>A Confirmation Email has been sent to you</h3>';
                        }
                }


 
            }                   
        
        
        if(isset($_GET['email']) && isset($_GET['code'])){
            
            $email=$_GET['email'];
	        $codee=$_GET['code'];
            //$select="select email, first_name, last_name, password from intent where email='$email' and code='$code';";
                        $sql = "SELECT * FROM intent WHERE email= '$email' AND code= '$codee' ;";
                        $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) == 1) {
                                $row = mysqli_fetch_array($result);
                                $xmail = $row['email'];
                                $firstName = $row['first_name'];
                                $lastName = $row['last_name'];
                                $password=$row['password'];
                                $ChildFirstName = $row['child_first_name'];
                                $ChildLastName = $row['child_last_name'];
                                $Category = $row['category'];
                                $Care = $row['day_care'];
                            }
                            
                            if(!empty($xmail) && !empty($firstName) && !empty($lastName) &&
                             !empty($Care)&& !empty($password) && !empty($ChildFirstName) &&
                             !empty($ChildLastName && !empty($Category))){
                                $sql = "INSERT INTO parent (email, first_name, last_name, password)
                                VALUES ('$xmail', '$firstName', '$lastName', '$password');";
                                mysqli_query($conn,$sql);
                                

                                $sql = "INSERT INTO child (parent_email, first_name, last_name, category, day_care)
                                VALUES ('$email', '$ChildFirstName', '$ChildLastName', '$Category', '$Care');";
                                mysqli_query($conn,$sql);
                        
                                $sql = "DELETE FROM intent;";
                                mysqli_query($conn, $sql);
                                 mysqli_close($conn);
                                echo "<h3 style='color:green; text-align:center;'>You have been verified successfully, you can now proceed to login.</h3>";
                                echo " <a href='login.php'><h3 style='color:black; text-align:center;'>Click to Login</h3></a>";
                              }else{
                                  
                                $sql = "DELETE FROM intent;";
                                mysqli_query($conn, $sql);
                                mysqli_close($conn);
                              echo"<h3 style='color:red; text-align:center;'>Unable to complete registration, please try again.</h3>";
                              
                            }
    
                        }
     
        ?>
        <!------------END Database interaction----------->
    </div>
</section><br>





<?php
include_once('footer2.php');
?>   




