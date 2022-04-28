<?php 
$pageTitle="Contact Us manage";
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


<!------------Form Box----------->
<section class="main">
    <div class="box-form">
        <form action="contact_us_manage.php" method="post">

        <button type="submit" class="hero-btn ">Check Messages</button>
        </form>
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Declaring variables that will store final database values
            $query = "SELECT * FROM contact_us;";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                //print_r($row);
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $message = $row['message'];
                echo $name.'-->'.$email.'-->'.$phone.'-->'.$message.'<br><br>';
            }
        }?>

    </div>
</section>














<?php
include_once('footer2.php');
?>   