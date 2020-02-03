<section id="rooms"  >
		<div class="container-fluid" id="habitaciones">
			 <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 5 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
			<div class="slick-room">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<div class="item-room wow animated fadeInRight" style="visibility: visible; animation-delay:.3s; animation-name: fadeInRight;">
					<div class="img-room">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					</div>
					<div class="details-room">
						<h3 class="title-room"><?php the_title(); ?></h3>

						<a class="btn-general btn-red" href="<?php the_permalink(); ?>">Ver Detalles</a>
					</div>
				</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	