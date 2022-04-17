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



//variables to help output error messages
$mailSet = false;
$passwordSet = false;


//Function to sanitize user input
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

//Declaring variables that will store final database values
$mail = '';
$password = '';

?>

<!------------Form Box----------->
<section class="main">
    <div class="box-form">
        <h1>Login</h1>
        <p>Some pages need a logged user to be accessed.</p>
        <form action="login.php" method="post">
            
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
                    if(!$mailSet)echo'<p>Invalid email Input!</p>';
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
                    if(!$passwordSet)echo'<p>Invalid password Input!</p>';
                }?>
            </div>
                                 
            <button type="submit" class="hero-btn ">Login</button>
        </form>
        
        <!------------Database interaction----------->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            //check if ALL user data is ready to go to database                
            if($mailSet && $passwordSet){
                
                //statement to insert user data into database
                $query = "SELECT * FROM parent WHERE email='$mail'
                AND password='$password';";
                $result = @mysqli_query($conn, $query);
                if(mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result);
                    // set session variables...
                    $_SESSION['user_email'] = $row['email'];
                    $_SESSION['name'] = $row['first_name'].' '.$row['last_name'];





                    echo('you are logged in as '.$_SESSION['name']);
                    



                } else {
                echo "<h2>Error!</h2> <h3>The username and
                password are incorrect!</h3>";
                }                
            }
        }
        ?>
        <!------------END Database interaction----------->
    </div>
</section>




<?php
include_once('footer.php');
?> 