<?php
/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
/* Include the Composer generated autoload.php file. */
require 'vendor/autoload.php';
?>

<?php 
$pageTitle="Newsletter";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
//admin page only
if (!($_SESSION['user_email'] == 'admin@boomerang.com')) { 
    // if use email is not the admin email
    header("location: login.php");
    exit;
}

?>
<!-------------------------- this is body  ---------------->

<!------------php basics----------->
<?php
//variables to help output error messages
$titleSet = false;
$messageSet = false;


//Function to sanitize user input

//Declaring variables that will store final database values
$title = '';
$message = '';
?>

<div class="blog-content">
    <div class="row">
        <div class="blog-left">  
            <div class="comment-box">
                <h3 style="color: white;">Hello <?php echo $_SESSION['name'];?>, create a newsletter by filling the boxes propriately.</h3>
                
                <form class="comment-form" action="newsletter.php" method="post">
                  <div>  
                    <!------------title----------->
                    <input type="text" id="title" name="title" placeholder="Enter News letter Subject here"
                    value="<?php
                    if (isset($_POST['title']) && preg_match('/^[a-z ]{3,79}$/i', Pass_Input($_POST['title']))){
                        $title = Pass_input($_POST['title']);
                        echo $title;
                        $titleSet = true;
                    }?>"><br>
                    <div class='invalid'>
                        <?php 
                        if (!empty($_POST) || !titleSet) {
                            if(!$title)echo'<p style="color:red;>Empty Subject!</p>';
                        }?>
                    </div>


                    <!------------text message----------->
                    <textarea rows="5" id="message" name="message" placeholder="Enter the news letter body here" 
                    ><?php
                    if (isset($_POST['message']) && (strlen(Pass_input($_POST['message'])) <= 10000)){
                        $message = Pass_input($_POST['message']);
                        echo $message;
                        $messageSet = true;
                    }?></textarea><br>
                    <div class='invalid'>
                        <?php 
                        if (!empty($_POST) || !messageSet){
                            if(!$messageSet)echo'<p style="color:red;>Empty Body!</p>';
                        }?>
                    </div>
                    <button type="submit" class="hero-btn blue-btn">SEND NEWS LETTER </button>
                </form>

                <!------------Database interaction----------->
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' ){

                        if($messageSet && $titleSet){
                        $sql = mysqli_query($conn, "SELECT * FROM subscribers");
                        while($row = mysqli_fetch_array($sql)) {
                            $subscribers[] = $row['email'];
                         }
                        foreach($subscribers as $email) {
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
                         $xmail->addAddress($email);
                         $xmail->isHTML(true);  
                         $xmail->Subject = $title;
                         $xmail->Body = $message;
                         $xmail->send();
                         }catch (Exception $e){
                             /* PHPMailer exception. */
                             echo $e->errorMessage();
                          }
                          catch (\Exception $e)
                          {
                             /* PHP exception (note the backslash to select the global namespace Exception class). */
                             echo $e->getMessage();
                          }
                        
                        }
                        if (!$xmail->send()) {
                            echo 'Mailer Error: ' . $xmail->ErrorInfo;
                        } else {
                            echo '<p style="color:white;">All Newsletter sent!</p>';
                        }
                    }else{echo'<p style="color: red;">Fields are yet to be field</p>';}
                }

                    ?>
                    </div>
                    <!------------END Database interaction----------->
                </div>
            </div>
        </div>
    </div>
</div>








<?php
include_once('footer2.php');
?>   