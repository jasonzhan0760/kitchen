<?php
/**
 * B2B single product content.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! $product instanceof WC_Product ) {
	return;
}

$terms = wc_get_product_category_list( $product->get_id(), ', ' );
?>
<article id="product-<?php the_ID(); ?>" <?php wc_product_class( 'desiole-single-product', $product ); ?>>
	<div class="desiole-single-product-media">
		<?php echo wp_kses_post( $product->get_image( 'woocommerce_single' ) ); ?>
	</div>
	<div class="desiole-single-product-summary">
		<p class="desiole-kicker">B2B product inquiry</p>
		<h1><?php echo esc_html( $product->get_name() ); ?></h1>
		<?php if ( $terms ) : ?>
			<p class="desiole-product-category"><?php echo wp_kses_post( $terms ); ?></p>
		<?php endif; ?>
		<?php if ( $product->get_short_description() ) : ?>
			<div class="desiole-product-short"><?php echo wp_kses_post( wpautop( $product->get_short_description() ) ); ?></div>
		<?php else : ?>
			<p>Wholesale kitchen tools supply with customization, packaging and Amazon FBA preparation support.</p>
		<?php endif; ?>
		<a class="desiole-button desiole-button-primary" href="<?php echo desiole_kitchen_quote_url( $product ); ?>">Request Quote</a>
	</div>
</article>

<section class="desiole-product-b2b-grid" aria-label="<?php esc_attr_e( 'B2B product details', 'desiole-kitchen' ); ?>">
	<div class="desiole-page-panel">
		<h2>Key Features</h2>
		<?php if ( $product->get_description() ) : ?>
			<?php echo wp_kses_post( wpautop( $product->get_description() ) ); ?>
		<?php else : ?>
			<ul>
				<li>Wholesale-ready product range for B2B buyers</li>
				<li>Custom logo, color and packaging options available by project</li>
				<li>Suitable for retail, distributor and e-commerce sourcing</li>
			</ul>
		<?php endif; ?>
	</div>
	<div class="desiole-page-panel">
		<h2>Specification Guide</h2>
		<table class="desiole-spec-table">
			<tbody>
				<tr><th>Product Name</th><td><?php echo esc_html( $product->get_name() ); ?></td></tr>
				<tr><th>Material</th><td>Confirm by selected model</td></tr>
				<tr><th>Size / Capacity</th><td>Confirm by selected model</td></tr>
				<tr><th>Color Options</th><td>Standard or custom color options by MOQ</td></tr>
				<tr><th>Logo Options</th><td>Printing, marking or packaging branding by product type</td></tr>
			</tbody>
		</table>
	</div>
	<div class="desiole-page-panel">
		<h2>Customization And Packaging</h2>
		<ul>
			<li>Custom logo and private label packaging support</li>
			<li>Retail box, sleeve, label, insert and carton mark coordination</li>
			<li>OEM/ODM support for selected kitchenware projects</li>
		</ul>
	</div>
	<div class="desiole-page-panel">
		<h2>MOQ And Lead Time</h2>
		<ul>
			<li>MOQ: confirm by product, material and customization scope</li>
			<li>Sample lead time: confirm after product and branding details</li>
			<li>Bulk production time: confirm after sample approval and order quantity</li>
			<li>Amazon FBA support: labeling, packaging and shipment preparation</li>
		</ul>
	</div>
</section>
