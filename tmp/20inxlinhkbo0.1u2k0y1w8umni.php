<div class="container-fluid text-center"
    <!--Brand Logo -->
    <div class="row">
        <div class="col-md-5 made-by-center">
            <a href="https://www.greenriver.edu/students/academics/degrees-programs/bachelor-of-applied-science/bachelors-in-software-development/" target="_blank">
                <p class="created-by-text">
                    <!--Made with &#9749; by <br> Green River College students-->
                    <strong>Made By Green River College Students</strong>
                </p>
            </a>
        </div>
        <div class="col-md-3 address-center">
            <!--Plug to main campus-->
            <p class="text-center">
                <strong>Main Campus:</strong><br>
                <a class="footer-link" target="_blank" href="https://www.google.com/maps/place/Green+River+Community+College/@47.3130745,-122.179769,16z/data=!4m2!3m1!1s0x549058a045230aab:0x296322357297393b">
                <span>12401 Southeast 320th Street<br>Auburn, WA 98092</span></a>
            </p>
        </div>
        <!-- Social Media Buttons and Icons commented for time being -->
        <!--<div class="row col-md-3 col-sm-12 social-media">
            <h5>Follow us on:</h5>
            <div class="Social-Media">
                <a class="icons" href="https://www.facebook.com/" target="_blank">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
                <a class="icons" href="http://instagram.com/" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a class="icons" href="https://www.linkedin.com/" target="_blank">
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
            </div>
        </div>-->
        <!-- login on footer nav bar -->
        <div class="col-md-3 admin-center">

            <?php if (isset($_SESSION['logged'])): ?>
                
                    <a href="<?= ($BASE) ?>/logout" target="_self">Logout</a></li>
                
                <?php else: ?>
                    <a href="<?= ($BASE) ?>/login" target="_self">Admin Login</a></li>
                
            <?php endif; ?>
        </div>
    </div>
</div>