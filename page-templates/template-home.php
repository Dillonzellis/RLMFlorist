<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="home-hero-banner-top">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="headers main-title">
          Ethical Fresh Flowers
        </h1>
        <h2 class="headers sub-title">
          42 Years of Award Winning Designs
        </h2>
        <hr>
        <h3 class="headers sub-2-title p-2">
          24/7 Call or Email For All Your Floral Needs
        </h3>
      </div>
    </div>
    <div class="row justify-content-space-around">
      <div class="col headers">
        <button type="button" class="btn btn-outline-light headers">770-536-7306</button>
      </div>
      <div class="col headers">
        <button type="button" class="btn btn-outline-light headers">Shop Now</button>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h4 class=" headers sub-2-title p-3">Same Day Delivery</h4>
      </div>
    </div>
  </div>
</div>

<div class="shop-card-holder">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="sub-title">the</div>
        <div class="shop-card-title">
          valentine's collection
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          card 1
        </div>
      </div>
      <div class="col">
        <div class="card">
          card 1
        </div>
      </div>
      <div class="col">
        <div class="card">
          card 1
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>