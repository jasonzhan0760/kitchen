<?php
/**
 * B2B single product wrapper.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<section class="desiole-section desiole-single-product-section">
	<div class="desiole-container">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php wc_get_template_part( 'content', 'single-product' ); ?>
		<?php endwhile; ?>
	</div>
</section>
<?php
get_footer();
