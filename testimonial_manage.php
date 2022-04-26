<?php 
$pageTitle="Testimonial Manage";
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
$testimonialIDSet = false;


//Function to sanitize user input
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

//Declaring variables that will store final database values
$testimonialID = '';


?>
<!------------Form Box----------->
<section class="main">
    <div class="box-form">

        <?php   
        $query = "SELECT * FROM testimonial;";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            //print_r($row);
            $rowID = 'ID: '.$row['ID'];
            $name = $row['name'];
            $service = $row['service'];
            $date = $row['date'];
            $message = $row['message'];
            echo $rowID.'-->'.$name.'-->'.$service.'-->'.$date.'-->'.$message.'<br><br>';
        }?>


        <form action="testimonial_manage.php" method="post">

            <!------------testimonialID----------->
            <input type="number" id="testimonialID" name="testimonialID"  
            value="<?php
            if (isset($_POST['testimonialID']) && preg_match('/^[0-9]{1,100}$/', Pass_Input($_POST['testimonialID']))){
                $testimonialID = Pass_input($_POST['testimonialID']);
                echo $testimonialID;
                $testimonialIDSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php 
                if (!empty($_POST)){
                    if(!$testimonialIDSet)echo'<p>Invalid testimonia lID Input!</p>';
                }?>
            </div>

        <button type="submit" class="hero-btn ">Approve Testimonial ID</button>
        </form>


        <!------------Database interaction----------->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            if($testimonialIDSet){

                $sql = "SELECT * FROM testimonial WHERE ID = '$testimonialID'";
                $result  = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) == 1){
                    //statement to update approved collunm on testimonial page
                    $sql = "UPDATE testimonial SET 
                    approved = '1'
                    WHERE ID = '$testimonialID' ;";
                    mysqli_query($conn,$sql);
                    echo'<h2>Testimonial approved successfully!</h2>';
                }
                else{
                    echo'<h2>Testimonial ID not found!</h2>';
                }
          
                    
            }
        }?>

        <!------------END Database interaction----------->

        
    

    </div>
</section>


                    

            




<?php
include_once('footer2.php');
?>   