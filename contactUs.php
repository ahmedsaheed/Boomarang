<?php 
$pageTitle="Contact Us";
function customPageHeader(){?>
<!--arbitrary HTML tags -->

<?php }
include_once('subHeader.php');
?>
<!-------------------------- body  ---------------------->
<!---------------------- Contact Us  -------------->
<section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4904.928447664439!2d-6.283179955446332!3d53.3316673403097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670c1833b915c7%3A0x4f83acae16f5062e!2sGriffith%20College!5e0!3m2!1spt-BR!2sie!4v1649857067136!5m2!1spt-BR!2sie" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5>S Circular Rd, Dublin 8</h5>
                    <p>Dublin, Ireland</p>
                </span>
            </div>
            <div>
                <i class="fas fa-phone-alt"></i>
                <span>
                    <h5>+353 83 365 4444</h5>
                    <p>Monday to Saturday, 7AM to 6PM</p>
                </span>
            </div>
            <div>
                <i class="fas fa-envelope-square"></i>
                <span>
                    <h5>boomerang@gmail.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="">
                <input type="text" placeholder="Enter your name" required>
                <input type="email" placeholder="Enter email adress" required>
                <input type="tel" placeholder="Enter your phone number" required>
                <textarea rows="8" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn blue-btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

<?php
include_once('footer.php');
?>   
