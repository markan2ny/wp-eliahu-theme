<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="aboutus">
                    <h1>Eliahu <span>Cedars</span></h1>
                    <span class="sub"><span>FOUNDATION</span> INC.</span>
                    <p>We are a Philippine based foundation devoted to improving and enhancing the lives of the vulnerable Senior High School graduate students to overcome poverty by way of full scholarship towards a better future.</p>
                    <ul class="sci">
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="accredited">
                    <h1>Accredited</h1>
                    <div class="accredited-logos">
                        <div>
                            <img src="<?php echo bloginfo('template_directory')."/img/dsdw.png"?>" alt="">
                        </div>
                        <div>
                            <img src="<?php echo bloginfo('template_directory')."/img/pcnc.png"?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="quicklinks">
                    <h1>Quick <span>Links</span></h1>
                    <?php
                        $menu_args = array(
                        'menu_class' => 'footer_menu',
                        'menu_id' => 'footer_menu',
                        'theme_location' => 'footer'
                        );
                        wp_nav_menu( $menu_args );
                    ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="contact">
                    <h1>Contact <span>Us</span></h1>
                    <ul class="info">
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></i> </span>
                            <span> Unit 5, 0816 BE, J.P. Rizal Street Makinaban, <br>Baliuag, Bulacan <br> Region III, <br>3006 Philippines</span>
                        </li>
                        <li>
                            <span><i class="fas fa-envelope-square"></i></span>
                            <span><a href="mailto: linavelasco.ecfi@gmail.com">linavelasco.ecfi@gmail.com</a></span>
                        </li>
                        <li>
                            <span><i class="fas fa-phone-square"></i></i></span>
                            <span><a href="tel:(044)7665536">(+63) 917 311 8173</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-2 col-md-12 col-12"> -->
                <!-- <div class="maps"> -->
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.8760745778113!2d120.8898361510491!3d14.943996072522676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33965530fccdd007%3A0xd3fde8cef83be6eb!2sAven%20Fashion%20Manufacturing%2C%20Inc.!5e0!3m2!1sen!2sph!4v1642659094730!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</footer>
<div class="copyrightTxt">
    <p>Copyright &copy; 2022 ELIAHU CEDARS FOUNDATION INC. All Rights Reserved.</p>
</div>

<?php wp_footer(); ?>

</body>

</html>

