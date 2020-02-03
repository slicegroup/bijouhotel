<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="col-lg-3" <?php wc_product_class( '', $product ); ?> >
		<a href="<?php the_permalink(); ?>">
		<div class="item-space gallery-hidden wow animated zoomIn"
			style="visibility: visible; animation-delay:.3s; animation-name: zoomIn;">
			<img class="img-gallery w" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			<div class=" description-room">
				<p class="title-space"><?php the_title(); ?></p>
				<div class="detail-space">
					<p class="title-space"><?php the_title(); ?></p>
					<p><?php echo $product->get_price_html(); ?></p>
					<p><?php   the_excerpt(); ?></p>
				</div>
			</div>
		</div>
		</a>
	</div>
