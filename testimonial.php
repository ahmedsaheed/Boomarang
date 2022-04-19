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
    <h1>What People Are Saying About Us</h1>
    <p>For us, your opinion counts.</p>
    <div class="row">
        <div class="testimonials-col">
            <img src="images/person2.jpg">
            <div>
                <p>Online-Skate is just the best! I bought my board there last week and it is really good.</p>
                    <h3>Joe Marriott</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i> 
            </div>
        </div>
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
    </form>
    <br><br>
</section>



<?php
include_once('footer.php');
?>   
