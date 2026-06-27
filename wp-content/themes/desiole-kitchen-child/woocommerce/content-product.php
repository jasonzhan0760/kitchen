<?php
/**
 * B2B product card.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! $product instanceof WC_Product || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( 'desiole-product-card', $product ); ?>>
	<a class="desiole-product-image" href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>">
		<?php echo wp_kses_post( $product->get_image( 'woocommerce_thumbnail' ) ); ?>
	</a>
	<h2 class="woocommerce-loop-product__title">
		<a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><?php echo esc_html( $product->get_name() ); ?></a>
	</h2>
	<p>Wholesale supply with customization, packaging and Amazon FBA preparation support.</p>
	<a class="desiole-button desiole-button-small" href="<?php echo desiole_kitchen_quote_url( $product ); ?>">Request Quote</a>
</li>
