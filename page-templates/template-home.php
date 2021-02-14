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
    <div class="row headers">
      <div class="col ">
        <button type="button" class="btn btn-outline-light btn1">770-536-7306</button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-outline-light btn2">Shop Now</button>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h4 class=" headers sub-2-title p-3">Same Day Delivery</h4>
      </div>
    </div>
  </div>
</div>

<div class="shop-card-1-holder">
  <div class="container">
    <div class="shop-card-titles-holder">
      <div class="row">
        <div class="col">
          <div class="sub-title">the</div>
          <div class="shop-card-title">
            valentine's collection
          </div>
        </div>
      </div>
    </div>

    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <button type="button" class="btn btn-light">add to cart</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <button type="button" class="btn btn-light">add to cart</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <button type="button" class="btn btn-light">add to cart</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="video-banner-holder">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="video-title">
          Farm to Table
        </div>
        <div class="video-sub-title">
          Fair Trade Flowers
        </div>
        <div class="video-sub2-title">
          42 Years of Award Winning Designs
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>