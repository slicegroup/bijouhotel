<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

		<section style ="padding: 153px;"class="">
			
				<div class="">

          <h2 style="color:#000;     margin-bottom: 5%;
    margin-top: 3%;
">Nuestras
                  <br> Habitaciones
                </h2>
                <?php $args = array( 'post_type' => 'product'); ?>
                <?php $loop = new WP_Query( $args ); ?>
					<div class="row">

            <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						<div class="col-md-4">
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
					</div>
			</section>
<?php get_footer();?>