<?php 
$pageTitle="Day Details Edit";
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
$dateSet = false;
$recordFound = false;


//Function to sanitize user input


//Declaring variables that will store final database values
$date = date("Y-m-d");
?>

<!------------Form Box----------->
<section class="main">
    <div class="box-form">
        <h1>Day Details records</h1>
        <p>Add day details below</p>
        <form action="day_details_edit.php" method="post">


            <!-----------child ID ------------>
            <label for="childID">Valid Child ID:</label>
            <input type="number" id="childID" name="childID" 
            value="<?php 
            if (isset($_POST['childID'])){
                $childID = Pass_input($_POST['childID']);
                echo $childID;
            };?>"><br>

                    
            <!-----------temperature ------------>
            <label for="temperature">Temperature</label>
            <input type="number" id="temperature" name="temperature" 
            value="<?php 
            if (isset($_POST['temperature'])){
                $temperature = Pass_input($_POST['temperature']);
                echo $temperature;
            };?>"><br>



            <!------------breakfast message----------->
            <label for="breakfast">breakfast:</label>
            <input type="text" id="breakfast" name="breakfast" 
            value="<?php
            if (isset($_POST['breakfast'])){
                $breakfast = Pass_input($_POST['breakfast']);
                echo $breakfast;
            }?>"><br>


            <!------------lunch message----------->
            <label for="lunch">lunch:</label>
            <input type="text" id="lunch" name="lunch" 
            value="<?php
            if (isset($_POST['lunch'])){
                $lunch = Pass_input($_POST['lunch']);
                echo $lunch;
            }?>"><br>


            <!------------activity message----------->
            <label for="activity">activity:</label>
            <input type="text" id="activity" name="activity" 
            value="<?php
            if (isset($_POST['activity'])){
                $activity = Pass_input($_POST['activity']);
                echo $activity;
            }?>"><br>
          

            <button type="submit" class="hero-btn ">Update</button>
        </form>


        <!------------Database interaction----------->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            //if child id exists go ahead
            $sql = "SELECT * FROM child WHERE child_ID = '$childID'";
            $result  = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) == 1){

                $query = "SELECT * FROM day WHERE date = '$date' AND child_ID = '$childID' ;";
                $result = mysqli_query($conn, $query);
                //if record already exists today
                if((mysqli_num_rows($result) == 1)) {
                    //statement to update child details
                    $sql = "UPDATE day SET 
                            temperature = '$temperature',
                            breakfast = '$breakfast',
                            lunch = '$lunch',
                            activities = '$activity'
                            WHERE date = '$date' AND child_ID = '$childID' ;";
                            mysqli_query($conn,$sql);
                            echo'<h2>Details updated successfully!</h2>';
                }
                else{
                    //statement to INSERT child details if it doesnt exist
                    $sql = "INSERT INTO day (date, child_ID, temperature, breakfast, lunch, activities)
                    VALUES ('$date', '$childID', '$temperature', '$breakfast', '$lunch', '$activity');";
                    mysqli_query($conn,$sql);
                    echo'<h2>Details inserted successfully!</h2>';
                }

            }
            else{
                echo'<h2>Child ID not Found!</h2>';
            }

                
            
            
        }?>
        <!------------END Database interaction----------->
    </div>
</section>






<?php
include_once('footer2.php');
?>   