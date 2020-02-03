<section class='products-slider'>
    <?php $args = array( 'post_type' => 'banner', 'posts_per_page' => 5); ?>
    <?php $loop = new WP_Query( $args ); ?>
	<div class='carrusel-slider'>
		<div class='single-item  dots-morad '>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class='item'>
        <img class='img-responsive' src='<?php echo get_the_post_thumbnail_url(); ?>'>
				<div class="mask-item">
				  <h1><?php the_title(); ?></h1>
					<h2><?php the_content(); ?></h2>
				</div>
      </div>  
      <?php endwhile; ?>
		</div>
	</div>

	<div class="booking-section">
		<div class=" booking animated fadeIn" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
			<div class=" container">
				<?php echo do_shortcode ('[hotel_booking]'); ?>
			</div>
		</div>
		</div>
	</section>