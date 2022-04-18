<?php 
$pageTitle="Kitchen";
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



<h1>Kitchen page content here</h1>


<?php
include_once('footer.php');
?>   