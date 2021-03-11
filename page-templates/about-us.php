<?php
/**
 * Template Name: about us
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<?php
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img class="logo" loading=lazy
                            src="<?php echo get_template_directory_uri(); ?>/img/about-us-logo.png" alt="">
                    </a>

                    <div class="who-holder">
                        <h1>Who We Are</h1>
                        <p>No matter what the occasion, RLM Florist, your local Gainesville florist, is your one-stop
                            shop for all your floral needs. Browse our wide online selection or call us for a custom
                            bouquet to fit your needs and budget. Family owned and operated for 42 years.</p>
                        <p>In a rush? Same day flower delivery is available at no additional cost. The professional
                            staff at RLM Florist is dedicated to handling your order with care.</p>
                    </div>

                    <div class="hours-holder fluid-container">
                        <div class="row">
                            <div class="col-lg-6">

                                <img class="hours-img full-width" loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/about-store-front.jpg" alt="">

                            </div>
                            <div class="col-lg-6">
                                <div class="header">
                                    Your Local Premier Florist
                                </div>
                                <div class="sub-header">
                                    Our shop serves the following areas in Georgia: Flowery Branch, Gainesville, Buford,
                                    Hoschton, Braselton, Winder and Oakwood.
                                </div>
                                <div class="hours-title">
                                    Store Hours
                                </div>
                                <div class="hours">
                                    Monday: Call in only, showroom closed.
                                </div>
                                <div class="hours">
                                    Tuesday: 10:00am - 4:00pm
                                </div>
                                <div class="hours">
                                    Wednesday: 10:00am - 4:00pm
                                </div>
                                <div class="hours">
                                    Thursday: 10:00am - 4:00pm
                                </div>
                                <div class="hours">
                                    Friday: 10:00am - 4:00pm
                                </div>
                                <div class="hours">
                                    Saturday: 10:00am - 12:00pm
                                </div>

                                <div class="post-hours">
                                    RLM Florist offers 24 hour phone and internet service for your orders and questions
                                    after the showroom has closed.
                                </div>

                                <div class="store-phone">
                                    770-536-7306
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="we-offer-wrapper container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>
                                    Some of What We Offer
                                </h2>
                                <p>
                                    We all know to send Valentine’ Day flowers, Mother’s Day flowers, get well flowers,
                                    and anniversary flowers, but why not make today extra special? RLM Florist can help
                                    you send the perfect gift to show your loved ones how much you care.
                                </p>
                                <p>
                                    We’re proud to be one of the leading flower shops in Gainesville and have a
                                    wonderful selection of gifts and birthday flower arrangements for you to choose
                                    from. We can also help you with sending sympathy funeral flowers as well. Our floral
                                    designers use only superior flowers in our arrangements, so call us to get the most
                                    beautiful flowers in Gainesville GA.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <img class="offer-img full-width" loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/about-lantern.jpg" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d105516.11597129342!2d-83.885359!3d34.264396!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5f381240cd7d3%3A0x24e242822947b20c!2s3575%20McEver%20Rd%2C%20Gainesville%2C%20GA%2030504!5e0!3m2!1sen!2sus!4v1615418938700!5m2!1sen!2sus"
                            width="1200" height="460" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>

                    <div class="icons-wrapper container">

                        <div class="row justify-content-center">
                            <div class="col-md-2">
                                <div class="icon-wrapper">
                                    <i class="fas fa-car-side"></i>
                                    <div class="subtitle">
                                        Same Day Delivery
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="icon-wrapper">
                                    <i class="fas fa-leaf"></i>
                                    <div class="subtitle">
                                        Fresh, Farm to Table Arrangements
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="icon-wrapper">
                                    <i class="fas fa-phone"></i>
                                    <div class="subtitle">
                                        24/7 Phone Call or Email for Customization
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="icon-wrapper">
                                    <i class="fas fa-award"></i>
                                    <div class="subtitle">
                                        Award Winning Designs and Service
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>