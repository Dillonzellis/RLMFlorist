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

<div class="wrapper" id="wrapper-footer">
    <hr>

    <div class="footer-contact-holder container">
        <div class="contact">logo</div>
        <div class="contact">(770) 536-7306</div>
        <div class="contact">RESIA@RLMAFFAIRS.COM</div>
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
        <div class="social"><a href="">fb</a></div>
        <div class="social"><a href="">instagram</a></div>
        <div class="social"><a href="">email</a></div>
    </div>

    <div class="footer-legal-holder">
        <div class="legal-item"><a href="">Terms of Service</a></div>
        <div class="legal-item"><a href="">Copyright &#169; 2021 RLM Florist</a></div>
        <div class="legal-item"><a href="">Privacy Policy</a></div>
    </div>



</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>