<?php
/**
 * Request Quote page.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$product_interest = isset( $_GET['product'] ) ? sanitize_text_field( wp_unslash( $_GET['product'] ) ) : '';

get_header();
?>
<section class="desiole-page-hero">
	<div class="desiole-container">
		<p class="desiole-kicker">Request quote</p>
		<h1>Request A Wholesale Kitchen Tools Quote</h1>
		<p>Share your product interest, estimated quantity, branding needs, packaging requirements and destination market. DESIOLE Kitchen will prepare the next sourcing step for your project.</p>
	</div>
</section>

<section class="desiole-section">
	<div class="desiole-container desiole-rfq-grid">
		<form class="desiole-rfq-form" action="#" method="post">
			<div class="desiole-field-grid">
				<label>Name <input type="text" name="name" placeholder="Your name"></label>
				<label>Company <input type="text" name="company" placeholder="Company name"></label>
				<label>Email <input type="email" name="email" placeholder="name@example.com"></label>
				<label>Country / Region <input type="text" name="country" placeholder="Destination market"></label>
				<label>Product Interest <input type="text" name="product_interest" value="<?php echo esc_attr( $product_interest ); ?>" placeholder="Kitchen tools or category"></label>
				<label>Estimated Quantity <input type="text" name="estimated_quantity" placeholder="Target order quantity"></label>
				<label>Custom Logo Required?
					<select name="custom_logo">
						<option value="">Select</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
				</label>
				<label>Private Label Packaging Required?
					<select name="private_label_packaging">
						<option value="">Select</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
				</label>
				<label>Amazon FBA Support Required?
					<select name="amazon_fba">
						<option value="">Select</option>
						<option value="yes">Yes</option>
						<option value="no">No</option>
					</select>
				</label>
				<label>Upload File <input type="file" name="upload_file"></label>
			</div>
			<label>Message <textarea name="message" rows="6" placeholder="Tell us product details, materials, colors, packaging, sample needs and timeline."></textarea></label>
			<button class="desiole-button desiole-button-primary" type="button">Submit Inquiry</button>
			<p class="desiole-form-note">Form sending will be connected after the final WordPress form plugin is selected.</p>
		</form>

		<aside class="desiole-rfq-side">
			<div class="desiole-page-panel">
				<h2>What To Include</h2>
				<ul>
					<li>Product names, links, photos or reference files</li>
					<li>Quantity target and shipment destination</li>
					<li>Custom logo, color and material requirements</li>
					<li>Private label packaging or Amazon FBA needs</li>
				</ul>
			</div>
			<div class="desiole-page-panel">
				<h2>Contact Info</h2>
				<p><a href="mailto:sales@cheungxin.com">sales@cheungxin.com</a></p>
				<p>Room 6A, Floor 6, Building 6, Longbi Industrial Zone, Bantian Daipu, Longgang District, Shenzhen, China 518129</p>
			</div>
			<div class="desiole-page-panel">
				<h2>FAQ</h2>
				<p>Low MOQ, private label packaging, OEM/ODM manufacturing and Amazon FBA preparation can be discussed during quotation.</p>
			</div>
		</aside>
	</div>
</section>
<?php
get_footer();
