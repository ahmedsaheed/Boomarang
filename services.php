<?php 
$pageTitle="Services & Facilities";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
?>
<!-------------------------- this is body  ---------------->


<!-------------------------- Course  ---------------->
<section class="course">
    <h1>Services We Offer</h1>
    <p>There is no correct way to skate, but we can teach you the basics.</p>

    <div class="row">
        <div class="course-col">
            <h3>Street skateboarding</h3>
            <p>Street skateboarding is a skateboarding discipline which focuses on flatground tricks,
            grinds, slides and aerials within urban environments and public spaces. Street 
            skateboarders meet, skate and hang out in and around urban areas referred to as 
            "spots", which are commonly streets, plazas or industrial areas.</p>
        </div>
        <div class="course-col">
            <h3>Vert skateboarding</h3>
            <p>Vert skateboarding, short for vertical skateboarding, is the act of riding a skateboard
            on a skate ramp or other incline and involves the skateboarder transitioning from the
            horizontal plane to the vertical plane in order to perform skateboarding tricks.</p>
        </div>
        <div class="course-col">
            <h3>Freestyle skateboarding</h3>
            <p>Freestyle skateboarding (or freestyle) is one of the oldest styles of skateboarding 
            and was intermittently popular from the 1960s until the early 1990s, when the final 
            large-scale professional freestyle skateboarding competition was held.</p>
        </div>
    </div>
</section>

<!-------------------------- facilities  ---------------->

<section class="facilities">
    <h1>Our facilities</h1>
    <p>From parks to stores, we have everything you need.</p>

    <div class="row">
        <div class="facilities-col">
            <img src="images/facility1.jpg">
            <h3>Classrooms</h3>
            <p>Just perfect for practicing street skate.</p>
        </div>
        <div class="facilities-col">
            <img src="images/facility2.jpg">
            <h3>Garden</h3>
            <p>Here you can land your first 900.</p>
        </div>
        <div class="facilities-col">
            <img src="images/facility3.jpg">
            <h3>Kitchen</h3>
            <p>The best brands are here.</p>
        </div>
    </div>
</section>





<?php
include_once('footer.php');
?>   
