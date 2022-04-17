<?php 
$pageTitle="Testimonial_add";
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
<h1>Add Your testimonial</h1>

<div class="row">
        <div class="blog-left">  

            <div class="comment-box">

                <h3>Hello <?php echo $_SESSION['name'];?>, Leave your testimonial below</h3>
                
                <form class="comment-form">
                    <input type="text" placeholder="Enter Service Name" required>
                    <input type="date" placeholder="Enter Date" required>
                    <textarea rows="5" placeholder="Your testimonial here" required></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>

                </form>
            </div>

        </div>
</div>






<?php
include_once('footer.php');
?>   