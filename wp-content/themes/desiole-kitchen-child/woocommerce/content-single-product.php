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

$terms       = wc_get_product_category_list( $product->get_id(), ', ' );
$gallery_ids = $product->get_gallery_image_ids();

$spec_fields = array(
	'material'             => array( 'label' => 'Material', 'fallback' => 'Confirm by selected model' ),
	'size_capacity'        => array( 'label' => 'Size / Capacity', 'fallback' => 'Confirm by selected model' ),
	'color_options'        => array( 'label' => 'Color Options', 'fallback' => 'Standard or custom color options by MOQ' ),
	'logo_options'         => array( 'label' => 'Logo Options', 'fallback' => 'Printing, marking or packaging branding by product type' ),
	'packaging_options'    => array( 'label' => 'Packaging Options', 'fallback' => 'Retail box, sleeve, label, insert or carton mark options by project' ),
	'moq'                  => array( 'label' => 'MOQ', 'fallback' => 'Confirm by product, material and customization scope' ),
	'sample_lead_time'     => array( 'label' => 'Sample Lead Time', 'fallback' => 'Confirm after product and branding details' ),
	'bulk_production_time' => array( 'label' => 'Bulk Production Time', 'fallback' => 'Confirm after sample approval and order quantity' ),
	'amazon_fba_support'   => array( 'label' => 'Amazon FBA Support', 'fallback' => 'FNSKU labels, carton marks, packaging and shipment preparation available by request' ),
);
?>
<article id="product-<?php the_ID(); ?>" <?php wc_product_class( 'desiole-single-product', $product ); ?>>
	<div class="desiole-single-product-media">
		<?php echo wp_kses_post( $product->get_image( 'woocommerce_single' ) ); ?>
		<?php if ( ! empty( $gallery_ids ) ) : ?>
			<div class="desiole-product-gallery" aria-label="<?php esc_attr_e( 'Product image gallery', 'desiole-kitchen' ); ?>">
				<?php foreach ( array_slice( $gallery_ids, 0, 4 ) as $gallery_id ) : ?>
					<?php echo wp_kses_post( wp_get_attachment_image( $gallery_id, 'woocommerce_thumbnail' ) ); ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
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
				<?php foreach ( $spec_fields as $meta_key => $field ) : ?>
					<?php $value = $product->get_meta( $meta_key ); ?>
					<tr>
						<th><?php echo esc_html( $field['label'] ); ?></th>
						<td><?php echo esc_html( $value ? $value : $field['fallback'] ); ?></td>
					</tr>
				<?php endforeach; ?>
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
			<li>MOQ: <?php echo esc_html( $product->get_meta( 'moq' ) ? $product->get_meta( 'moq' ) : 'confirm by product, material and customization scope' ); ?></li>
			<li>Sample lead time: <?php echo esc_html( $product->get_meta( 'sample_lead_time' ) ? $product->get_meta( 'sample_lead_time' ) : 'confirm after product and branding details' ); ?></li>
			<li>Bulk production time: <?php echo esc_html( $product->get_meta( 'bulk_production_time' ) ? $product->get_meta( 'bulk_production_time' ) : 'confirm after sample approval and order quantity' ); ?></li>
			<li>Amazon FBA support: <?php echo esc_html( $product->get_meta( 'amazon_fba_support' ) ? $product->get_meta( 'amazon_fba_support' ) : 'labeling, packaging and shipment preparation' ); ?></li>
		</ul>
	</div>
</section>

<?php
$related_products = wc_get_related_products( $product->get_id(), 4 );

if ( ! empty( $related_products ) ) :
	$related_query = new WP_Query(
		array(
			'post_type'      => 'product',
			'post__in'       => $related_products,
			'posts_per_page' => 4,
			'orderby'        => 'post__in',
		)
	);
	?>
	<section class="desiole-related-products">
		<div class="desiole-section-heading">
			<p class="desiole-kicker">Related products</p>
			<h2>More Kitchen Tools For Your Sourcing List</h2>
		</div>
		<?php if ( $related_query->have_posts() ) : ?>
			<ul class="products">
				<?php while ( $related_query->have_posts() ) : ?>
					<?php $related_query->the_post(); ?>
					<?php wc_get_template_part( 'content', 'product' ); ?>
				<?php endwhile; ?>
			</ul>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</section>
<?php endif; ?>
