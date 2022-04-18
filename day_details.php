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
<h1>day detail table here</h1>



<?php
include_once('footer.php');
?>   