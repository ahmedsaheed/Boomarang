<?php 
$pageTitle="Day Details";
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
$dateSet = false;
$recordFound = false;


//Function to sanitize user input
function pass_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
}

//Declaring variables that will store final database values
$date = '';

if(isset($_SESSION['childID'])){
    $childID = $_SESSION['childID'];
}
else{
    $childID = -1;

}


?>


<!------------Form Box----------->
<section class="main">
    <div class="box-form">
        <h1>Day Details</h1>
        <p>Select records date below:</p>
        <form action="day_details.php" method="post">


            <!-----------child ID (admin only)------------>
            <?php if($childID == -1){?>

                <label for="childID">Child ID:</label>
                    <input type="number" id="childID" name="childID" 
                    value="<?php 
                    if (isset($_POST['childID'])){
                        $childID = $_POST['childID'];
                        echo $childID;
                    };?>"><br>

            <?php };?>



            <!-----------Date of deatils------------>
            <label for="date">Date of First Registration:</label>
            <input type="date" id="date" name="date" 
            value="<?php
            //date must be YYYY-MM-DD
            if (isset($_POST['date']) && preg_match('/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/', Pass_Input($_POST['date']))){
                $date = Pass_input($_POST['date']);
                echo $date;
                $dateSet = true;
            }?>"><br>
            <div class='invalid'>
                <?php
                if (!empty($_POST)){
                    if(!$dateSet)echo'<p>Invalid date!</p>';
                }?>
            </div>
            <button type="submit" class="hero-btn ">Search</button>

            
            <!------------Database interaction----------->
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                //check if ALL user data is ready to go to database                
                if($dateSet){
                    //Look for date and child id in table 
                    $query = "SELECT * FROM day WHERE date = '$date' AND child_ID = '$childID' ;";
                    $result = mysqli_query($conn, $query);
                    
                    if(mysqli_num_rows($result) == 1) {
                        echo'<h2>Data found successfully!</h2>';
                        $row = mysqli_fetch_array($result);
                        
                        $dateRecord = $row['date'];
                        $temperature = $row['temperature'];
                        $breakfast = $row['breakfast'];
                        $lunch = $row['lunch'];
                        $activities = $row['activities'];
                        $recordFound = true;

                        //search child name
                        $query = "SELECT * FROM child WHERE child_ID = '$childID' ;";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result) == 1) {
                            $row = mysqli_fetch_array($result);
                            $childName = $row['first_name'].' '.$row['last_name'];

                        }

                        
                    }
                    else{
                        echo '<br>No records on this date';
                    }
                    
                    
                    


                }                   
            }?>
            <!------------END Database interaction----------->
        </form>
    </div>
</section>


<!------------Display table----------->
<?php if($recordFound){?>
    <div class="table-container">
        <table>
            <caption>Child data</caption>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Temperature</th>
                <th>Breakfast</th>
                <th>Lunch</th>
                <th>Activities</th>
            </tr>
            <tr>
                <td><?php echo $childName;?></td>
                <td><?php echo $dateRecord;?></td>
                <td><?php echo $temperature;?></td>
                <td><?php echo $breakfast;?></td>
                <td><?php echo $lunch;?></td>
                <td><?php echo $activities;?></td>
            </tr>
        </table>
    </div>
<?php };?>










<?php
include_once('footer2.php');
?>   