<?php 
$pageTitle="Registration Edit";
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
$categorySet = false;
$feePriceSet = false;




//Function to sanitize user input


//Declaring variables that will store final database values
$category = '';
$feePrice = '';



?>

<div class="blog-content">
    <div class="row">
        <div class="blog-left">  
            <div class="comment-box">
                <h3 style="color: white;">Hello <?php echo $_SESSION['name'];?>, update the fields below regarding the fee prices.</h3>
                
                <form class="comment-form" action="registration_edit.php" method="post">
                    
                <!------------Fuel Type----------->
                <label for="category" style="color: white;">Category:</label>
                <select name="category" id="category">
                    <option value="">None</option>
                    <option value="babies"<?php if(isset($_POST['category'])&& $_POST['category']=="babies") echo 'selected="selected"',$categorySet = true;?>>babies</option>
                    <option value="wobblers"<?php if(isset($_POST['category'])&& $_POST['category']=="wobblers") echo 'selected="selected"',$categorySet = true;?>>wobblers</option>
                    <option value="Toddlers"<?php if(isset($_POST['category'])&& $_POST['category']=="Toddlers") echo 'selected="selected"',$categorySet = true;?>>Toddlers</option>
                    <option value="Preschool"<?php if(isset($_POST['category'])&& $_POST['category']=="Preschool") echo 'selected="selected"',$categorySet = true;?>>Preschool</option>
                </select><br>
                <div class='invalid'>
                    <?php
                    if($categorySet){
                        $category = pass_input($_POST['category']);
                    }
                    else{
                        if (!empty($_POST)){
                            echo '<p>Invalid category input!<p>';}
                        }
                    ?>
                </div>


                <!------------new price----------->
                <input type="number" id="feePrice" name="feePrice" placeholder="Enter New Fee Price" 
                value="<?php
                if (isset($_POST['feePrice']) && preg_match('/^[0-9]{1,15}$/', Pass_Input($_POST['feePrice']))){
                    $feePrice = Pass_input($_POST['feePrice']);
                    echo $feePrice;
                    $feePriceSet = true;
                }?>"><br>
                <div class='invalid'>
                    <?php 
                    if (!empty($_POST)){
                        if(!$feePriceSet)echo'<pstyle="color: red;">Invalid Fee Price Input!</p>';
                    }?>
                </div>

                    <button type="submit" class="hero-btn blue-btn">UPDATE FEE </button>
                </form>

                <!------------Database interaction----------->
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                        //check if ALL user data is ready to go to database                
                        if($feePriceSet && $categorySet){

                            //statement to UPDATE feature box
                            $sql = "UPDATE fee SET 
                            price = '$feePrice'
                            WHERE name = '$category';";
                            mysqli_query($conn,$sql);
                            echo '<h2 style="color: white;">Fee updated successfully!</h2>';
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