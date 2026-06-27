<?php
/**
 * Request Quote page.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$desiole_contact  = desiole_kitchen_get_contact_info();
$product_interest = isset( $_GET['product'] ) ? sanitize_text_field( wp_unslash( $_GET['product'] ) ) : '';
$form_values      = array(
	'name'                    => '',
	'company'                 => '',
	'email'                   => '',
	'country'                 => '',
	'product_interest'        => $product_interest,
	'estimated_quantity'      => '',
	'custom_logo'             => '',
	'private_label_packaging' => '',
	'amazon_fba'              => '',
	'message'                 => '',
);
$form_errors      = array();
$form_success     = false;

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['desiole_rfq_submitted'] ) ) {
	if ( ! isset( $_POST['desiole_rfq_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['desiole_rfq_nonce'] ) ), 'desiole_rfq_submit' ) ) {
		$form_errors[] = __( 'Security check failed. Please refresh the page and submit the form again.', 'desiole-kitchen' );
	}

	if ( ! empty( $_POST['website'] ) ) {
		$form_errors[] = __( 'The inquiry could not be submitted.', 'desiole-kitchen' );
	}

	foreach ( $form_values as $key => $default ) {
		if ( isset( $_POST[ $key ] ) ) {
			$form_values[ $key ] = sanitize_text_field( wp_unslash( $_POST[ $key ] ) );
		}
	}

	if ( isset( $_POST['message'] ) ) {
		$form_values['message'] = sanitize_textarea_field( wp_unslash( $_POST['message'] ) );
	}

	if ( '' === $form_values['name'] ) {
		$form_errors[] = __( 'Please enter your name.', 'desiole-kitchen' );
	}

	if ( ! is_email( $form_values['email'] ) ) {
		$form_errors[] = __( 'Please enter a valid email address.', 'desiole-kitchen' );
	}

	if ( '' === $form_values['product_interest'] ) {
		$form_errors[] = __( 'Please enter your product interest.', 'desiole-kitchen' );
	}

	if ( empty( $form_errors ) ) {
		$subject_product = $form_values['product_interest'] ? $form_values['product_interest'] : 'General Inquiry';
		$subject         = sprintf( 'New DESIOLE Kitchen RFQ - %s', $subject_product );
		$body            = array(
			'Name: ' . $form_values['name'],
			'Company: ' . $form_values['company'],
			'Email: ' . $form_values['email'],
			'Country / Region: ' . $form_values['country'],
			'Product Interest: ' . $form_values['product_interest'],
			'Estimated Quantity: ' . $form_values['estimated_quantity'],
			'Custom Logo Required: ' . $form_values['custom_logo'],
			'Private Label Packaging Required: ' . $form_values['private_label_packaging'],
			'Amazon FBA Support Required: ' . $form_values['amazon_fba'],
			'Message:',
			$form_values['message'],
		);
		$headers         = array(
			'Content-Type: text/plain; charset=UTF-8',
			'Cc: ' . $desiole_contact['rfq_cc'],
			'Reply-To: ' . $form_values['name'] . ' <' . $form_values['email'] . '>',
		);

		$form_success = wp_mail( $desiole_contact['rfq_to'], $subject, implode( "\n", $body ), $headers );

		if ( $form_success ) {
			foreach ( $form_values as $key => $default ) {
				$form_values[ $key ] = '';
			}
			$form_values['product_interest'] = $product_interest;
		} else {
			$form_errors[] = __( 'The inquiry could not be sent. Please email us directly and include your product details.', 'desiole-kitchen' );
		}
	}
}

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
		<form class="desiole-rfq-form" action="<?php echo esc_url( get_permalink() ); ?>" method="post">
			<?php wp_nonce_field( 'desiole_rfq_submit', 'desiole_rfq_nonce' ); ?>
			<input type="hidden" name="desiole_rfq_submitted" value="1">
			<label class="desiole-honeypot" aria-hidden="true">Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
			<?php if ( $form_success ) : ?>
				<div class="desiole-form-alert desiole-form-alert--success" role="status">
					<p>Thank you. Your RFQ has been sent to DESIOLE Kitchen.</p>
				</div>
			<?php endif; ?>
			<?php if ( ! empty( $form_errors ) ) : ?>
				<div class="desiole-form-alert desiole-form-alert--error" role="alert">
					<ul>
						<?php foreach ( $form_errors as $error ) : ?>
							<li><?php echo esc_html( $error ); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
			<div class="desiole-field-grid">
				<label>Name <input type="text" name="name" value="<?php echo esc_attr( $form_values['name'] ); ?>" placeholder="Your name" required></label>
				<label>Company <input type="text" name="company" value="<?php echo esc_attr( $form_values['company'] ); ?>" placeholder="Company name"></label>
				<label>Email <input type="email" name="email" value="<?php echo esc_attr( $form_values['email'] ); ?>" placeholder="name@example.com" required></label>
				<label>Country / Region <input type="text" name="country" value="<?php echo esc_attr( $form_values['country'] ); ?>" placeholder="Destination market"></label>
				<label>Product Interest <input type="text" name="product_interest" value="<?php echo esc_attr( $form_values['product_interest'] ); ?>" placeholder="Kitchen tools or category" required></label>
				<label>Estimated Quantity <input type="text" name="estimated_quantity" value="<?php echo esc_attr( $form_values['estimated_quantity'] ); ?>" placeholder="Target order quantity"></label>
				<label>Custom Logo Required?
					<select name="custom_logo">
						<option value="">Select</option>
						<option value="yes" <?php selected( $form_values['custom_logo'], 'yes' ); ?>>Yes</option>
						<option value="no" <?php selected( $form_values['custom_logo'], 'no' ); ?>>No</option>
					</select>
				</label>
				<label>Private Label Packaging Required?
					<select name="private_label_packaging">
						<option value="">Select</option>
						<option value="yes" <?php selected( $form_values['private_label_packaging'], 'yes' ); ?>>Yes</option>
						<option value="no" <?php selected( $form_values['private_label_packaging'], 'no' ); ?>>No</option>
					</select>
				</label>
				<label>Amazon FBA Support Required?
					<select name="amazon_fba">
						<option value="">Select</option>
						<option value="yes" <?php selected( $form_values['amazon_fba'], 'yes' ); ?>>Yes</option>
						<option value="no" <?php selected( $form_values['amazon_fba'], 'no' ); ?>>No</option>
					</select>
				</label>
			</div>
			<label>Message <textarea name="message" rows="6" placeholder="Tell us product details, materials, colors, packaging, sample needs and timeline."><?php echo esc_textarea( $form_values['message'] ); ?></textarea></label>
			<button class="desiole-button desiole-button-primary" type="submit">Submit Inquiry</button>
			<p class="desiole-form-note">File upload is not enabled yet. Email reference images or files after DESIOLE Kitchen replies to your RFQ.</p>
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
				<p>Email: <a href="mailto:<?php echo esc_attr( $desiole_contact['public_email'] ); ?>"><?php echo esc_html( $desiole_contact['public_email'] ); ?></a></p>
				<p>Phone: <a href="<?php echo esc_url( $desiole_contact['phone_tel'] ); ?>"><?php echo esc_html( $desiole_contact['phone'] ); ?></a></p>
				<p>Address: <?php echo esc_html( $desiole_contact['address'] ); ?></p>
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
