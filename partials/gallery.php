	<div class="section mcb-section " id="gallery" style="padding-top:100px; padding-bottom:175px; background-color: rgba(124, 50, 135, 0.23);
			 ">
		<div class="section_wrapper mcb-section-inner ">
			<div class="wrap mcb-wrap one valign-top clearfix ">
				<div class="mcb-wrap-inner ">
					<div class="column mcb-column one column_image_gallery ">
						<div class="image_wrapper ">
							<img style="width: 5%;" class="scale-with-grid" src="<?php echo get_template_directory_uri(); ?>/assets/img/art.svg ">
						</div>
						<h2 style="color: #000">Nuestra
							<br>Galería</h2>
								<?php $args = array( 'post_type' => 'galeria', 'posts_per_page' => 8); ?>
								<?php $loop = new WP_Query( $args ); ?> 
						<div class="gallery">

								    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="gallery-item">
           <img  src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
      <?php endwhile; ?>
						</div>
							<div class="gallery-see">
					<a class="btn-general btn-red btn-soli" href="<?php echo bloginfo('url').'/index.php/gallery';?>">Ver más</a>
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>