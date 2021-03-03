
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<!-- /// use bootstrap row resp col -->



<div class="wrapper pt-1 pb-2" id="wrapper-footer">

    <hr>

    <div class="contact-holder container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/rlmfooterwhite.png" alt="logo">
                </a>
            </div>
            <div class="col-lg-2">
                <a href="tel:770-536-7306" class="contact">(770) 536-7306</a>
            </div>
            <div class="col-lg-2">
                <a class="contact" href="mailto:resia@rlmaffairs.com">EMAIL US</a> 
            </div>
        </div>
    </div>

    <div class="footer-nav-holder container-fluid">
        <div class="row align-items-center mt-3 mb-4">
            <div class="col-lg-2">
                <div class="nav-link">
                    <a href="">OCCASION</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="nav-link">
                    <a href="">HOLIDAY</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="nav-link">
                    <a href="">BABYCAKES</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="nav-link">
                    <a href="">ALL PRODUCTS</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="nav-link">
                    <a href="">VENUE & EVENT SERVICES</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="nav-link">
                    <a href="">ABOUT US</a>
                </div>
            </div>
        </div>
    </div>

    <div class="socials-holder container">
      <div class="row justify-content-center">
        <div class="col-2">
            <div class="social"><a href="#"><i class="fab fa-facebook-f fa-lg"></i></a></div>
        </div>
        <div class="col-2">
            <div class="social"><a href="#"><i class="fab fa-instagram fa-lg"></i></a></div>
        </div>
        <div class="col-2">
            <div class="social"><a href="mailto:resia@rlmaffairs.com"><i class="far fa-envelope fa-lg"></i></a></div>
        </div>
      </div>
    </div>

    <div class="legal-holder container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-4 col-md-2">
                <div class="legal-item"><a href="#">Terms of Service</a></div>
            </div>
            <div class="col-sm-4 col-md-2">
                <div class="legal-item">Copyright &#169; <?php echo date('Y'); ?> RLM Florist</div>
            </div>
            <div class="col-sm-4 col-md-2">
                <div class="legal-item"><a href="#">Privacy Policy</a></div>
            </div>
        </div>
    </div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>