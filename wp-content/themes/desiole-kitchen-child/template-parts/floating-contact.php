<?php
/**
 * Floating contact links.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$desiole_contact = desiole_kitchen_get_contact_info();
?>
<aside class="desiole-floating-contact" aria-label="<?php esc_attr_e( 'Quick contact links', 'desiole-kitchen' ); ?>">
	<a class="desiole-floating-contact__link desiole-floating-contact__link--whatsapp" href="<?php echo esc_url( $desiole_contact['whatsapp_url'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Chat with us on WhatsApp', 'desiole-kitchen' ); ?>">
		<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false">
			<path d="M12.04 3.5a8.42 8.42 0 0 0-7.14 12.9l-.86 3.14 3.22-.84A8.42 8.42 0 1 0 12.04 3.5Zm0 1.5a6.92 6.92 0 1 1-3.52 12.88l-.26-.15-1.95.51.52-1.89-.17-.28A6.92 6.92 0 0 1 12.04 5Zm-2.3 3.72c-.15 0-.38.06-.58.28-.2.22-.76.74-.76 1.8s.78 2.09.89 2.23c.11.15 1.53 2.42 3.77 3.29 1.87.73 2.25.58 2.66.55.41-.04 1.32-.54 1.5-1.06.19-.52.19-.97.13-1.06-.05-.09-.2-.15-.41-.26-.22-.11-1.32-.65-1.52-.72-.2-.08-.35-.11-.5.11-.15.22-.57.72-.7.87-.13.15-.26.17-.48.06-.22-.11-.93-.34-1.77-1.09-.65-.58-1.09-1.3-1.22-1.52-.13-.22-.01-.34.1-.45.1-.1.22-.26.33-.39.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.39-.06-.11-.5-1.2-.68-1.64-.18-.43-.36-.37-.5-.38h-.46Z" />
		</svg>
		<span>WhatsApp</span>
	</a>
	<a class="desiole-floating-contact__link desiole-floating-contact__link--contact" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" aria-label="<?php esc_attr_e( 'Contact DESIOLE Kitchen', 'desiole-kitchen' ); ?>">
		<svg aria-hidden="true" viewBox="0 0 24 24" focusable="false">
			<path d="M4.75 5.5h14.5c.96 0 1.75.79 1.75 1.75v9.5c0 .96-.79 1.75-1.75 1.75H4.75A1.76 1.76 0 0 1 3 16.75v-9.5c0-.96.79-1.75 1.75-1.75Zm.18 1.5 6.7 5.02c.22.16.52.16.74 0L19.07 7H4.93Zm14.57 1.46-6.23 4.67a2.12 2.12 0 0 1-2.54 0L4.5 8.46v8.29c0 .14.11.25.25.25h14.5c.14 0 .25-.11.25-.25V8.46Z" />
		</svg>
		<span>Contact</span>
	</a>
</aside>
