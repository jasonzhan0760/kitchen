<?php
/**
 * Default B2B page template.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$slug = get_post_field( 'post_name', get_queried_object_id() );
$desiole_contact = desiole_kitchen_get_contact_info();
$pages = array(
	'products'                       => array(
		'kicker' => 'Product categories',
		'title'  => 'Wholesale Kitchen Tools Product Range',
		'intro'  => 'Explore export-ready kitchen tools categories for wholesale, private label, retail and Amazon FBA programs.',
		'cards'  => desiole_kitchen_get_product_categories(),
	),
	'customization'                  => array(
		'kicker' => 'Customization',
		'title'  => 'Custom Kitchen Tools For Your Brand',
		'intro'  => 'Build differentiated kitchenware lines with custom logos, packaging, colors, materials and OEM/ODM manufacturing support.',
		'cards'  => desiole_kitchen_get_customization_pages(),
	),
	'amazon-fba'                     => array(
		'kicker' => 'Amazon FBA',
		'title'  => 'Amazon FBA Prep Support For Kitchenware Sellers',
		'intro'  => 'Support Amazon sellers with FNSKU labeling, barcode stickers, carton labels, poly bag packaging, retail boxes, bundles, carton marks, small batch trial orders, direct shipment support and inspection before shipment.',
	),
	'custom-logos'                   => array(
		'kicker' => 'Custom logos',
		'title'  => 'Custom Logo Kitchen Tools',
		'intro'  => 'Add your brand identity to selected kitchen tools through practical logo methods matched to product material and order quantity.',
	),
	'private-label-packaging'        => array(
		'kicker' => 'Private label',
		'title'  => 'Private Label Packaging For Kitchenware',
		'intro'  => 'Prepare retail-ready packaging with brand-aligned boxes, sleeves, inserts, labels and shipment carton requirements.',
	),
	'custom-colors-materials'        => array(
		'kicker' => 'Colors and materials',
		'title'  => 'Custom Colors And Materials',
		'intro'  => 'Adjust colorways, finishes and materials for selected product ranges to support brand consistency and market positioning.',
	),
	'oem-odm-manufacturing'          => array(
		'kicker' => 'OEM/ODM',
		'title'  => 'OEM/ODM Kitchen Tools Manufacturing',
		'intro'  => 'Develop new or modified kitchenware products from sourcing brief and sampling through production, packaging and inspection.',
	),
	'low-moq-customization'          => array(
		'kicker' => 'Low MOQ',
		'title'  => 'Low MOQ Customization Programs',
		'intro'  => 'Test new kitchen tools ideas with practical order quantities before scaling into broader wholesale or private label programs.',
	),
	'company-profile'                => array(
		'kicker' => 'About DESIOLE Kitchen',
		'title'  => 'Factory-Style B2B Kitchen Tools Supplier In China',
		'intro'  => 'DESIOLE Kitchen supports global buyers with wholesale kitchen tools sourcing, customization, packaging and export-ready quality control.',
	),
	'factory-tour'                   => array(
		'kicker' => 'Factory tour',
		'title'  => 'Kitchenware Supply And Production Coordination',
		'intro'  => 'Review how sampling, material checks, production coordination, packaging and shipment preparation support reliable B2B supply.',
	),
	'quality-control'                => array(
		'kicker' => 'Quality control',
		'title'  => 'Export-Ready Kitchen Tools Quality Control',
		'intro'  => 'Quality checks focus on product function, surface finish, packaging accuracy, carton condition and shipment readiness.',
	),
	'faq'                            => array(
		'kicker' => 'FAQ',
		'title'  => 'Kitchen Tools Wholesale FAQ',
		'intro'  => 'Answers for buyers planning wholesale sourcing, customization, private label packaging and Amazon FBA preparation.',
	),
	'blog'                           => array(
		'kicker' => 'Blog',
		'title'  => 'Kitchen Tools Sourcing Blog',
		'intro'  => 'A placeholder for future B2B kitchenware sourcing articles, buyer guides, customization notes and Amazon FBA preparation content.',
	),
	'contact'                        => array(
		'kicker' => 'Contact',
		'title'  => 'Contact DESIOLE Kitchen',
		'intro'  => 'Send your product list, quantity, logo needs, packaging requirements and target market for a B2B sourcing reply.',
	),
);

$page = isset( $pages[ $slug ] ) ? $pages[ $slug ] : array(
	'kicker' => get_the_title(),
	'title'  => get_the_title(),
	'intro'  => '',
);
$page_image = desiole_kitchen_image_url( desiole_kitchen_get_page_image( $slug ) );

get_header();
?>
<section class="desiole-page-hero">
	<div class="desiole-container<?php echo $page_image ? ' desiole-page-hero-grid' : ''; ?>">
		<div>
			<p class="desiole-kicker"><?php echo esc_html( $page['kicker'] ); ?></p>
			<h1><?php echo esc_html( $page['title'] ); ?></h1>
			<?php if ( ! empty( $page['intro'] ) ) : ?>
				<p><?php echo esc_html( $page['intro'] ); ?></p>
			<?php endif; ?>
		</div>
		<?php if ( $page_image ) : ?>
			<div class="desiole-page-hero-media">
				<img src="<?php echo esc_url( $page_image ); ?>" alt="<?php echo esc_attr( $page['title'] . ' visual' ); ?>">
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="desiole-section">
	<div class="desiole-container">
		<?php if ( ! empty( $page['cards'] ) ) : ?>
			<div class="desiole-category-grid">
				<?php foreach ( $page['cards'] as $card ) : ?>
					<?php $card_image = desiole_kitchen_image_url( isset( $card['image'] ) ? $card['image'] : '' ); ?>
					<a class="desiole-category-card" href="<?php echo esc_url( home_url( $card['url'] ) ); ?>">
						<?php if ( $card_image ) : ?>
							<span class="desiole-card-media">
								<img src="<?php echo esc_url( $card_image ); ?>" alt="<?php echo esc_attr( $card['title'] . ' service visual' ); ?>">
							</span>
						<?php endif; ?>
						<span class="desiole-card-line"></span>
						<h2><?php echo esc_html( $card['title'] ); ?></h2>
						<p><?php echo esc_html( $card['meta'] ); ?></p>
					</a>
				<?php endforeach; ?>
			</div>
		<?php elseif ( 'contact' === $slug ) : ?>
			<div class="desiole-page-grid">
				<article class="desiole-page-panel">
					<h2>Email</h2>
					<p><a href="mailto:<?php echo esc_attr( $desiole_contact['public_email'] ); ?>"><?php echo esc_html( $desiole_contact['public_email'] ); ?></a></p>
				</article>
				<article class="desiole-page-panel">
					<h2>Phone</h2>
					<p><a href="<?php echo esc_url( $desiole_contact['phone_tel'] ); ?>"><?php echo esc_html( $desiole_contact['phone'] ); ?></a></p>
				</article>
				<article class="desiole-page-panel">
					<h2>Address</h2>
					<p><?php echo esc_html( $desiole_contact['address'] ); ?></p>
				</article>
				<article class="desiole-page-panel">
					<h2>Request Quote</h2>
					<p>Send product names, target quantity, customization needs and destination market for B2B quotation support.</p>
					<a class="desiole-button desiole-button-primary" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request Quote</a>
				</article>
			</div>
		<?php elseif ( 'faq' === $slug ) : ?>
			<div class="desiole-faq-list">
				<details open>
					<summary>Can you support low MOQ orders?</summary>
					<p>Yes. DESIOLE Kitchen supports flexible low MOQ programs for selected kitchen tools, branding projects and trial orders.</p>
				</details>
				<details>
					<summary>Can products include our logo and packaging?</summary>
					<p>Yes. Custom logos, private label packaging, custom colors and OEM/ODM manufacturing are part of the core service offering.</p>
				</details>
				<details>
					<summary>Do you help Amazon FBA sellers?</summary>
					<p>Yes. The team can support product packaging, labeling and preparation requirements for Amazon FBA shipments.</p>
				</details>
				<details>
					<summary>How do product inquiries work?</summary>
					<p>Use the Request Quote button and include product names, target quantity, branding needs, packaging details and destination market.</p>
				</details>
			</div>
		<?php else : ?>
			<div class="desiole-page-grid">
				<article class="desiole-page-panel">
					<h2>What We Support</h2>
					<ul>
						<li>Low MOQ sourcing and trial order planning</li>
						<li>Custom logo, color and material options</li>
						<li>Private label packaging and retail box coordination</li>
						<li>Amazon FBA preparation and export-ready quality checks</li>
					</ul>
				</article>
				<article class="desiole-page-panel">
					<h2>Buyer Information To Prepare</h2>
					<ul>
						<li>Target product name or reference image</li>
						<li>Estimated quantity and destination market</li>
						<li>Logo, packaging and color requirements</li>
						<li>Expected sample and production schedule</li>
					</ul>
				</article>
			</div>
		<?php endif; ?>
	</div>
</section>

<section class="desiole-final-cta">
	<div class="desiole-container desiole-final-cta-inner">
		<div>
			<p class="desiole-kicker">Start sourcing</p>
			<h2>Request A B2B Kitchen Tools Quote</h2>
			<p>Send your product list and customization details to confirm MOQ, packaging, sample timing and quotation path.</p>
		</div>
		<a class="desiole-button desiole-button-light" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request Quote</a>
	</div>
</section>
<?php
get_footer();
