<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

?>
<?php

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
	<div class="product-two">
<div class="container" style="margin-top: 10rem;">

				<div class="row product_row">

					<!-- Product Image -->
					<div class="col-lg-7">
						<div class="product_image">
							<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

								<?php
								/**
								 * Hook: woocommerce_before_single_product_summary.
								 *
								 * @hooked woocommerce_show_product_sale_flash - 10
								 * @hooked woocommerce_show_product_images - 20
								 */
								do_action( 'woocommerce_before_single_product_summary' );
								?>
							</div>
						</div>
					</div>

					<!-- Product Content -->
					<div class="col-lg-5">
						<div class="product_content">
							<?php
							/**
							 * Hook: woocommerce_single_product_summary.
							 *
							 * @hooked woocommerce_template_single_title - 5
							 * @hooked woocommerce_template_single_rating - 10
							 * @hooked woocommerce_template_single_price - 10
							 * @hooked woocommerce_template_single_excerpt - 20
							 * @hooked woocommerce_template_single_add_to_cart - 30
							 * @hooked woocommerce_template_single_meta - 40
							 * @hooked woocommerce_template_single_sharing - 50
							 * @hooked WC_Structured_Data::generate_product_data() - 60
							 */
							do_action( 'woocommerce_single_product_summary' );
							?>

						</div>
				
						<p style="font-size: 1.2rem;"><?php the_content(); ?></p>
						<h3 style="  font-size: 20px;
    color: #7f338b;
    font-weight: bold;">Servicios de la habitación</h3>
	           	<?php
									// Load field settings and values.
									$field = get_field_object('descripción');
									$descripcion = $field['value'];
									// Display labels.
									if( $descripcion ): ?>
										<ul class="list-room">
							
											<?php foreach( $descripcion as $descripciones):?>
									
											<li>
												<div class="col-lg-6 col-5 conten">
													<i class="fa fa-check" aria-hidden="true"></i>
													<p><?php echo $field['choices'][ $descripciones]; ?></p>
												</div>
											</li>
									
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
										
											<?php foreach( $cama as $camas):
											?>
											<li>
												<div class="col-lg-6 col-5 conten">
													<i class="fa fa-check" aria-hidden="true"></i>
													<p><?php echo $field['choices'][ $camas]; ?></p>
												</div>
											</li>
						
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
		<div class="box-btn btn-reservar">
			        <span type="button" class="btn-general "data-toggle="modal" data-target="#exampleModal" href="">Reservar ahora</span>
			      </div>
						</div>
					</div>
				</div>
</div>

				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Reserva</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<section class="booking-section">
		<div class=" booking animated fadeIn" style="visibility: visible; animation-delay: 1.5s; animation-name: fadeIn;">
			<div class=" container">
				<?php echo do_shortcode ('[hotel_booking]'); ?>
			</div>
		</div>
	</section>
				</div>
		
			</div>
		</div>
	</div>

<?php get_footer(); ?>
