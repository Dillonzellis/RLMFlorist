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
  <div class="container-fluid">
    <div class="row">
      <div class="col p-0">
        <div id="dz-carousel" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/a1.jpg" alt="" srcset="">
              <div class="carousel-caption">
                <div class="cap-wrapper">
                  <h1 class="main-title">
                    Ethical Fresh Flowers
                  </h1>
                  <h2 class="sub-title">
                    42 Years of Award Winning Designs
                  </h2>
                  <hr>
                  <h3 class="sub-2-title">
                    24/7 Call or Email For All Your Floral Needs
                  </h3>
                  <div class="row">
                    <div class="col-sm text-sm-right mb-2 mb-sm-0">
                      <button type="button" class="btn btn-outline-light">770-536-7306</button>
                    </div>
                    <div class="col-sm text-sm-left">
                      <button type="button" class="btn btn-outline-light">Shop Now</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h4 class="sub-3-title">Same Day Delivery</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="diamonds">
                        ♦♦♦♦
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/a2.jpg" alt="" srcset="">
              <div class="carousel-caption">
                <div class="cap-wrapper">
                  <h1 class="main-title">
                    Ethical Fresh Flowers
                  </h1>
                  <h2 class="sub-title">
                    42 Years of Award Winning Designs
                  </h2>
                  <hr>
                  <h3 class="sub-2-title">
                    24/7 Call or Email For All Your Floral Needs
                  </h3>
                  <div class="row">
                    <div class="col-lg text-right">
                      <button type="button" class="btn btn-outline-light">770-536-7306</button>
                    </div>
                    <div class="col-lg text-left">
                      <button type="button" class="btn btn-outline-light">Shop Now</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h4 class="sub-3-title">Same Day Delivery</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="diamonds">
                        ♦♦♦♦
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img loading=lazy class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/cta.jpg" alt="" srcset="">
              <div class="carousel-caption">
                <div class="cap-wrapper">
                  <h1 class="main-title">
                    Ethical Fresh Flowers
                  </h1>
                  <h2 class="sub-title">
                    42 Years of Award Winning Designs
                  </h2>
                  <hr>
                  <h3 class="sub-2-title">
                    24/7 Call or Email For All Your Floral Needs
                  </h3>
                  <div class="row">
                    <div class="col-lg text-right">
                      <button type="button" class="btn btn-outline-light">770-536-7306</button>
                    </div>
                    <div class="col-lg text-left">
                      <button type="button" class="btn btn-outline-light">Shop Now</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h4 class="sub-3-title">Same Day Delivery</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="diamonds">
                        ♦♦♦♦
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="featured-shop">
  <div class="shop-card-holder">
    <div class="container-fluid">
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

      <div class="wp-block-group">
        <div class="wp-block-group__inner-container">
          <div
            class="wc-block-grid wp-block-handpicked-products wc-block-handpicked-products has-3-columns has-multiple-rows has-aligned-buttons">
            <ul class="wc-block-grid__products">
              <li class="wc-block-grid__product">
                <a href="http://rlmdzstrap.local/product/classic-bouquet/" class="wc-block-grid__product-link">
                  <div class="wc-block-grid__product-image"><img loading=lazy width="228" height="228"
                      src="http://rlmdzstrap.local/wp-content/uploads/2020/02/cbouquet-228x228-1.jpg"
                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                      srcset="http://rlmdzstrap.local/wp-content/uploads/2020/02/cbouquet-228x228-1.jpg 228w, http://rlmdzstrap.local/wp-content/uploads/2020/02/cbouquet-228x228-1-150x150.jpg 150w, http://rlmdzstrap.local/wp-content/uploads/2020/02/cbouquet-228x228-1-100x100.jpg 100w"
                      sizes="(max-width: 228px) 100vw, 228px" /></div>
                  <div class="wc-block-grid__product-title">Classic Bouquet</div>
                </a>

                <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">$</span>44.99</bdi></span></div>

                <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=1791"
                    aria-label="Add &ldquo;Classic Bouquet&rdquo; to your cart" data-quantity="1" data-product_id="1791"
                    data-product_sku="" rel="nofollow"
                    class="btn wp-block-button__link add_to_cart_button ajax_add_to_cart">Add
                    to cart</a></div>
              </li>
              <li class="wc-block-grid__product">
                <a href="http://rlmdzstrap.local/product/precious-thoughts/" class="wc-block-grid__product-link">
                  <div class="wc-block-grid__product-image"><img loading=lazy width="228" height="228"
                      src="http://rlmdzstrap.local/wp-content/uploads/2020/02/pthoughts.jpg"
                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                      srcset="http://rlmdzstrap.local/wp-content/uploads/2020/02/pthoughts.jpg 228w, http://rlmdzstrap.local/wp-content/uploads/2020/02/pthoughts-150x150.jpg 150w, http://rlmdzstrap.local/wp-content/uploads/2020/02/pthoughts-100x100.jpg 100w"
                      sizes="(max-width: 228px) 100vw, 228px" /></div>
                  <div class="wc-block-grid__product-title">Precious Thoughts</div>
                </a>

                <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">$</span>74.99</bdi></span></div>

                <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=1965"
                    aria-label="Add &ldquo;Precious Thoughts&rdquo; to your cart" data-quantity="1"
                    data-product_id="1965" data-product_sku="" rel="nofollow"
                    class="btn wp-block-button__link add_to_cart_button ajax_add_to_cart">Add
                    to cart</a></div>
              </li>
              <li class="wc-block-grid__product">
                <a href="http://rlmdzstrap.local/product/mixed-basket-arrangement/" class="wc-block-grid__product-link">
                  <div class="wc-block-grid__product-image"><img loading=lazy width="300" height="300"
                      src="http://rlmdzstrap.local/wp-content/uploads/2020/02/Mixed-Basket-Arrangement-300x300.jpg"
                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                      srcset="http://rlmdzstrap.local/wp-content/uploads/2020/02/Mixed-Basket-Arrangement-300x300.jpg 300w, http://rlmdzstrap.local/wp-content/uploads/2020/02/Mixed-Basket-Arrangement-150x150.jpg 150w, http://rlmdzstrap.local/wp-content/uploads/2020/02/Mixed-Basket-Arrangement-100x100.jpg 100w"
                      sizes="(max-width: 300px) 100vw, 300px" /></div>
                  <div class="wc-block-grid__product-title">Mixed Basket Arrangement</div>
                </a>

                <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">$</span>69.99</bdi></span></div>

                <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=1980"
                    aria-label="Add &ldquo;Mixed Basket Arrangement&rdquo; to your cart" data-quantity="1"
                    data-product_id="1980" data-product_sku="" rel="nofollow"
                    class="btn wp-block-button__link add_to_cart_button ajax_add_to_cart">Add to cart</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>


    </div>
  </div>

