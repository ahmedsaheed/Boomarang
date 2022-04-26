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
    <h1 style="color: white;">Services We Offer</h1>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

    <div class="row">
        <div class="course-col">
            <h3>Service 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="course-col">
            <h3>Service 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="course-col">
            <h3>Service 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</section>

<!-------------------------- facilities  ---------------->

<section class="facilities">
    <h1 style="color: white;">Our Facilities</h1>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>

    <div class="row">
        <div class="facilities-col">
            <a href="classrooms.php"><img src="images/facility1.jpg"></a>
            <a href="classrooms.php"><h3 style="color:black; text-align:center;">Classrooms</h3></a>
            <p>In ornare quam viverra orci sagittis eu volutpat.</p>
        </div>
        <div class="facilities-col">
            <a href="garden.php"><img src="images/facility2.jpg"></a>
            <a href="garden.php"><h3 style="color:black; text-align:center;">Garden</h3></a>
            <p>In ornare quam viverra orci sagittis eu volutpat.</p>
        </div>
        <div class="facilities-col">
            <a href="kitchen.php"><img src="images/facility3.jpg"></a>
            <a href="kitchen.php"><h3 style="color:black; text-align:center;">Kitchen</h3></a>
            <p>In ornare quam viverra orci sagittis eu volutpat.</p>
        </div>
    </div>
</section>





<?php
include_once('footer2.php');
?>   
