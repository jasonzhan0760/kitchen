<?php
/**
 * Site header.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$desiole_contact = desiole_kitchen_get_contact_info();
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'desiole-site' ); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'desiole-kitchen' ); ?></a>
<div class="desiole-topbar">
	<div class="desiole-container desiole-topbar-inner">
		<span>Factory-direct kitchen tools supply with low MOQ and export-ready quality control</span>
		<span class="desiole-topbar-contact">
			<a href="mailto:<?php echo esc_attr( $desiole_contact['public_email'] ); ?>"><?php echo esc_html( $desiole_contact['public_email'] ); ?></a>
			<a href="<?php echo esc_url( $desiole_contact['phone_tel'] ); ?>"><?php echo esc_html( $desiole_contact['phone'] ); ?></a>
		</span>
	</div>
</div>
<header class="desiole-header">
	<div class="desiole-container desiole-header-inner">
		<a class="desiole-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'DESIOLE Kitchen home', 'desiole-kitchen' ); ?>">
			<span class="desiole-brand-mark">D</span>
			<span>
				<strong>DESIOLE Kitchen</strong>
				<small>Wholesale Kitchen Tools</small>
			</span>
		</a>
		<button class="desiole-menu-toggle" type="button" aria-expanded="false" aria-controls="desiole-primary-nav">
			<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'desiole-kitchen' ); ?></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
			<span aria-hidden="true"></span>
		</button>
		<nav id="desiole-primary-nav" class="desiole-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'desiole-kitchen' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'desiole-nav-list',
						'fallback_cb'    => false,
					)
				);
			} else {
				desiole_kitchen_nav_fallback();
			}
			?>
			<a class="desiole-button desiole-button-primary desiole-mobile-quote" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request Quote</a>
		</nav>
		<a class="desiole-button desiole-button-primary desiole-header-cta" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request Quote</a>
	</div>
</header>
<main id="content" class="desiole-main">