</div>

<div class="strap-video-holder">
  <div class="embed-responsive embed-responsive-4by3 video-bg">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oZwcrNL-CJ4?playlist=oZwcrNL-CJ4&loop=1&controls=0&modestbranding=1&showinfo=0&rel=0&playsinline=1&showinfo=0&rel=0&enablejsapi=1&mute=1&autoplay=1"></iframe>
  </div>
  <div class="video-foreground">
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

<div class="best-sellers-holder">
  <div class="shop-card-holder">
    <div class="container-fluid">
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
      <div class="wp-block-group">
        <div class="wp-block-group__inner-container">
          <div
            class="wc-block-grid wp-block-handpicked-products wc-block-handpicked-products has-3-columns has-multiple-rows has-aligned-buttons">
            <ul class="wc-block-grid__products">
              <li class="wc-block-grid__product">
                <a href="http://rlmdzstrap.local/product/6-red-roses/" class="wc-block-grid__product-link">
                  <div class="wc-block-grid__product-image"><img loading=lazy width="228" height="228"
                      src="http://rlmdzstrap.local/wp-content/uploads/2020/02/6redrose.jpg"
                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                      srcset="http://rlmdzstrap.local/wp-content/uploads/2020/02/6redrose.jpg 228w, http://rlmdzstrap.local/wp-content/uploads/2020/02/6redrose-150x150.jpg 150w, http://rlmdzstrap.local/wp-content/uploads/2020/02/6redrose-100x100.jpg 100w"
                      sizes="(max-width: 228px) 100vw, 228px" /></div>
                  <div class="wc-block-grid__product-title">Six Red Roses</div>
                </a>

                <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">$</span>29.99</bdi></span></div>

                <div class="wp-block-button wc-block-grid__product-add-to-cart">
                  <a href="?add-to-cart=1399" aria-label="Add &ldquo;Six Red Roses&rdquo; to your cart"
                    data-quantity="1" data-product_id="1399" data-product_sku="" rel="nofollow"
                    class="btn wp-block-button__link add_to_cart_button ajax_add_to_cart">
                    Add to cart
                  </a>
                </div>
              </li>
              <li class="wc-block-grid__product">
                <a href="http://rlmdzstrap.local/product/assorted-dozen/" class="wc-block-grid__product-link">
                  <div class="wc-block-grid__product-image"><img loading=lazy width="228" height="228"
                      src="http://rlmdzstrap.local/wp-content/uploads/2020/02/bbycakes.jpg"
                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                      srcset="http://rlmdzstrap.local/wp-content/uploads/2020/02/bbycakes.jpg 228w, http://rlmdzstrap.local/wp-content/uploads/2020/02/bbycakes-150x150.jpg 150w, http://rlmdzstrap.local/wp-content/uploads/2020/02/bbycakes-100x100.jpg 100w"
                      sizes="(max-width: 228px) 100vw, 228px" /></div>
                  <div class="wc-block-grid__product-title">Assorted Dozen</div>
                </a>

                <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">$</span>10.50</bdi></span></div>

                <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=1402"
                    aria-label="Add &ldquo;Assorted Dozen&rdquo; to your cart" data-quantity="1" data-product_id="1402"
                    data-product_sku="" rel="nofollow"
                    class="btn wp-block-button__link add_to_cart_button ajax_add_to_cart">Add
                    to cart</a></div>
              </li>
              <li class="wc-block-grid__product">
                <a href="http://rlmdzstrap.local/product/12-roses/" class="wc-block-grid__product-link">
                  <div class="wc-block-grid__product-image"><img loading=lazy width="300" height="300"
                      src="http://rlmdzstrap.local/wp-content/uploads/2020/02/12-roses-RLM-90.00-300x300.jpg"
                      class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                      srcset="http://rlmdzstrap.local/wp-content/uploads/2020/02/12-roses-RLM-90.00-300x300.jpg 300w, http://rlmdzstrap.local/wp-content/uploads/2020/02/12-roses-RLM-90.00-150x150.jpg 150w, http://rlmdzstrap.local/wp-content/uploads/2020/02/12-roses-RLM-90.00-768x767.jpg 768w, http://rlmdzstrap.local/wp-content/uploads/2020/02/12-roses-RLM-90.00-600x599.jpg 600w, http://rlmdzstrap.local/wp-content/uploads/2020/02/12-roses-RLM-90.00-100x100.jpg 100w, http://rlmdzstrap.local/wp-content/uploads/2020/02/12-roses-RLM-90.00.jpg 1006w"
                      sizes="(max-width: 300px) 100vw, 300px" /></div>
                  <div class="wc-block-grid__product-title">A Dozen Red Roses</div>
                </a>

                <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><bdi><span
                        class="woocommerce-Price-currencySymbol">$</span>59.99</bdi></span></div>

                <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=1759"
                    aria-label="Add &ldquo;A Dozen Red Roses&rdquo; to your cart" data-quantity="1"
                    data-product_id="1759" data-product_sku="" rel="nofollow"
                    class="btn wp-block-button__link add_to_cart_button ajax_add_to_cart">Add
                    to cart</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="cta-banner-holder">
  <div class="container">
    <div class="row">
      <div class="col fade-in">
        <div class="cta-title">
          Special Occasion?
        </div>
        <div class="cta-sub-title">
          Check out our Event Services
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center fade-in">
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
            "RLM did the flowers, decor for reception and the cake for my daughters wedding. They exceeding our
            expectation
            - the flowers were gorgeous, the venue decor was stunning and the cake not only was beautiful it tasted
            GREAT.
            They were very organized, responsive and the day off made things super easy! Thanks again."
          </div>
          <div class="review-customer-holder">
            <div class="review-customer-img">
              <a href="https://www.theknot.com/marketplace/rlm-affairs-estate-room-and-gardens-wysteria-room-gainesville-ga-2014225"
                target="_blank"><img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/knot-review.png" alt=""
                  srcset=""></a>
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
          <div class="card-review review-2">
            "Best place to have a event, great atmosphere, food is wonderful and the service is superb."
          </div>
          <div class="review-customer-holder">
            <div class="review-customer-img">
              <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/g.png" alt="" srcset="">
            </div>
            <div class="review-customer">
              <div class="review-customer-name">
                Tony Parker
              </div>
              <div class="review-customer-sub-line">
                Local Guide
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="card-review review-3">
            "Best day of my life! Resia did the most amazing job taking care of our vision and brought it to life. It
            was honestly a dream come true! Everything turned out perfectly!"
          </div>
          <div class="review-customer-holder">
            <div class="review-customer-img">
              <a href="https://www.theknot.com/marketplace/rlm-affairs-estate-room-and-gardens-wysteria-room-gainesville-ga-2014225"
                target="_blank"><img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/knot-review.png" alt=""
                  srcset=""></a>
            </div>
            <div class="review-customer">
              <div class="review-customer-name">
                Alissa H
                <div class="review-customer-sub-line">
                  Bride
                </div>
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
  </div>

  <div id="carousel-dz" class="carousel slide" data-ride="carousel" data-pause="true" data-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="" src="..." alt="">
        <div class="carousel-caption">
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/knot-review.png" alt="the knot logo" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/rd-atlanta.png"
              alt="road atlanta logo" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/elan.png" alt="chateau elan logo"
              srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/coca-cola.png"
              alt="coca cola logo" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/porche.png" alt="porche logo"
              srcset="">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="" src="..." alt="">
        <div class="carousel-caption">
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/wea.png" alt="weathertech logo"
              srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/best-knot.png"
              alt="best of knot 2020" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/best-knot-2021.png"
              alt="best of knot 2021" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/patron.png" alt="patron logo"
              srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/IMS.png" alt="IMSA logo"
              srcset="">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="" src="..." alt="">
        <div class="carousel-caption">

          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/sono.png"
              alt="Williams-Sonoma logo" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/pottery-barn.png"
              alt="pottery barn logo" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/belk.png" alt="belk logo"
              srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/audi.png" alt="audi logo"
              srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/rd-atlanta.png"
              alt="road atlanta logo" srcset="">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="" src="..." alt="">
        <div class="carousel-caption">

          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/gm.png" alt="GM logo" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/nas.png" alt="nascar logo"
              srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/bmw-logo.png" alt="BMW logo"
              srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/mercedes-logo.png"
              alt="mercedes logo" srcset="">
          </div>
          <div class="worked-with-logo">
            <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/ung.png" alt="UNG logo" srcset="">
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" data-target="#carousel-dz" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true">
        <i class="fas fa-chevron-left fa-2x"></i>
      </span>
    </a>
    <a class="carousel-control-next" data-target="#carousel-dz" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true">
        <i class="fas fa-chevron-right fa-2x"></i>
      </span>
    </a>
  </div>
</div>

<div class="covid-holder">
  <div class="container">
    <div class="row">
      <div class="col">
        <hr class="mb-4">
        <div class="covid-title">
          Covid-19
        </div>
        <div class="covid-body">
          <p>We are grateful for all of you and are open for phone or internet orders. They will be fulfilled with a
            no
            contact delivery left at your front door or a no contact pick up at our front door.</p>
        </div>
        <div class="covid-body">
          We realize that this is a very stressful time, and we are here for your floral, event, BabyCakes &amp; venue
          needs. We are monitoring the situation closely and will update you with any changes as they arise. We’re
          closely monitoring the Center for Disease Control’s guidelines and recommendations on additional steps to
          take
          to help stop the spread of the virus.
        </div>
        <hr class="mt-4">
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>