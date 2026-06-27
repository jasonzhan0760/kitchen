<?php
/**
 * DESIOLE Kitchen homepage.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$categories = desiole_kitchen_get_product_categories();

$services = array(
	array( 'title' => 'Customization & Branding', 'text' => 'Custom logos, colors, materials and private label packaging for differentiated product lines.', 'url' => '/customization/', 'image' => 'service-customization-packaging.png' ),
	array( 'title' => 'Amazon FBA Preparation', 'text' => 'Packaging, labeling and shipment preparation support for Amazon sellers and cross-border teams.', 'url' => '/amazon-fba/', 'image' => 'service-amazon-fba-prep.png' ),
	array( 'title' => 'Quality You Can Trust', 'text' => 'Export-ready quality control across product selection, sampling, production and packaging.', 'url' => '/about-us/quality-control/', 'image' => 'service-quality-control.png' ),
);

$featured_fallback = array(
	array( 'name' => 'Stainless Steel Cooking Utensil Set', 'category' => 'Cooking Tools' ),
	array( 'name' => 'Silicone Baking Tool Collection', 'category' => 'Baking Tools' ),
	array( 'name' => 'Private Label Drinkware Series', 'category' => 'Drinkware' ),
	array( 'name' => 'Kitchen Organization Starter Range', 'category' => 'Kitchen Organization' ),
);

$faqs = array(
	array( 'q' => 'Can you support low MOQ orders?', 'a' => 'Yes. DESIOLE Kitchen supports flexible low MOQ programs for selected kitchen tools, branding projects and trial orders.' ),
	array( 'q' => 'Can products include our logo and packaging?', 'a' => 'Yes. Custom logos, private label packaging, custom colors and OEM/ODM manufacturing are part of the core service offering.' ),
	array( 'q' => 'Do you help Amazon FBA sellers?', 'a' => 'Yes. The team can support product packaging, labeling and preparation requirements for Amazon FBA shipments.' ),
	array( 'q' => 'How do product inquiries work?', 'a' => 'Use the Request Quote button and include product names, target quantity, branding needs, packaging details and destination market.' ),
);

get_header();
?>
<section class="desiole-hero">
	<div class="desiole-container desiole-hero-grid">
		<div class="desiole-hero-copy">
			<p class="desiole-kicker">Factory direct supply</p>
			<h1>Wholesale Kitchen Tools Supplier In China</h1>
			<p class="desiole-hero-subtitle">Factory-direct supply of professional kitchen tools, cookware, appliances and bakeware. Low MOQ, custom branding, private label packaging and Amazon FBA preparation to help your business grow with confidence.</p>
			<div class="desiole-hero-actions">
				<a class="desiole-button desiole-button-primary" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request Quote</a>
				<a class="desiole-button desiole-button-secondary" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">View Products</a>
			</div>
		</div>
		<div class="desiole-hero-media" aria-label="<?php esc_attr_e( 'Professional kitchen tools product set', 'desiole-kitchen' ); ?>">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/home-hero-kitchen-tools.png' ); ?>" alt="Professional kitchen tools, cookware, bakeware, drinkware and appliances product set">
		</div>
	</div>
</section>

<section class="desiole-data-strip" aria-label="<?php esc_attr_e( 'Factory direct advantages', 'desiole-kitchen' ); ?>">
	<div class="desiole-container desiole-data-grid">
		<div><strong>Low MOQ</strong><span>Flexible trial orders</span></div>
		<div><strong>OEM/ODM</strong><span>Custom products and packaging</span></div>
		<div><strong>FBA Support</strong><span>Labeling and prep assistance</span></div>
		<div><strong>QC Ready</strong><span>Export-focused inspection flow</span></div>
	</div>
</section>

<section class="desiole-section">
	<div class="desiole-container">
		<div class="desiole-section-head">
			<p class="desiole-kicker">Product categories</p>
			<h2>Wholesale Kitchen Tools For Every Sales Channel</h2>
			<p>Source practical kitchenware ranges for retail shelves, private label programs, online stores and Amazon FBA projects.</p>
		</div>
		<div class="desiole-category-grid">
			<?php foreach ( $categories as $category ) : ?>
				<?php $category_image = desiole_kitchen_image_url( isset( $category['image'] ) ? $category['image'] : '' ); ?>
				<a class="desiole-category-card" href="<?php echo esc_url( home_url( $category['url'] ) ); ?>">
					<?php if ( $category_image ) : ?>
						<span class="desiole-card-media">
							<img src="<?php echo esc_url( $category_image ); ?>" alt="<?php echo esc_attr( $category['title'] . ' wholesale product category' ); ?>">
						</span>
					<?php endif; ?>
					<span class="desiole-card-line"></span>
					<h3><?php echo esc_html( $category['title'] ); ?></h3>
					<p><?php echo esc_html( $category['meta'] ); ?></p>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="desiole-section desiole-why">
	<div class="desiole-container desiole-why-grid">
		<div>
			<p class="desiole-kicker">Why partner with DESIOLE Kitchen</p>
			<h2>Built For B2B Kitchenware Sourcing</h2>
		</div>
		<div class="desiole-why-copy">
			<p>DESIOLE Kitchen helps buyers source professional kitchen tools from China with factory-direct supply, practical customization options and export-ready quality control.</p>
			<ul>
				<li>Low MOQ options for testing new product lines</li>
				<li>Custom logo and private label packaging support</li>
				<li>OEM/ODM manufacturing for differentiated kitchenware programs</li>
				<li>Amazon FBA preparation for cross-border sellers</li>
			</ul>
		</div>
	</div>
</section>

<section class="desiole-section">
	<div class="desiole-container desiole-service-grid">
		<?php foreach ( $services as $service ) : ?>
			<?php $service_image = desiole_kitchen_image_url( isset( $service['image'] ) ? $service['image'] : '' ); ?>
			<article class="desiole-service-card">
				<?php if ( $service_image ) : ?>
					<div class="desiole-service-media">
						<img src="<?php echo esc_url( $service_image ); ?>" alt="<?php echo esc_attr( $service['title'] . ' service visual' ); ?>">
					</div>
				<?php else : ?>
					<span class="desiole-service-index"></span>
				<?php endif; ?>
				<h2><?php echo esc_html( $service['title'] ); ?></h2>
				<p><?php echo esc_html( $service['text'] ); ?></p>
				<a href="<?php echo esc_url( home_url( $service['url'] ) ); ?>">Learn more</a>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<section class="desiole-section desiole-featured">
	<div class="desiole-container">
		<div class="desiole-section-head">
			<p class="desiole-kicker">Featured products</p>
			<h2>Inquiry-Ready Product Ranges</h2>
			<p>Start with featured ranges or send your target product list for custom sourcing and quotation.</p>
		</div>
		<div class="desiole-product-grid">
			<?php
			if ( class_exists( 'WooCommerce' ) ) {
				$products = wc_get_products(
					array(
						'limit'  => 4,
						'status' => 'publish',
					)
				);

				if ( ! empty( $products ) ) :
					foreach ( $products as $product ) :
						?>
						<article class="desiole-product-card">
							<a class="desiole-product-image" href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>">
								<?php echo wp_kses_post( $product->get_image( 'woocommerce_thumbnail' ) ); ?>
							</a>
							<h3><a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><?php echo esc_html( $product->get_name() ); ?></a></h3>
							<p>Wholesale supply with customization and packaging support.</p>
							<a class="desiole-button desiole-button-small" href="<?php echo desiole_kitchen_quote_url( $product ); ?>">Request Quote</a>
						</article>
						<?php
					endforeach;
				else :
					foreach ( $featured_fallback as $item ) :
						?>
						<article class="desiole-product-card">
							<div class="desiole-product-image desiole-product-placeholder"></div>
							<p class="desiole-product-category"><?php echo esc_html( $item['category'] ); ?></p>
							<h3><?php echo esc_html( $item['name'] ); ?></h3>
							<p>Wholesale supply with customization and packaging support.</p>
							<a class="desiole-button desiole-button-small" href="<?php echo esc_url( home_url( '/request-quote/?product=' . rawurlencode( $item['name'] ) ) ); ?>">Request Quote</a>
						</article>
						<?php
					endforeach;
				endif;
			} else {
				foreach ( $featured_fallback as $item ) :
					?>
					<article class="desiole-product-card">
						<div class="desiole-product-image desiole-product-placeholder"></div>
						<p class="desiole-product-category"><?php echo esc_html( $item['category'] ); ?></p>
						<h3><?php echo esc_html( $item['name'] ); ?></h3>
						<p>Wholesale supply with customization and packaging support.</p>
						<a class="desiole-button desiole-button-small" href="<?php echo esc_url( home_url( '/request-quote/?product=' . rawurlencode( $item['name'] ) ) ); ?>">Request Quote</a>
					</article>
					<?php
				endforeach;
			}
			?>
		</div>
	</div>
</section>

<section class="desiole-section desiole-faq">
	<div class="desiole-container desiole-faq-grid">
		<div>
			<p class="desiole-kicker">FAQ</p>
			<h2>Common Buyer Questions</h2>
			<p>Quick answers for wholesale kitchen tools sourcing, customization and FBA preparation.</p>
		</div>
		<div class="desiole-faq-list">
			<?php foreach ( $faqs as $faq ) : ?>
				<details>
					<summary><?php echo esc_html( $faq['q'] ); ?></summary>
					<p><?php echo esc_html( $faq['a'] ); ?></p>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="desiole-final-cta">
	<div class="desiole-container desiole-final-cta-inner">
		<div>
			<p class="desiole-kicker">Ready to source?</p>
			<h2>Send Your Kitchen Tools Inquiry To DESIOLE Kitchen</h2>
			<p>Share product names, target quantity, logo needs, packaging requirements and destination market. The team will prepare a B2B quotation path for your project.</p>
		</div>
		<a class="desiole-button desiole-button-light" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request Quote</a>
	</div>
</section>
<?php
get_footer();
