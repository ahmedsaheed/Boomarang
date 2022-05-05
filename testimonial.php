<?php 
$pageTitle="Testimonials";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
?>
<!-------------------------- this is body  ---------------->


<!-------------------------- testimonials  ---------------->
<section class="testimonials">
    <h1 style="color: white;">What People Are Saying About Us</h1>
    <p>For us, your opinion counts.</p>
    <?php 
    $query = "SELECT * FROM testimonial where approved = '1' ;";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        //print_r($row);
        $name = $row['name'];
        $service = $row['service'];
        $date = $row['date'];
        $message = $row['message']; 
    ?>
    <div class="row">
        <div class="testimonials-col">
            <img src="images/person2.jpg">
            <div>
                    <p><?php echo $message;?></p>
                    <h3><?php echo $name.'--'.$service.'--'.$date;?></h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i> 
            </div>
        </div>
        <?php } ?>
        <div class="testimonials-col">
            <img src="images/person2.jpg">
            <div>
                <p>Their outdoor skatepark in Barcelona is fantastic! Hope to go back there soon.</p>
                    <h3>Darrell Mclellan</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>
    <form action="testimonial_add.php">
        <input type="submit" value="Write your Testimonial" class="hero-btn blue-btn">
    </form><br>
</section>



<?php
include_once('footer2.php');
?>   
