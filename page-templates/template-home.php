<?php
/**
 * Template Name: Home Page Template
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="home-wrapper">
	<div class="mb-hero-img"></div>
	<div class="container">	
		<div class="row align-items-center">
			<div class="col-md-2">
				<img class="thumb-img" src="<?php echo get_template_directory_uri(); ?>/img/freshflorals.png" alt="logo" srcset="">
			</div>

			<div class="col">
				<p><strong>Floral Showroom:</strong>
					RLM Affairs is a full-service florist serving North Georgia for 40 years. Our award
					winning
					designers offer exquisite attention to detail. Whether it’s a single rose or decor for an entire
					Gala
					every
					bloom is hand picked and sourced eco friendly. Our retail storefront offers modern & unique items
					keeping
					everyone in mind
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="btn-wrapper">
					<a href="https://rlmflorist.com/" target="_blank" rel="noopener noreferrer"><button class="btn">
						ORDER FLOWERS NOW
					</button></a>
				</div>
			</div>
		</div>


	</div>

	<div class="pink-rose-wrapper"></div>

	<div class="container event-wrapper">
		<div class="row align-items-center">
			<div class="col-md-2">
				<img class="thumb-img" src="<?php echo get_template_directory_uri(); ?>/img/event-planning.png" alt="logo" srcset="">
			</div>
			<div class="col">
				<p>
					Event Planner: At RLM Affairs we capture your vision and create the memories you have dreamed.
					Whether these
					dreams
					include something you have believed would be your day since you were a child, or an event you were
					asked to
					coordinate a week ago. Our goal is to elegantly bring your vision to life. Our amazing team has 40
					years of
					industry
					experience guaranteeing a flawless execution.
				</p>
				<p>
					We have had many different influences in the floral industry, affording us the opportunity to create
					something
					unique. We source our flowers direct from the grower & import any flower anytime of the year we can
					provide
					any
					floral desires.
				</p>
			</div>
		</div>

		<div class="row consultation-wrapper align-items-center">
			<div class="col-md-8">
				<p>
					We plan, design and fully execute beautiful celebrations of any size. We love creating events that
					will make
					our
					clients and their guest dance the night away and create memories that
				</p>
			</div>
			<div class="col">
				<div class="btn-wrapper">
					<a href="https://hello.dubsado.com/public/form/view/62193b64a0670ab65036397c" target="_blank" rel="noopener noreferrer"><button class="btn">
						BOOK A TOUR
					</button></a>
				</div>
			</div>
		</div>
	</div>

	<div class="bride-bg-wrapper"></div>


	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-2">
				<img class="thumb-img" src="<?php echo get_template_directory_uri(); ?>/img/babycakes.png" alt="logo" srcset="">
			</div>

			<div class="col">
				<p>
					BabyCakes specializes in hand crafted cupcakes. We make everything fresh from scratch in small
					batches
					throughout
					the day using the finest ingredients, including sweet cream butter, Vanilla bean, bittersweet
					Belgian
					chocolate,
					fresh zucchini and carrots.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="btn-wrapper">
					<a href="https://rlmflorist.com/product-category/babycakes/babycakes-cupcakes/" target="_blank" rel="noopener noreferrer"><button class="btn">
						ORDER BABYCAKES NOW
					</button></a>
				</div>

			</div>
		</div>
	</div>


	<div class="cupcakes"></div>





</div>
<!--home-wrapper -->

<?php get_footer();
