<?php 
$pageTitle="index edit";
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
$idSet = false;
$titleSet = false;
$messageSet = false;
$pictureSet = false;


//Function to sanitize user input
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

//Declaring variables that will store final database values
$id = '';
$title = '';
$message = '';
$picture = '';
?>

<div class="blog-content">
    <div class="row">
        <div class="blog-left">  
            <div class="comment-box">
                <h3>Hello <?php echo $_SESSION['name'];?>, update the fields below regarding feature boxes.</h3>
                
                <form class="comment-form" action="index_edit.php" method="post">
                    

                <!------------feature box number----------->
                    <label for="id">Feature box number:</label>
                    <select name="id" id="id" >
                        <option value="">None</option>
                        <option value="1"<?php if(isset($_POST['id'])&& $_POST['id']=="1") echo 'selected="selected"',$idSet = true;?>>1</option>
                        <option value="2"<?php if(isset($_POST['id'])&& $_POST['id']=="2") echo 'selected="selected"',$idSet = true;?>>2</option>
                    </select><br>
                    <div class="invalid">
                        <?php
                        if($idSet){
                            $id = pass_input($_POST['id']);
                        }
                        else{
                            if (!empty($_POST['id'])){
                                echo '<p>Invalid number input!<p>';}
                            }
                        ?>
                    </div>




                    <!------------title----------->
                    <input type="text" id="title" name="title" placeholder="Enter new title here"
                    value="<?php
                    if (isset($_POST['title']) && preg_match('/^[a-z ]{3,79}$/i', Pass_Input($_POST['title']))){
                        $title = Pass_input($_POST['title']);
                        echo $title;
                        $titleSet = true;
                    }?>"><br>
                    <div class='invalid'>
                        <?php 
                        if (!empty($_POST)){
                            if(!$title)echo'<p>Invalid title Input!</p>';
                        }?>
                    </div>


                    <!------------text message----------->
                    <textarea rows="5" id="message" name="message" placeholder="Enter new text here" 
                    ><?php
                    if (isset($_POST['message']) && (strlen(Pass_input($_POST['message'])) <= 490)){
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

                    <!------------picture path----------->
                    <input type="text" id="picture" name="picture" placeholder="Enter new picture path here"
                    value="<?php
                    if (isset($_POST['picture']) && (strlen(Pass_input($_POST['picture'])) <= 189)){
                        $picture = Pass_input($_POST['picture']);
                        echo $picture;
                        $pictureSet = true;
                    }?>"><br>
                    <div class='invalid'>
                        <?php 
                        if (!empty($_POST)){
                            if(!$picture)echo'<p>Invalid picture path Input!</p>';
                        }?>
                    </div>


                    <button type="submit" class="hero-btn blue-btn">UPDATE FEATURE BOX </button>
                </form>

                <!------------Database interaction----------->
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                        //check if ALL user data is ready to go to database                
                        if($titleSet && $messageSet && $pictureSet && $idSet){

                            //statement to UPDATE feature box
                            $sql = "UPDATE page SET 
                            title = '$title',
                            message = '$message',
                            picture_path = '$picture'
                            WHERE feature_ID = '$id';";
                            mysqli_query($conn,$sql);
                            echo'<h2>Feature box updated successfully!</h2>';
                        }
                    }?>
                    <!------------END Database interaction----------->
                </div>
            </div>
        </div>
    </div>
</div>








<?php
include_once('footer.php');
?>   