<?php
/**
 * Site footer.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</main>
<footer class="desiole-footer">
	<div class="desiole-container desiole-footer-grid">
		<div class="desiole-footer-brand">
			<a class="desiole-brand desiole-brand-footer" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="desiole-brand-mark">D</span>
				<span>
					<strong>DESIOLE Kitchen</strong>
					<small>Wholesale Kitchen Tools</small>
				</span>
			</a>
			<p>Factory-style B2B kitchen tools supplier in China, supporting low MOQ, custom branding, private label packaging, OEM/ODM and Amazon FBA preparation.</p>
		</div>
		<div>
			<h2>Products</h2>
			<?php
			if ( has_nav_menu( 'footer_products' ) ) {
				wp_nav_menu( array( 'theme_location' => 'footer_products', 'container' => false, 'fallback_cb' => false ) );
			} else {
				desiole_kitchen_footer_menu_fallback( 'products' );
			}
			?>
		</div>
		<div>
			<h2>Customization</h2>
			<?php
			if ( has_nav_menu( 'footer_customization' ) ) {
				wp_nav_menu( array( 'theme_location' => 'footer_customization', 'container' => false, 'fallback_cb' => false ) );
			} else {
				desiole_kitchen_footer_menu_fallback( 'customization' );
			}
			?>
		</div>
		<div>
			<h2>About Us</h2>
			<?php
			if ( has_nav_menu( 'footer_about' ) ) {
				wp_nav_menu( array( 'theme_location' => 'footer_about', 'container' => false, 'fallback_cb' => false ) );
			} else {
				desiole_kitchen_footer_menu_fallback( 'about' );
			}
			?>
		</div>
		<div class="desiole-footer-contact">
			<h2>Contact</h2>
			<p><a href="mailto:sales@cheungxin.com">sales@cheungxin.com</a></p>
			<p>Room 6A, Floor 6, Building 6, Longbi Industrial Zone, Bantian Daipu, Longgang District, Shenzhen, China 518129</p>
		</div>
	</div>
	<div class="desiole-container desiole-footer-bottom">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> DESIOLE Kitchen. All rights reserved.</p>
		<nav aria-label="<?php esc_attr_e( 'Footer legal links', 'desiole-kitchen' ); ?>">
			<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
			<a href="<?php echo esc_url( home_url( '/terms-of-use/' ) ); ?>">Terms of Use</a>
			<a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">Sitemap</a>
		</nav>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

