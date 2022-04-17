<?php 
$pageTitle="Logout";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
?>
<!-------------------------- this is body  ---------------->

<!------------Form Box----------->
<section class="main">
    <div class="box-form">
        <?php
        if (isset($_SESSION['user_email'])) {
        session_unset();
        session_destroy();
        echo '<h1>Logged out successfully</h1>';
        } else {
        echo "<h1>Already logged out!</h1>";
        }?>
        
    </div>
</section>



<?php
include_once('footer.php');
?>   
