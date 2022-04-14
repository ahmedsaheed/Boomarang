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

//Include connection file
include_once '../../../include/connection.php';

//variables to help output error messages
$categorySet = false;
$dayCareSet = false;
$childNameSet = false;
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
$category = '';
$dayCare = '';
$childName = '';
$mail = '';
$password = '';
$userName = '';
?>

<!-------------------------- Childcare Info  ---------------->
<section class="childInfo">
    <div class="row">
        <div class="about-col">
        <h1>Childcare Information</h1>
        <h2>Babies</h2>
        <p>Online-Skate is an internationally known skateboard company founded in 2009.
            Following the Good Environmental Practice Guidelines, Online-Skate only 
            purchases USA hard rock maple wood from controlled forests. </p>
        <h2>Wobblers</h2>
        <p>Online-Skate is an internationally known skateboard company founded in 2009.
            Following the Good Environmental Practice Guidelines, Online-Skate only 
            purchases USA hard rock maple wood from controlled forests.</p>
        <h2>Toddlers </h2>
        <p>Online-Skate is an internationally known skateboard company founded in 2009.
            Following the Good Environmental Practice Guidelines, Online-Skate only 
            purchases USA hard rock maple wood from controlled forests.</p>    
        <h2>Preschool</h2>
        <p>Online-Skate is an internationally known skateboard company founded in 2009.
            Following the Good Environmental Practice Guidelines, Online-Skate only 
            purchases USA hard rock maple wood from controlled forests.</p>
        </div>
        <div class="about-col">
            <img src="images/childCareInfo.jpg">
        </div>
    </div>
</section>

<!------------Form Box----------->
<section class="main">
    <div class="box-form">
        <h1>Registration form</h1>
        <form action="registration.php" method="post">


        <!------------password----------->
        <label for="userName">User Name:</label>
                    <input type="text" id="userName" name="userName" 
                    value="<?php
                    //Name must be length 2-12, only letters. 
                    if (isset($_POST['userName']) && preg_match('/^[a-z\d_]{2,20}$/i', Pass_Input($_POST['userName']))){
                        $userName = Pass_input($_POST['userName']);
                        echo $userName;
                        $userNameSet = true;
                    }?>"><br>
                    <div class='invalid'>
                        <?php 
                        if (!empty($_POST)){
                            if(!$userNameSet)echo'<p>Invalid userName Input!</p>';
                        }?>
                    </div>




        <!------------password----------->
        <label for="password">Password:</label>
                    <input type="password" id="password" name="password" 
                    value="<?php
                    //Name must be length 2-12, only letters. 
                    if (isset($_POST['password']) && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', Pass_Input($_POST['password']))){
                        $password = Pass_input($_POST['password']);
                        echo $password;
                        $passwordSet = true;
                    }?>"><br>
                    <div class='invalid'>
                        <?php 
                        if (!empty($_POST)){
                            if(!$passwordSet)echo'<p>Invalid password Input!</p>';
                        }?>
                    </div>



        <!------------email----------->
        <label for="mail">Email:</label>
                    <input type="email" id="mail" name="mail" 
                    value="<?php
                    //Name must be length 2-12, only letters. 
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


        <!------------child name----------->
        <label for="childName">Child Full Name:</label>
            <input type="text" id="childName" name="childName" 
            value="<?php
            //Name must be length 2-12, only letters. 
            if (isset($_POST['childName']) && preg_match('/^[a-z\d_]{2,20}$/i', Pass_Input($_POST['childName']))){
                $childName = strtolower(Pass_input($_POST['childName']));
                echo $childName;
                $childNameSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$childNameSet)echo'<p>Invalid name Input!</p>';
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
                        echo '<p>Invalid category selected!<p>';}
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
                        echo '<p>Invalid day care selected!<p>';}
                    }
                ?>
            </div>                                                      
            <button type="submit" class="hero-btn ">Register</button>
        </form>
        
        <!------------Database interaction----------->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            //check if ALL user data is ready to go to database                
            if($categorySet && $dayCareSet && $childNameSet && 
                $mailSet && $passwordSet && $userNameSet){
                
                //statement to insert user data into database
                $sql = "INSERT INTO child (user, pass, email, child_name, category, day_care)
                VALUES ('$userName', '$password', '$mail', '$childName', '$category', '$dayCare');";
                mysqli_query($conn,$sql);
                mysqli_close($conn);
                echo'<h2>Registration successfully!</h2>';
                echo'<h2>A Confirmation Email has been sent to you</h2>';
                }                   
            }
        ?>
        <!------------END Database interaction----------->
    </div>
</section>





<?php
include_once('footer.php');
?>   
