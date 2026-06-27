<?php
/**
 * B2B product archive.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<section class="desiole-page-hero">
	<div class="desiole-container">
		<p class="desiole-kicker">Product catalog</p>
		<h1><?php woocommerce_page_title(); ?></h1>
		<?php if ( term_description() ) : ?>
			<div class="desiole-archive-description"><?php echo wp_kses_post( term_description() ); ?></div>
		<?php else : ?>
			<p>Browse wholesale kitchen tools for private label, retail, distribution and Amazon FBA sourcing projects.</p>
		<?php endif; ?>
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
<?php
get_footer();
