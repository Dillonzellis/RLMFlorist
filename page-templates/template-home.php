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
        <h3 class="headers sub-2-title">
          24/7 Call or Email For All Your Floral Needs
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col text-right">
        <button type="button" class="btn btn-outline-light">770-536-7306</button>
      </div>
      <div class="col text-left">
        <button type="button" class="btn btn-outline-light">Shop Now</button>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h4 class=" headers sub-3-title">Same Day Delivery</h4>
      </div>
    </div>
  </div>
</div>

<div class="shop-card-holder">
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
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <button type="button" class="btn btn-light">add to cart</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <button type="button" class="btn btn-light">add to cart</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg"
          alt="Card image cap">
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

<div class="shop-card-holder">
  <div class="container">
    <div class="shop-card-titles-holder">
      <div class="row">
        <div class="col">
          <div class="sub-title">our</div>
          <div class="shop-card-title">
            best sellers
          </div>
        </div>
      </div>
    </div>

    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <button type="button" class="btn btn-light">add to cart</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <button type="button" class="btn btn-light">add to cart</button>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="//www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg"
          alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <button type="button" class="btn btn-light">add to cart</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="cta-banner-holder">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="cta-title">
          Special Occasion?
        </div>
        <div class="cta-sub-title">
          Check out our Event Services
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <button type="button" class="btn btn-lg btn-outline-light">RLM Venue & Event Services</button>
      </div>
    </div>
  </div>
</div>

<div class="reviews-holder">
  <div class="container">
    <div class="reviews-card-titles-holder">
      <div class="row">
        <div class="col">
          <div class="review-card-title">
            our reviews
          </div>
          <div class="reviews-sub-title">
            Personally selected and carefully delivered. Stunning flowers straight to your door.
          </div>
        </div>
      </div>
    </div>
    <div class="card-deck">
      <div class="card">
        <div class="card-body">
          <div class="card-review">
            RLM did the flowers, decor for reception and the cake for my daughters wedding. They exceeding our
            expectation
            - the flowers were gorgeous, the venue decor was stunning and the cake not only was beautiful it tasted
            GREAT.
            They were very organized, responsive and the day off made things super easy! Thanks again.
          </div>
          <div class="review-customer-holder">
            <div class="review-customer-img">
              <img src="https://picsum.photos/60/60" alt="" srcset="">
            </div>
            <div class="review-customer">
              <div class="review-customer-name">
                Colheen R
              </div>
              <div class="review-customer-sub-line">
                Mother of the Bride
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="card-review">
            RLM did the flowers, decor for reception and the cake for my daughters wedding. They exceeding our
            expectation
            - the flowers were gorgeous, the venue decor was stunning and the cake not only was beautiful it tasted
            GREAT.
            They were very organized, responsive and the day off made things super easy! Thanks again.
          </div>
          <div class="review-customer-holder">
            <div class="review-customer-img">
              <img src="https://picsum.photos/60/60" alt="" srcset="">
            </div>
            <div class="review-customer">
              <div class="review-customer-name">
                Colheen R
              </div>
              <div class="review-customer-sub-line">
                Mother of the Bride
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="card-review">
            RLM did the flowers, decor for reception and the cake for my daughters wedding. They exceeding our
            expectation
            - the flowers were gorgeous, the venue decor was stunning and the cake not only was beautiful it tasted
            GREAT.
            They were very organized, responsive and the day off made things super easy! Thanks again.
          </div>
          <div class="review-customer-holder">
            <div class="review-customer-img">
              <img src="https://picsum.photos/60/60" alt="" srcset="">
            </div>
            <div class="review-customer">
              <div class="review-customer-name">
                Colheen R
              </div>
              <div class="review-customer-sub-line">
                Mother of the Bride
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="worked-with-carousel">
  <div class="container-fluid">
    <div class="worked-with-title">
      We Have Worked With
    </div>
    <div class="carousel">
      <p>carousel</p>
    </div>
  </div>
</div>

<div class="covid-holder">
  <div class="container">
    <div class="row">
      <div class="col">
        <hr>
        <div class="covid-title">
          Covid-19
        </div>
        <div class="covid-body">
          <p>We are grateful for all of you and are open for phone or internet orders. They will be fulfilled with a no
            contact delivery left at your front door or a no contact pick up at our front door.</p>
        </div>
        <div class="covid-body">
          We realize that this is a very stressful time, and we are here for your floral, event, BabyCakes &amp; venue
          needs. We are monitoring the situation closely and will update you with any changes as they arise. We’re
          closely monitoring the Center for Disease Control’s guidelines and recommendations on additional steps to take
          to help stop the spread of the virus.
        </div>
        <hr>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>