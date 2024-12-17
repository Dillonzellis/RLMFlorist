
    <?php
    /**
     * Template Name: testing home
     *
     * Template for displaying a page without sidebar even if a sidebar widget is published.
     *
     * @package understrap
     */

    // Exit if accessed directly.
    defined('ABSPATH') || exit;

    get_header('home');
    $container = get_theme_mod('understrap_container_type');
    ?>

    <?php if (is_front_page()): ?>
        <?php get_template_part('global-templates/hero'); ?>
    <?php endif; ?>

    <style>
    .wc-block-grid__products{
    list-style: none;
    }
    @media(min-width:1200px){

    .wc-block-grid__products{
    display: flex;
    justify-content: center;
    gap: 2rem; 
    }}
    </style>


    <div class="home-hero-banner-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col p-0">
                    <div class="mobile-bg"></div>
                    <div id="dz-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="slide-1"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="slide-2"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="slide-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-captions-holder">
                        <h1 class="main-title">
                            RLM Florist
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
                <a href=" tel:770-536-7306"><button type="button" class="btn btn-outline-light">770-536-7306</button></a>
                            </div>
                            <div class="col-sm text-sm-left">
                                <a href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><button
                                        type="button" class="btn btn-outline-light">Shop Now</button></a>
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
        </div>
    </div>

    <div class="main-green"></div>

    <div class="best-sellers-holder">
            <div class="shop-card-holder">
                <div class="container-fluid">
                    <div class="shop-card-titles-holder">
                        <div class="row">
                            <div class="col">
                                <div class="sub-title">The</div>
                                <div class="shop-card-title">Fall Collection</div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-block-group">
                        <div class="wp-block-group__inner-container">


<div data-block-name="woocommerce/handpicked-products" data-products="[2864,3091,2870]" class="wc-block-grid wp-block-handpicked-products wc-block-handpicked-products has-3-columns has-multiple-rows">
    <ul class="wc-block-grid__products">
        <li class="wc-block-grid__product">
            <a href="https://rlmflorist.com/store/organic-tree/" class="wc-block-grid__product-link">

                <div class="wc-block-grid__product-image"><img decoding="async" width="300" height="300" src="https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-300x300.jpg" data-src="https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail ls-is-cached lazyloaded" alt="Organic Tree" data-srcset="https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" srcset="https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-100x100.jpg 100w"><noscript><img decoding="async" width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload" alt="Organic Tree" data-srcset="https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /><noscript><img decoding="async" width="300" height="300" src="https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload" alt="Organic Tree" srcset="https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2022/11/Organic-tree-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></noscript></div>
                <div class="wc-block-grid__product-title">Organic Tree</div>
            </a>
            <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>154.99</span>
            </div>

            <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=3091" aria-label="Add to cart: “Organic Tree”" data-quantity="1" data-product_id="3091" data-product_sku="" data-price="154.99" rel="nofollow" class="wp-block-button__link  add_to_cart_button ajax_add_to_cart btn">Add to cart</a></div>
        </li>
        <li class="wc-block-grid__product">
            <a href="https://rlmflorist.com/store/rustic-splendor/" class="wc-block-grid__product-link">

                <div class="wc-block-grid__product-image"><img decoding="async" width="300" height="300" src="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg" data-src="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail ls-is-cached lazyloaded" alt="Rustic Splendor" data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" srcset="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-100x100.jpg 100w"><noscript><img decoding="async" width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload" alt="Rustic Splendor" data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /><noscript><img decoding="async" width="300" height="300" src="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload" alt="Rustic Splendor" srcset="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></noscript></div>
                <div class="wc-block-grid__product-title">Rustic Splendor</div>
            </a>
            <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>125.00</span>
            </div>

            <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=2870" aria-label="Add to cart: “Rustic Splendor”" data-quantity="1" data-product_id="2870" data-product_sku="" data-price="125" rel="nofollow" class="wp-block-button__link  add_to_cart_button ajax_add_to_cart btn">Add to cart</a></div>
        </li>
        <li class="wc-block-grid__product">
            <a href="https://rlmflorist.com/store/butterscotch/" class="wc-block-grid__product-link">

                <div class="wc-block-grid__product-image"><img decoding="async" width="300" height="300" src="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg" data-src="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail ls-is-cached lazyloaded" alt="Butterscotch" data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" srcset="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-100x100.jpg 100w"><noscript><img decoding="async" width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload" alt="Butterscotch" data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /><noscript><img decoding="async" width="300" height="300" src="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload" alt="Butterscotch" srcset="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></noscript></div>
                <div class="wc-block-grid__product-title">Butterscotch</div>
            </a>
            <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>110.00</span>
            </div>

            <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=2864" aria-label="Add to cart: “Butterscotch”" data-quantity="1" data-product_id="2864" data-product_sku="" data-price="110" rel="nofollow" class="wp-block-button__link  add_to_cart_button ajax_add_to_cart btn">Add to cart</a></div>
        </li>
    </ul>
