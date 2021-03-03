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



<div class="wrapper" id="wrapper-footer">

    <hr>

    <div class="footer-contact-holder container">
        <div class="contact">
            <a class="contact" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/rlmfooterwhite.png" alt="logo"
                    srcset="">
            </a>
        </div>
        <div class="contact">(770) 536-7306</div>
        <div class="contact justify-content-start">RESIA@RLMAFFAIRS.COM</div>
    </div>

    <div class="footer-nav-holder container-fluid">
        <div class="link"><a href="">OCCASION</a></div>
        <div class="link"><a href="">HOLIDAY</a></div>
        <div class="link"><a href="">BABYCAKES</a></div>
        <div class="link"><a href="">ALL PRODUCTS</a></div>
        <div class="link"><a href="">VENUE & EVENT SERVICES</a></div>
        <div class="link"><a href="">ABOUT US</a></div>
    </div>

    <div class="footer-socials-holder container">
        <div class="social"><a href=""><i class="fab fa-facebook-f fa-lg"></i></a></div>
        <div class="social"><a href=""><i class="fab fa-instagram fa-lg"></i></a></div>
        <div class="social"><a href=""><i class="far fa-envelope fa-lg"></i></a></div>
    </div>

    <div class="footer-legal-holder">
        <div class="legal-item"><a href="">Terms of Service</a></div>
        <div class="legal-item">Copyright &#169; <?php echo date('Y'); ?> RLM Florist</div>
        <div class="legal-item"><a href="">Privacy Policy</a></div>
    </div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>