<?php
/**
 * DESIOLE Kitchen child theme functions.
 *
 * @package Desiole_Kitchen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DESIOLE_KITCHEN_VERSION', '1.0.0' );

function desiole_kitchen_get_product_categories() {
	return array(
		array( 'title' => 'Cooking Tools', 'slug' => 'cooking-tools', 'url' => '/products/cooking-tools/', 'meta' => 'Utensils, pans, prep tools and everyday cooking essentials' ),
		array( 'title' => 'Baking Tools', 'slug' => 'baking-tools', 'url' => '/products/baking-tools/', 'meta' => 'Bakeware, molds, spatulas and decorating tools' ),
		array( 'title' => 'Coffee, Bar & Cigar Accessories', 'slug' => 'coffee-bar-cigar-accessories', 'url' => '/products/coffee-bar-cigar-accessories/', 'meta' => 'Coffee tools, barware and premium accessory sourcing' ),
		array( 'title' => 'Kitchen Utensils & Gadgets', 'slug' => 'kitchen-utensils-gadgets', 'url' => '/products/kitchen-utensils-gadgets/', 'meta' => 'High-demand gadgets with custom logo options' ),
		array( 'title' => 'Kitchen Organization', 'slug' => 'kitchen-organization', 'url' => '/products/kitchen-organization/', 'meta' => 'Storage, racks, containers and space-saving solutions' ),
		array( 'title' => 'Kitchen Appliances', 'slug' => 'kitchen-appliances', 'url' => '/products/kitchen-appliances/', 'meta' => 'Compact appliances for wholesale and private label programs' ),
		array( 'title' => 'Drinkware', 'slug' => 'drinkware', 'url' => '/products/drinkware/', 'meta' => 'Cups, bottles and daily drinkware for branded supply' ),
	);
}

function desiole_kitchen_get_customization_pages() {
	return array(
		array( 'title' => 'Custom Logos', 'slug' => 'custom-logos', 'url' => '/customization/custom-logos/', 'meta' => 'Logo printing, laser marking, embossing and branded product presentation.' ),
		array( 'title' => 'Private Label Packaging', 'slug' => 'private-label-packaging', 'url' => '/customization/private-label-packaging/', 'meta' => 'Retail boxes, color sleeves, hang tags, inserts and Amazon-ready packaging.' ),
		array( 'title' => 'Custom Colors & Materials', 'slug' => 'custom-colors-materials', 'url' => '/customization/custom-colors-materials/', 'meta' => 'Buyer-led colorways, finish options and material adjustments for selected products.' ),
		array( 'title' => 'OEM/ODM Manufacturing', 'slug' => 'oem-odm-manufacturing', 'url' => '/customization/oem-odm-manufacturing/', 'meta' => 'Product development support from sample review to production and packaging.' ),
		array( 'title' => 'Low MOQ Customization', 'slug' => 'low-moq-customization', 'url' => '/customization/low-moq-customization/', 'meta' => 'Practical trial-order customization for new product launches and market tests.' ),
	);
}

function desiole_kitchen_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'woocommerce' );

	register_nav_menus(
		array(
			'primary'              => __( 'Primary Menu', 'desiole-kitchen' ),
			'footer_products'      => __( 'Footer Products Menu', 'desiole-kitchen' ),
			'footer_customization' => __( 'Footer Customization Menu', 'desiole-kitchen' ),
			'footer_about'         => __( 'Footer About Menu', 'desiole-kitchen' ),
		)
	);
}
add_action( 'after_setup_theme', 'desiole_kitchen_setup' );

function desiole_kitchen_enqueue_assets() {
	wp_enqueue_style(
		'astra-parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'astra' )->get( 'Version' )
	);

	wp_enqueue_style(
		'desiole-kitchen-home',
		get_stylesheet_directory_uri() . '/assets/css/home.css',
		array( 'astra-parent-style' ),
		DESIOLE_KITCHEN_VERSION
	);

	wp_enqueue_script(
		'desiole-kitchen-navigation',
		get_stylesheet_directory_uri() . '/assets/js/navigation.js',
		array(),
		DESIOLE_KITCHEN_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'desiole_kitchen_enqueue_assets' );

function desiole_kitchen_quote_url( $product = null ) {
	$url = home_url( '/request-quote/' );

	if ( $product instanceof WC_Product ) {
		$url = add_query_arg( 'product', $product->get_name(), $url );
	}

	return esc_url( $url );
}

function desiole_kitchen_nav_fallback() {
	$items = array(
		array( 'label' => 'Home', 'url' => home_url( '/' ) ),
		array(
			'label'    => 'Products',
			'url'      => home_url( '/products/' ),
			'children' => desiole_kitchen_get_product_categories(),
		),
		array(
			'label'    => 'Customization',
			'url'      => home_url( '/customization/' ),
			'children' => desiole_kitchen_get_customization_pages(),
		),
		array( 'label' => 'Amazon FBA', 'url' => home_url( '/amazon-fba/' ) ),
		array(
			'label'    => 'About Us',
			'url'      => home_url( '/about-us/company-profile/' ),
			'children' => array(
				array( 'title' => 'Company Profile', 'url' => '/about-us/company-profile/' ),
				array( 'title' => 'Factory Tour', 'url' => '/about-us/factory-tour/' ),
				array( 'title' => 'Quality Control', 'url' => '/about-us/quality-control/' ),
				array( 'title' => 'Blog', 'url' => '/blog/' ),
				array( 'title' => 'FAQ', 'url' => '/faq/' ),
			),
		),
		array( 'label' => 'Contact', 'url' => home_url( '/contact/' ) ),
	);

	echo '<ul class="desiole-nav-list">';
	foreach ( $items as $item ) {
		printf(
			'<li class="%s"><a href="%s">%s</a>',
			empty( $item['children'] ) ? '' : 'menu-item-has-children',
			esc_url( $item['url'] ),
			esc_html( $item['label'] )
		);

		if ( ! empty( $item['children'] ) ) {
			echo '<ul class="sub-menu">';
			foreach ( $item['children'] as $child ) {
				$child_url = isset( $child['url'] ) && 0 === strpos( $child['url'], 'http' ) ? $child['url'] : home_url( $child['url'] );
				printf(
					'<li><a href="%s">%s</a></li>',
					esc_url( $child_url ),
					esc_html( $child['title'] )
				);
			}
			echo '</ul>';
		}

		echo '</li>';
	}
	echo '</ul>';
}

function desiole_kitchen_footer_menu_fallback( $type ) {
	$menus = array(
		'products'      => wp_list_pluck( desiole_kitchen_get_product_categories(), 'url', 'title' ),
		'customization' => wp_list_pluck( desiole_kitchen_get_customization_pages(), 'url', 'title' ),
		'about'         => array(
			'Company Profile' => '/about-us/company-profile/',
			'Factory Tour'    => '/about-us/factory-tour/',
			'Quality Control' => '/about-us/quality-control/',
			'Blog'            => '/blog/',
			'FAQ'             => '/faq/',
		),
	);

	if ( empty( $menus[ $type ] ) ) {
		return;
	}

	echo '<ul>';
	foreach ( $menus[ $type ] as $label => $path ) {
		printf(
			'<li><a href="%s">%s</a></li>',
			esc_url( home_url( $path ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

function desiole_kitchen_enable_catalog_mode() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

	add_action( 'woocommerce_after_shop_loop_item', 'desiole_kitchen_loop_quote_button', 10 );
	add_action( 'woocommerce_single_product_summary', 'desiole_kitchen_single_quote_button', 30 );
}
add_action( 'wp', 'desiole_kitchen_enable_catalog_mode' );

function desiole_kitchen_hide_prices( $price = '' ) {
	return '';
}
add_filter( 'woocommerce_get_price_html', 'desiole_kitchen_hide_prices', 99 );
add_filter( 'woocommerce_cart_item_price', 'desiole_kitchen_hide_prices', 99 );
add_filter( 'woocommerce_cart_item_subtotal', 'desiole_kitchen_hide_prices', 99 );
add_filter( 'woocommerce_cart_subtotal', 'desiole_kitchen_hide_prices', 99 );
add_filter( 'woocommerce_cart_total', 'desiole_kitchen_hide_prices', 99 );

function desiole_kitchen_disable_purchasing() {
	return false;
}
add_filter( 'woocommerce_is_purchasable', 'desiole_kitchen_disable_purchasing', 99 );
add_filter( 'woocommerce_variation_is_purchasable', 'desiole_kitchen_disable_purchasing', 99 );

function desiole_kitchen_loop_quote_button() {
	global $product;

	if ( ! $product instanceof WC_Product ) {
		return;
	}

	printf(
		'<a class="button desiole-quote-button" href="%s">%s</a>',
		desiole_kitchen_quote_url( $product ),
		esc_html__( 'Request Quote', 'desiole-kitchen' )
	);
}

function desiole_kitchen_single_quote_button() {
	global $product;

	if ( ! $product instanceof WC_Product ) {
		return;
	}

	printf(
		'<p><a class="desiole-button desiole-button-primary" href="%s">%s</a></p>',
		desiole_kitchen_quote_url( $product ),
		esc_html__( 'Request Quote', 'desiole-kitchen' )
	);
}

function desiole_kitchen_remove_cart_checkout_menu_items( $items ) {
	foreach ( $items as $key => $item ) {
		$url = isset( $item->url ) ? strtolower( $item->url ) : '';

		if ( false !== strpos( $url, '/cart' ) || false !== strpos( $url, '/checkout' ) ) {
			unset( $items[ $key ] );
		}
	}

	return $items;
}
add_filter( 'wp_nav_menu_objects', 'desiole_kitchen_remove_cart_checkout_menu_items', 20 );

function desiole_kitchen_redirect_cart_checkout() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	if ( ( function_exists( 'is_cart' ) && is_cart() ) || ( function_exists( 'is_checkout' ) && is_checkout() && ! is_order_received_page() ) ) {
		wp_safe_redirect( home_url( '/request-quote/' ) );
		exit;
	}
}
add_action( 'template_redirect', 'desiole_kitchen_redirect_cart_checkout' );
