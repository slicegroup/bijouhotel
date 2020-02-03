<div class="section mcb-section bg-cover" style="padding-top:0px; padding-bottom:500px; background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/AREAS-139.jpg); background-repeat:no-repeat; background-position:center top">
		<div class="section_wrapper mcb-section-inner">
			<div class="wrap mcb-wrap two-fifth valign-top move-up clearfix hello"
     data-mobile="no-up">
				<div class="mcb-wrap-inner">
					<div class="column mcb-column one column_column column-margin-20px">
						<div class="column_attr clearfix">
							<h2 style="color:#fff!important">¡Descubre nuestras ofertas de habitaciones!</h2>
							<hr class="no_line" style="margin: 0 auto 20px">
							<p style="color: #fff; font-weight: bold; line-height: 1.5;">
								Contamos con 5 espaciones diferentes, para que goces de una estadía ideal y simplemente inolvidable
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-decoration bottom img-deco" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/content/resort/images/resort-home-rooms-decor.png);height:437px"></div>
	</div>

	<div class="section mcb-section here" style="padding-top:0px; padding-bottom:150px">
		<div class="section_wrapper mcb-section-inner sec-ro">
			<div class="row">
				<div class="wrap mcb-wrap two-fifth valign-top move-up clearfix col-md-6" style="padding:40px 10px; margin-top:-75px">
					<div class="mcb-wrap-inner">
						<div class="column mcb-column one column_image">
							<div class="image_frame image_item no_link scale-with-grid no_border" style="margin-bottom:-10px">
								<div class="image_wrapper">
									<img style="width: 20%;" class="scale-with-grid" src="<?php echo get_template_directory_uri(); ?>/assets/img/hotel.svg">
								</div>
							</div>
						</div>
						<div class="column mcb-column one column_column column-margin-0px">
							<div class="column_attr clearfix">
								<h2 style="color:#000">Nuestras
									<br> Habitaciones
								</h2>
							</div>
						</div>
						<div class="column mcb-column one column_image">
							<div class="image_frame image_item no_link scale-with-grid no_border ">
								<div class="image_wrapper">
									<img class="scale-with-grid" src="<?php echo get_template_directory_uri(); ?>/assets/content/resort/images/resort-home-stars.png">
								</div>
							</div>
						</div>
						<div class="column mcb-column one column_button">
							<a class="#" style=" border-color:#000 !important; color:#000">
								<a class="btn-general d-none d-sm-block " href="<?php echo bloginfo('url').'/index.php/shop';?>">Ver más</a>
							</a>
						</div>
					</div>
				</div>

				<div class="mcb-wrap-inner col-md-6">
					  <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 5 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
					<div class="multiple-rooms">
						<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						<div class="">
							<div class=" card column_attr clearfix">
								<div class="image_frame image_item  no_border">
									<div class="image_wrapper">
										<a href="#">
											<div class="mask"></div>
											<img class="scale-with-grid" src="<?php echo get_the_post_thumbnail_url(); ?>">
										</a>
									</div>
								</div>
								<h5 class="title-room"><?php the_title(); ?></h5>
								<h5 class="title-room"><?php echo $product->get_price_html(); ?></h5>
								<div class="card-body">
									<?php
									// Load field settings and values.
									$field = get_field_object('descripción');
									$descripcion = $field['value'];
									// Display labels.
									if( $descripcion ): ?>
										<ul class="list-room">
											<?php $i = 1; ?>
											<?php foreach( $descripcion as $descripciones):
												if ($i <= 2):?>
											<li>
												<div class="col-lg-6 col-5 conten">
													<i class="fa fa-check" aria-hidden="true"></i>
													<p><?php echo $field['choices'][ $descripciones]; ?></p>
												</div>
											</li>
											<?php   $i++;   endif; ?>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
										<?php
									// Load field settings and values.
									$field = get_field_object('cama');
									$cama = $field['value'];
									// Display labels.
									if( $cama ): ?>
										<ul class="list-room">
											<?php $i = 1; ?>
											<?php foreach( $cama as $camas):
												if ($i <= 3):?>
											<li>
												<div class="col-lg-6 col-5 conten">
													<i class="fa fa-check" aria-hidden="true"></i>
													<p><?php echo $field['choices'][ $camas]; ?></p>
												</div>
											</li>
											<?php   $i++;   endif; ?>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>


									<ul class="list-room">
										<?php $args = get_post_custom( $post_id); ?>
										<?php if ($args['capacidad'][0] == true ): ?>	
										<li>
											<div class="col-lg-6 col-5 conten">
													<i class="fa fa-check" aria-hidden="true"></i>
										<p><?php echo $args['capacidad'] [0]?></p>
									</div>
								</li>
								</ul>
										<?php endif; ?>
									<a class="btn-general " href="<?php the_permalink(); ?>">Ver más</a>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<div class="bo">
							<a class="btn-general d-block d-sm-none " href="<?php echo bloginfo('url').'/index.php/tienda';?>">Ver más</a></div>
						</div>
					</div>
		</div>
	</div>