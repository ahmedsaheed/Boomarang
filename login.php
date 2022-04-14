<?php 
$pageTitle="Login";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
?>
<!-------------------------- this is body  ---------------->
<!------------php basics----------->
<?php

//Include connection file
include_once '../../../include/connection.php';

//variables to help output error messages
$userNameSet = false;
$passwordSet = false;


//Function to sanitize user input
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

//Declaring variables that will store final database values
$userName = '';
$password = '';

?>

<!------------Form Box----------->
<section class="main">
    <div class="box-form">
        <h1>Login</h1>
        <form action="login.php" method="post">

        <!-----------user name----------->
        <label for="userName">User Name:</label>
            <input type="text" id="userName" name="userName" 
            value="<?php
            //Name must be length 2-12, only letters. 
            if (isset($_POST['userName']) && preg_match('/^[a-z]{3,30}$/', Pass_Input($_POST['userName']))){
                $userName = (Pass_input($_POST['userName']));
                echo $userName;
                $userNameSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$userNameSet)echo'<p>Invalid user name Input!</p>';
                }?>
            </div>

            <!-----------password----------->
        <label for="password">Password:</label>
            <input type="password" id="password" name="password" 
            value="<?php
            //Name must be length 2-12, only letters. 
            if (isset($_POST['password']) && preg_match('/^[a-z]{3,30}$/', Pass_Input($_POST['password']))){
                $password = (Pass_input($_POST['password']));
                echo $password;
                $passwordSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$passwordSet)echo'<p>Invalid password!</p>';
                }?>
            </div>
                                 
            <button type="submit" class="hero-btn ">Login</button>
        </form>
        
        <!------------Database interaction----------->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            //check if ALL user data is ready to go to database                
            if($userNameSet && $passwordSet){
                
                //statement to insert user data into database
                $sql = "INSERT INTO child (full_name, category, day_care)
                VALUES ('$name', '$category', '$dayCare');";
                mysqli_query($conn,$sql);
                mysqli_close($conn);
                echo'<h2>Logged in successfully!</h2>';
                }                   
            }
        ?>
        <!------------END Database interaction----------->
    </div>
</section>




<?php
include_once('footer.php');
?> 