</div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--
    <div class="featured-shop">
    <div class="shop-card-holder">
            <div class="container-fluid">
                <div class="shop-card-titles-holder">
                    <div class="row">
                        <div class="col">
                            <div class="sub-title">the</div>
                            <div class="shop-card-title">The Fall Collection </div>
                        </div>
                    </div>
                </div>
                <div class="wp-block-group">
                    <div class="wp-block-group__inner-container">
                        <div data-block-name="woocommerce/handpicked-products" data-edit-mode="false"
                            data-products="[2953,2949,2956]"
                            class="wc-block-grid wp-block-handpicked-products wc-block-handpicked-products has-3-columns has-multiple-rows">
                            <ul class="wc-block-grid__products">
                                <li class="wc-block-grid__product">
                                    <a href="https://rlmflorist.com/store/butterscotch/"
                                        class="wc-block-grid__product-link">
                                        <div class="wc-block-grid__product-image"><img width="300" height="300"
                                                src="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg"
                                                data-src="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyloaded"
                                                alt="Butterscotch" decoding="async"
                                                data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-100x100.jpg 100w"
                                                sizes="(max-width: 300px) 100vw, 300px"
                                                srcset="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-100x100.jpg 100w"><noscript><img
                                                    width="300" height="300"
                                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    data-src="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload"
                                                    alt="Butterscotch" decoding="async"
                                                    data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-100x100.jpg 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px" /><noscript><img width="300"
                                                        height="300"
                                                        src="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload"
                                                        alt="Butterscotch" decoding="async"
                                                        srcset="https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/butterscotch1-100x100.jpg 100w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /></noscript></div>
                                        <div class="wc-block-grid__product-title">Butterscotch</div>
                                    </a>

                                    <div class="wc-block-grid__product-price price"><span
                                            class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>110.00</span></div>

                                    <div class="wp-block-button wc-block-grid__product-add-to-cart"><a
                                            href="?add-to-cart=2864" aria-label="Add “Butterscotch” to your cart"
                                            data-quantity="1" data-product_id="2864" data-product_sku="" rel="nofollow"
                                            class="wp-block-button__link wp-element-button add_to_cart_button btn ajax_add_to_cart">Add
                                            to cart</a></div>
                                </li>
                                <li class="wc-block-grid__product">
                                    <a href="https://rlmflorist.com/store/organic-fall/"
                                        class="wc-block-grid__product-link">
                                        <div class="wc-block-grid__product-image"><img width="300" height="300"
                                                src="https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-300x300.jpg"
                                                data-src="https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-300x300.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyloaded"
                                                alt="Organic Fall" decoding="async"
                                                data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-768x768.jpg 768w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-600x600.jpg 600w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-100x100.jpg 100w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1.jpg 1024w"
                                                sizes="(max-width: 300px) 100vw, 300px"
                                                srcset="https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-768x768.jpg 768w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-600x600.jpg 600w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-100x100.jpg 100w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1.jpg 1024w"><noscript><img
                                                    width="300" height="300"
                                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    data-src="https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload"
                                                    alt="Organic Fall" decoding="async"
                                                    data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-768x768.jpg 768w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-600x600.jpg 600w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-100x100.jpg 100w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1.jpg 1024w"
                                                    sizes="(max-width: 300px) 100vw, 300px" /><noscript><img width="300"
                                                        height="300"
                                                        src="https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-300x300.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload"
                                                        alt="Organic Fall" decoding="async"
                                                        srcset="https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-768x768.jpg 768w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-600x600.jpg 600w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1-100x100.jpg 100w, https://rlmflorist.com/wp-content/uploads/2021/11/OrganicFall1.jpg 1024w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /></noscript></div>
                                        <div class="wc-block-grid__product-title">Organic Fall</div>
                                    </a>

                                    <div class="wc-block-grid__product-price price"><span
                                            class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>210.00</span></div>

                                    <div class="wp-block-button wc-block-grid__product-add-to-cart"><a
                                            href="?add-to-cart=2876" aria-label="Add “Organic Fall” to your cart"
                                            data-quantity="1" data-product_id="2876" data-product_sku="" rel="nofollow"
                                            class="wp-block-button__link wp-element-button add_to_cart_button btn ajax_add_to_cart">Add
                                            to cart</a></div>
                                </li>

                                <li class="wc-block-grid__product">
                                    <a href="https://rlmflorist.com/store/rustic-splendor/"
                                        class="wc-block-grid__product-link">
                                        <div class="wc-block-grid__product-image"><img width="300" height="300"
                                                src="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg"
                                                data-src="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyloaded"
                                                alt="Rustic Splendor" decoding="async"
                                                data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-100x100.jpg 100w"
                                                sizes="(max-width: 300px) 100vw, 300px"
                                                srcset="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-100x100.jpg 100w"><noscript><img
                                                    width="300" height="300"
                                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                    data-src="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload"
                                                    alt="Rustic Splendor" decoding="async"
                                                    data-srcset="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-100x100.jpg 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px" /><noscript><img width="300"
                                                        height="300"
                                                        src="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload"
                                                        alt="Rustic Splendor" decoding="async"
                                                        srcset="https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2021/11/RusticSplendor2-100x100.jpg 100w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /></noscript></div>
                                        <div class="wc-block-grid__product-title">Rustic Splendor</div>
                                    </a>

                                    <div class="wc-block-grid__product-price price"><span
                                            class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">$</span>125.00</span></div>

                                    <div class="wp-block-button wc-block-grid__product-add-to-cart"><a
                                            href="?add-to-cart=2870" aria-label="Add “Rustic Splendor” to your cart"
                                            data-quantity="1" data-product_id="2870" data-product_sku="" rel="nofollow"
                                            class="wp-block-button__link wp-element-button add_to_cart_button btn ajax_add_to_cart">Add
                                            to cart</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

        <div class="strap-video-holder" style="margin-bottom:1rem">
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

        <div class="main-green"></div>

        <!--
        <div class="best-sellers-holder">
            <div class="shop-card-holder">
                <div class="container-fluid">
                    <div class="shop-card-titles-holder">
                        <div class="row">
                            <div class="col">
                                <div class="sub-title">our</div>
                                <div class="shop-card-title"> best sellers </div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-block-group">
                        <div class="wp-block-group__inner-container">
                            <div
                                class="wc-block-grid wp-block-handpicked-products wc-block-handpicked-products has-3-columns has-multiple-rows has-aligned-buttons">
                                <ul class="wc-block-grid__products">
                                    <li class="wc-block-grid__product">
                                        <a href="https://rlmflorist.com/store/12-roses/"
                                            class="wc-block-grid__product-link">
                                            <div class="wc-block-grid__product-image"><img width="300" height="300"
                                                    src="https://rlmflorist.com/wp-content/uploads/2020/02/12-roses-RLM-90.00-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="A Dozen Red Roses" loading="lazy"
                                                    srcset="https://rlmflorist.com/wp-content/uploads/2020/02/12-roses-RLM-90.00-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2020/02/12-roses-RLM-90.00-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2020/02/12-roses-RLM-90.00-768x767.jpg 768w, https://rlmflorist.com/wp-content/uploads/2020/02/12-roses-RLM-90.00-600x599.jpg 600w, https://rlmflorist.com/wp-content/uploads/2020/02/12-roses-RLM-90.00-100x100.jpg 100w, https://rlmflorist.com/wp-content/uploads/2020/02/12-roses-RLM-90.00.jpg 1006w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></div>
                                            <div class="wc-block-grid__product-title">A Dozen Red Roses</div>
                                        </a>
                                        <div class="wc-block-grid__product-price price"><span
                                                class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">$</span>59.99</span>
                                        </div>
                                        <div class="wp-block-button wc-block-grid__product-add-to-cart"><a
                                                href="?add-to-cart=1759" aria-label="Add “A Dozen Red Roses” to your cart"
                                                data-quantity="1" data-product_id="1759" data-product_sku="" rel="nofollow"
                                                class="wp-block-button__link add_to_cart_button ajax_add_to_cart btn">Add to
                                                cart</a></div>
                                    </li>


    <li class="wc-block-grid__product">
            <a href="https://rlmflorist.com/store/loves-bounty/" class="wc-block-grid__product-link">

            <div class="wc-block-grid__product-image"><img decoding="async" width="300" height="300" src="https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-300x300.jpg" data-src="https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail ls-is-cached lazyloaded" alt="Loves Bounty" data-srcset="https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" srcset="https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-100x100.jpg 100w"><noscript><img decoding="async" width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload" alt="Loves Bounty" data-srcset="https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /><noscript><img decoding="async" width="300" height="300" src="https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-300x300.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazyload lazyload" alt="Loves Bounty" srcset="https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2022/01/2-dozen-roses-100x100.jpg 100w" sizes="(max-width: 300px) 100vw, 300px" /></noscript></div>
            <div class="wc-block-grid__product-title">Loves Bounty</div>
            </a>
            <div class="wc-block-grid__product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>139.99</span></div>

            <div class="wp-block-button wc-block-grid__product-add-to-cart"><a href="?add-to-cart=1950" aria-label="Add “Loves Bounty” to your cart" data-quantity="1" data-product_id="1950" data-product_sku="" rel="nofollow" class="wp-block-button__link  add_to_cart_button ajax_add_to_cart btn">Add to cart</a></div>
        </li>


                                    <li class="wc-block-grid__product">
                                        <a href="https://rlmflorist.com/store/6-red-roses/"
                                            class="wc-block-grid__product-link">
                                            <div class="wc-block-grid__product-image"><img width="300" height="300"
                                                    src="https://rlmflorist.com/wp-content/uploads/2020/02/6-rose-300x300.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="Six Red Roses" loading="lazy"
                                                    srcset="https://rlmflorist.com/wp-content/uploads/2020/02/6-rose-300x300.jpg 300w, https://rlmflorist.com/wp-content/uploads/2020/02/6-rose-150x150.jpg 150w, https://rlmflorist.com/wp-content/uploads/2020/02/6-rose-100x100.jpg 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></div>
                                            <div class="wc-block-grid__product-title">Six Red Roses</div>
                                        </a>
                                        <div class="wc-block-grid__product-price price"><span
                                                class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">$</span>35.99</span>
                                        </div>
                                        <div class="wp-block-button wc-block-grid__product-add-to-cart"><a
                                                href="?add-to-cart=1399" aria-label="Add “Six Red Roses” to your cart"
                                                data-quantity="1" data-product_id="1399" data-product_sku="" rel="nofollow"
                                                class="wp-block-button__link add_to_cart_button ajax_add_to_cart btn">Add to
                                                cart</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            -->
        <div class="main-green"></div>

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
                        <a href="https://www.rlmaffairs.com/"><button type="button" class="btn btn-lg btn-outline-light">RLM
                                Venue &
                                Event Services</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-green"></div>

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
                                "RLM did the flowers, decor for reception and the cake for my daughters wedding. They
                                exceeding our
                                expectation
                                - the flowers were gorgeous, the venue decor was stunning and the cake not only was
                                beautiful it tasted
                                GREAT.
                                They were very organized, responsive and the day off made things super easy! Thanks again."
                            </div>
                            <div class="review-customer-holder">
                                <div class="review-customer-img">
                                    <a href="https://www.theknot.com/marketplace/rlm-affairs-estate-room-and-gardens-wysteria-room-gainesville-ga-2014225"
                                        target="_blank"><img loading=lazy
                                            src="<?php echo get_template_directory_uri(); ?>/img/knot-review.png" alt=""
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
                                    <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/g.png" alt=""
                                        srcset="">
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
                                "Best day of my life! Resia did the most amazing job taking care of our vision and brought
                                it to life. It
                                was honestly a dream come true! Everything turned out perfectly!"
                            </div>
                            <div class="review-customer-holder">
                                <div class="review-customer-img">
                                    <a href="https://www.theknot.com/marketplace/rlm-affairs-estate-room-and-gardens-wysteria-room-gainesville-ga-2014225"
                                        target="_blank"><img loading=lazy
                                            src="<?php echo get_template_directory_uri(); ?>/img/knot-review.png" alt=""
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
                                <img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/knot-review.png"
                                    alt="the knot logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/rd-atlanta.png"
                                    alt="road atlanta logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/elan.png"
                                    alt="chateau elan logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/coca-cola.png"
                                    alt="coca cola logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/porche.png"
                                    alt="porche logo" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="" src="..." alt="">
                        <div class="carousel-caption">
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/wea.png"
                                    alt="weathertech logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/best-knot.png"
                                    alt="best of knot 2020" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/best-knot-2021.png"
                                    alt="best of knot 2021" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/patron.png"
                                    alt="patron logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/IMS.png"
                                    alt="IMSA logo" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="" src="..." alt="">
                        <div class="carousel-caption">

                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/sono.png"
                                    alt="Williams-Sonoma logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/pottery-barn.png"
                                    alt="pottery barn logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/belk.png"
                                    alt="belk logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/audi.png"
                                    alt="audi logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/rd-atlanta.png"
                                    alt="road atlanta logo" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="" src="..." alt="">
                        <div class="carousel-caption">

                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/gm.png"
                                    alt="GM logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/nas.png"
                                    alt="nascar logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/bmw-logo.png"
                                    alt="BMW logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/mercedes-logo.png"
                                    alt="mercedes logo" srcset="">
                            </div>
                            <div class="worked-with-logo">
                                <img loading=lazy
                                    src="<?php echo get_template_directory_uri(); ?>/img/worked-carousel/ung.png"
                                    alt="UNG logo" srcset="">
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

        <?php get_footer(); ?>
