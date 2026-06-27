<?php
/**
 * B2B product archive.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$queried_object = get_queried_object();
$category_name  = is_product_category() && isset( $queried_object->name ) ? $queried_object->name : woocommerce_page_title( false );
$foundation     = desiole_kitchen_get_category_foundation_for_current_archive();

get_header();
?>
<section class="desiole-page-hero">
	<div class="desiole-container">
		<p class="desiole-kicker">Product catalog</p>
		<h1><?php echo esc_html( $foundation ? $foundation['h1'] : woocommerce_page_title( false ) ); ?></h1>
		<?php if ( term_description() ) : ?>
			<div class="desiole-archive-description"><?php echo wp_kses_post( term_description() ); ?></div>
		<?php elseif ( $foundation ) : ?>
			<p><?php echo esc_html( $foundation['intro'] ); ?></p>
		<?php else : ?>
			<p>Browse wholesale kitchen tools for private label, retail, distribution and Amazon FBA sourcing projects.</p>
		<?php endif; ?>
	</div>
</section>

<section class="desiole-section desiole-archive-intro">
	<div class="desiole-container desiole-page-grid">
		<div class="desiole-page-panel">
			<h2><?php echo esc_html( $category_name ); ?> Wholesale Supply</h2>
			<p><?php echo esc_html( $foundation ? $foundation['advantages'] : 'DESIOLE Kitchen supports B2B buyers with factory-direct sourcing, practical MOQ planning, custom branding and export-ready quality control for kitchenware projects.' ); ?></p>
		</div>
		<div class="desiole-page-panel">
			<h2>Category Support</h2>
			<ul>
				<li><?php echo esc_html( $foundation ? $foundation['customization'] : 'Custom logo and private label packaging options' ); ?></li>
				<li>Amazon FBA labeling, carton marks and packing coordination</li>
				<li>Sample review, bulk order planning and shipment preparation</li>
			</ul>
		</div>
	</div>
</section>

<section class="desiole-section">
	<div class="desiole-container">
		<?php if ( woocommerce_product_loop() ) : ?>
			<?php woocommerce_product_loop_start(); ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php wc_get_template_part( 'content', 'product' ); ?>
				<?php endwhile; ?>
			<?php woocommerce_product_loop_end(); ?>
			<?php do_action( 'woocommerce_after_shop_loop' ); ?>
		<?php else : ?>
			<div class="desiole-page-panel">
				<h2>Product Range Coming Soon</h2>
				<p>Send your target kitchen tools list and DESIOLE Kitchen can confirm sourcing, MOQ, customization and packaging options.</p>
				<a class="desiole-button desiole-button-primary" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request Quote</a>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="desiole-section desiole-archive-support">
	<div class="desiole-container desiole-page-grid">
		<div class="desiole-page-panel">
			<h2>Wholesale Advantages</h2>
			<ul>
				<li>Factory-direct supply for importers, distributors and e-commerce sellers</li>
				<li>Low MOQ support for product tests and repeat purchase programs</li>
				<li>Export-ready inspection and packaging before shipment</li>
			</ul>
		</div>
		<div class="desiole-page-panel">
			<h2>Customization Options</h2>
			<ul>
				<li>Custom logos, colors, materials and finish options by product type</li>
				<li>Private label boxes, labels, sleeves, inserts and carton marks</li>
				<li>OEM/ODM support when buyer specifications are confirmed</li>
			</ul>
		</div>
		<div class="desiole-page-panel">
			<h2>MOQ, Packaging And Shipping</h2>
			<p><?php echo esc_html( $foundation ? $foundation['moq_packaging'] : 'MOQ, sample timing and bulk production lead time depend on product model, material, logo process and packaging scope. Share your target quantity and market requirements for a practical quotation.' ); ?></p>
		</div>
		<div class="desiole-page-panel">
			<h2>Category FAQ</h2>
			<?php if ( $foundation && ! empty( $foundation['faq'] ) ) : ?>
				<div class="desiole-mini-faq">
					<?php foreach ( $foundation['faq'] as $faq ) : ?>
						<details>
							<summary><?php echo esc_html( $faq['q'] ); ?></summary>
							<p><?php echo esc_html( $faq['a'] ); ?></p>
						</details>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<p>DESIOLE Kitchen can support custom branding, Amazon FBA preparation and shipment inspection for selected products in this category. Use the quote form to send product references and quantity targets.</p>
			<?php endif; ?>
			<?php if ( $foundation ) : ?>
				<p><?php echo esc_html( $foundation['cta'] ); ?></p>
			<?php endif; ?>
			<a class="desiole-button desiole-button-primary" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request Quote</a>
		</div>
	</div>
</section>
<?php
get_footer();
