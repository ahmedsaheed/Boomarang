<?php 
$pageTitle="Testimonial_add";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
if (!isset($_SESSION['user_email'])) { 
    // if user not logged in,
    header("location: login.php");
    exit;
    }
?>
<!-------------------------- this is body  ---------------->

<!------------php basics----------->
<?php
//variables to help output error messages
$serviceNameSet = false;
$messageSet = false; 


//Function to sanitize user input
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

//Declaring variables that will store final database values
$name = $_SESSION['fName'];
$serviceName = '';
$date = date("Y-m-d");
$message = '';
?>

<div class="blog-content">
    <div class="row">
        <div class="blog-left">  
            <div class="comment-box">
                <h3 style="color: white;">Hello <?php echo $_SESSION['name'];?>, Leave your testimonial below.</h3>
                
                <form class="comment-form" action="testimonial_add.php" method="post">

                    <!------------Service Name----------->
                    <input type="text" id="serviceName" name="serviceName" placeholder="Enter Service Name"
                    value="<?php
                    if (isset($_POST['serviceName']) && preg_match('/^[a-z ]{3,40}$/i', Pass_Input($_POST['serviceName']))){
                        $serviceName = ucfirst(strtolower(Pass_input($_POST['serviceName'])));
                        echo $serviceName;
                        $serviceNameSet = true;
                    }?>"><br>
                    <div class='invalid'>
                        <?php 
                        if (!empty($_POST)){
                            if(!$serviceNameSet)echo'<p style="color: white;">Invalid service Input!</p>';
                        }?>
                    </div>


                    <!------------testimonial message----------->
                    <textarea rows="5" id="message" name="message" placeholder="Your testimonial here" 
                    ><?php
                    if (isset($_POST['message']) && (strlen(Pass_input($_POST['message'])) <= 500)){
                        $message = Pass_input($_POST['message']);
                        echo $message;
                        $messageSet = true;
                    }?></textarea><br>
                    <div class='invalid'>
                        <?php 
                        if (!empty($_POST)){
                            if(!$messageSet)echo'<p style="color: white;">Invalid message Input!</p>';
                        }?>
                    </div>

                    <button type="submit" class="hero-btn blue-btn">POST COMMENT</button>
                </form>

                <!------------Database interaction----------->
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                        //check if ALL user data is ready to go to database                
                        if($serviceNameSet && $messageSet){

                            //statement to insert parent data into database
                            $sql = "INSERT INTO testimonial (name, service, date, message, approved)
                            VALUES ('$name', '$serviceName', '$date', '$message','0' );";
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);

                            echo'<h2 style="color: white;">Testimonial sent successfully!</h2>';
                        }
                    }?>
                    <!------------END Database interaction----------->
                </div>
            </div>
        </div>
    </div>
</div>







<?php
include_once('footer2.php');
?>   