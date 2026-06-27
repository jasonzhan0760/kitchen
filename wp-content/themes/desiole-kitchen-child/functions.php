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

function desiole_kitchen_image_url( $filename ) {
	$filename = ltrim( (string) $filename, '/' );
	$path     = get_stylesheet_directory() . '/assets/images/' . $filename;

	if ( ! $filename || ! file_exists( $path ) ) {
		return '';
	}

	return get_stylesheet_directory_uri() . '/assets/images/' . $filename;
}

function desiole_kitchen_get_contact_info() {
	return array(
		'public_email'  => 'sales@desiole.com',
		'phone'         => '+86 13760004391',
		'phone_tel'     => 'tel:+8613760004391',
		'whatsapp_url'  => 'https://wa.me/8613760004391',
		'rfq_to'        => 'sales@desiole.com',
		'rfq_cc'        => 'stella@desiole.com',
		'address'       => 'Room 6A, Floor 6, Building 6, Longbi Industrial Zone, Bantian Daipu, Longgang District, Shenzhen, China 518129',
	);
}

function desiole_kitchen_get_product_categories() {
	return array(
		array( 'title' => 'Cooking Tools', 'slug' => 'cooking-tools', 'url' => '/products/cooking-tools/', 'meta' => 'Utensils, pans, prep tools and everyday cooking essentials', 'image' => 'category-cooking-tools.png' ),
		array( 'title' => 'Baking Tools', 'slug' => 'baking-tools', 'url' => '/products/baking-tools/', 'meta' => 'Bakeware, molds, spatulas and decorating tools', 'image' => 'category-baking-tools.png' ),
		array( 'title' => 'Coffee, Bar & Cigar Accessories', 'slug' => 'coffee-bar-cigar-accessories', 'url' => '/products/coffee-bar-cigar-accessories/', 'meta' => 'Coffee tools, barware and premium accessory sourcing', 'image' => 'category-coffee-bar-cigar.png' ),
		array( 'title' => 'Kitchen Utensils & Gadgets', 'slug' => 'kitchen-utensils-gadgets', 'url' => '/products/kitchen-utensils-gadgets/', 'meta' => 'High-demand gadgets with custom logo options', 'image' => 'category-kitchen-utensils-gadgets.png' ),
		array( 'title' => 'Kitchen Organization', 'slug' => 'kitchen-organization', 'url' => '/products/kitchen-organization/', 'meta' => 'Storage, racks, containers and space-saving solutions', 'image' => 'category-kitchen-organization.png' ),
		array( 'title' => 'Kitchen Appliances', 'slug' => 'kitchen-appliances', 'url' => '/products/kitchen-appliances/', 'meta' => 'Compact appliances for wholesale and private label programs', 'image' => 'category-kitchen-appliances.png' ),
		array( 'title' => 'Drinkware', 'slug' => 'drinkware', 'url' => '/products/drinkware/', 'meta' => 'Cups, bottles and daily drinkware for branded supply', 'image' => 'category-drinkware.png' ),
	);
}

function desiole_kitchen_get_product_category_by_slug( $slug ) {
	foreach ( desiole_kitchen_get_product_categories() as $category ) {
		if ( $slug === $category['slug'] ) {
			return $category;
		}
	}

	return null;
}

function desiole_kitchen_get_category_seo_foundation() {
	return array(
		'cooking-tools'                 => array(
			'h1'                 => 'Wholesale Cooking Tools Supplier In China',
			'intro'              => 'Source practical cooking tools for retail, distribution, online stores and private label kitchenware programs.',
			'advantages'         => 'Factory-direct sourcing, low MOQ trial orders and coordinated product ranges for daily cooking needs.',
			'customization'      => 'Logo printing, handle color options, packaging labels and bundled utensil sets can be planned by project.',
			'moq_packaging'      => 'MOQ and packaging depend on material, logo method and selected cooking tool models.',
			'cta'                => 'Send your cooking tools list to confirm MOQ, branding and packaging options.',
			'faq'                => array(
				array( 'q' => 'Can cooking tools be customized with our logo?', 'a' => 'Yes, logo options depend on material, surface and order quantity.' ),
				array( 'q' => 'Can you support utensil set packaging?', 'a' => 'Yes, retail boxes, sleeves, labels and inserts can be coordinated.' ),
				array( 'q' => 'Can we start with low MOQ?', 'a' => 'Low MOQ trial orders are available for selected cooking tools.' ),
			),
		),
		'baking-tools'                  => array(
			'h1'                 => 'Wholesale Baking Tools Supplier In China',
			'intro'              => 'Build bakeware and baking accessory ranges for retailers, baking brands and e-commerce sellers.',
			'advantages'         => 'Support for silicone, metal and accessory product sourcing with export-ready packaging checks.',
			'customization'      => 'Custom colors, logo packaging, retail sets and private label bakeware assortments are available by brief.',
			'moq_packaging'      => 'MOQ varies by mold, material, color and packaging structure.',
			'cta'                => 'Send your baking tools brief for sample, packaging and quotation planning.',
			'faq'                => array(
				array( 'q' => 'Can baking tools use custom colors?', 'a' => 'Yes, custom colors can be prepared when MOQ and material requirements are confirmed.' ),
				array( 'q' => 'Can you package baking sets?', 'a' => 'Yes, set packaging can include boxes, sleeves, labels and inserts.' ),
				array( 'q' => 'Do you support Amazon sellers?', 'a' => 'Yes, FBA labeling and carton preparation can be discussed during RFQ.' ),
			),
		),
		'coffee-bar-cigar-accessories'  => array(
			'h1'                 => 'Wholesale Coffee, Bar & Cigar Accessories Supplier',
			'intro'              => 'Source coffee tools, barware and premium accessories for gift, retail and hospitality channels.',
			'advantages'         => 'Flexible sourcing across accessory ranges with packaging coordination for branded presentation.',
			'customization'      => 'Logo marking, gift boxes, custom sleeves and bundled accessory sets can support brand programs.',
			'moq_packaging'      => 'MOQ depends on product material, finish, logo process and gift packaging scope.',
			'cta'                => 'Share your accessory range and branding needs for a tailored quotation path.',
			'faq'                => array(
				array( 'q' => 'Can accessories be made as gift sets?', 'a' => 'Yes, bundled sets and gift packaging can be planned by project.' ),
				array( 'q' => 'Can metal accessories include logos?', 'a' => 'Yes, marking options depend on surface and material.' ),
				array( 'q' => 'Can you source mixed accessory ranges?', 'a' => 'Yes, mixed ranges can be reviewed for MOQ and packaging feasibility.' ),
			),
		),
		'kitchen-utensils-gadgets'      => array(
			'h1'                 => 'Wholesale Kitchen Utensils & Gadgets Supplier',
			'intro'              => 'Find high-demand kitchen utensils and gadgets for online stores, supermarkets and promotion programs.',
			'advantages'         => 'Broad sourcing coverage, low MOQ options and fast buyer validation for practical kitchen gadgets.',
			'customization'      => 'Custom logo, color, packaging and display-ready formats can be prepared for selected gadgets.',
			'moq_packaging'      => 'MOQ is confirmed by product complexity, mold availability, color and packaging needs.',
			'cta'                => 'Send target gadget references to confirm sourcing feasibility and MOQ.',
			'faq'                => array(
				array( 'q' => 'Can you source new gadget ideas?', 'a' => 'Yes, reference images or links help confirm available models and customization paths.' ),
				array( 'q' => 'Can packaging be retail-ready?', 'a' => 'Yes, retail boxes, hang cards and barcode labels can be coordinated.' ),
				array( 'q' => 'Can gadgets be prepared for FBA?', 'a' => 'Yes, labeling and carton requirements can be included in the quotation.' ),
			),
		),
		'kitchen-organization'          => array(
			'h1'                 => 'Wholesale Kitchen Organization Supplier In China',
			'intro'              => 'Source storage racks, organizers, containers and space-saving kitchen organization products.',
			'advantages'         => 'Support for practical storage ranges with carton planning, packaging checks and wholesale supply.',
			'customization'      => 'Color, label, private packaging and product set combinations can be prepared by buyer requirements.',
			'moq_packaging'      => 'MOQ and packaging depend on size, material, carton volume and shipping requirements.',
			'cta'                => 'Send your kitchen organization product list for MOQ and packaging review.',
			'faq'                => array(
				array( 'q' => 'Can large organizers be packed for export?', 'a' => 'Yes, carton strength and packing method should be confirmed before bulk order.' ),
				array( 'q' => 'Can storage products use private labels?', 'a' => 'Yes, labels, inserts and boxes can be coordinated.' ),
				array( 'q' => 'Can we combine several organizers?', 'a' => 'Mixed sourcing can be reviewed based on MOQ and carton planning.' ),
			),
		),
		'kitchen-appliances'            => array(
			'h1'                 => 'Wholesale Kitchen Appliances Supplier In China',
			'intro'              => 'Source compact kitchen appliances for B2B buyers, private label programs and e-commerce channels.',
			'advantages'         => 'Project review includes product specs, packaging, compliance needs and export preparation.',
			'customization'      => 'Logo, color, packaging and instruction material options can be reviewed by appliance model.',
			'moq_packaging'      => 'MOQ depends on appliance type, certification needs, voltage, plug type and packaging.',
			'cta'                => 'Send appliance specs and target market requirements for quotation planning.',
			'faq'                => array(
				array( 'q' => 'Can appliance packaging be private label?', 'a' => 'Yes, packaging can be reviewed once product model and order scope are confirmed.' ),
				array( 'q' => 'Do appliances need market-specific checks?', 'a' => 'Yes, voltage, plug type and compliance requirements should be confirmed early.' ),
				array( 'q' => 'Can you support sample review?', 'a' => 'Yes, sample timing can be planned after model and requirements are clear.' ),
			),
		),
		'drinkware'                     => array(
			'h1'                 => 'Wholesale Drinkware Supplier In China',
			'intro'              => 'Source cups, bottles and daily drinkware for branded supply, retail programs and online channels.',
			'advantages'         => 'Support for product selection, logo methods, packaging and quality checks for drinkware projects.',
			'customization'      => 'Logo printing, color options, private label packaging and set packaging can be prepared by order scope.',
			'moq_packaging'      => 'MOQ varies by material, color, capacity, logo method and packaging requirements.',
			'cta'                => 'Send drinkware capacity, material and branding requirements to start quotation.',
			'faq'                => array(
				array( 'q' => 'Can drinkware include custom logos?', 'a' => 'Yes, logo methods depend on material, surface and quantity.' ),
				array( 'q' => 'Can packaging be customized?', 'a' => 'Yes, boxes, sleeves, labels and inserts can be coordinated.' ),
				array( 'q' => 'Can drinkware be bundled?', 'a' => 'Yes, set packaging can be planned when item sizes and carton requirements are confirmed.' ),
			),
		),
	);
}

function desiole_kitchen_get_category_foundation_for_current_archive() {
	$object = get_queried_object();

	if ( ! is_product_category() || empty( $object->slug ) ) {
		return null;
	}

	$foundations = desiole_kitchen_get_category_seo_foundation();

	return isset( $foundations[ $object->slug ] ) ? $foundations[ $object->slug ] : null;
}

function desiole_kitchen_get_customization_pages() {
	return array(
		array( 'title' => 'Custom Logos', 'slug' => 'custom-logos', 'url' => '/customization/custom-logos/', 'meta' => 'Logo printing, laser marking, embossing and branded product presentation.', 'image' => 'service-customization-packaging.png' ),
		array( 'title' => 'Private Label Packaging', 'slug' => 'private-label-packaging', 'url' => '/customization/private-label-packaging/', 'meta' => 'Retail boxes, color sleeves, hang tags, inserts and Amazon-ready packaging.', 'image' => 'service-customization-packaging.png' ),
		array( 'title' => 'Custom Colors & Materials', 'slug' => 'custom-colors-materials', 'url' => '/customization/custom-colors-materials/', 'meta' => 'Buyer-led colorways, finish options and material adjustments for selected products.', 'image' => 'service-customization-packaging.png' ),
		array( 'title' => 'OEM/ODM Manufacturing', 'slug' => 'oem-odm-manufacturing', 'url' => '/customization/oem-odm-manufacturing/', 'meta' => 'Product development support from sample review to production and packaging.', 'image' => 'service-warehouse-packaging.png' ),
		array( 'title' => 'Low MOQ Customization', 'slug' => 'low-moq-customization', 'url' => '/customization/low-moq-customization/', 'meta' => 'Practical trial-order customization for new product launches and market tests.', 'image' => 'icons-b2b-benefits.png' ),
	);
}

function desiole_kitchen_get_page_image( $slug ) {
	$images = array(
		'products'                => 'home-hero-kitchen-tools.png',
		'customization'           => 'service-customization-packaging.png',
		'amazon-fba'              => 'service-amazon-fba-prep.png',
		'custom-logos'            => 'service-customization-packaging.png',
		'private-label-packaging' => 'service-customization-packaging.png',
		'custom-colors-materials' => 'service-customization-packaging.png',
		'oem-odm-manufacturing'   => 'service-warehouse-packaging.png',
		'low-moq-customization'   => 'icons-b2b-benefits.png',
		'company-profile'         => 'service-warehouse-packaging.png',
		'factory-tour'            => 'service-warehouse-packaging.png',
		'quality-control'         => 'service-quality-control.png',
		'contact'                 => 'icons-contact-actions.png',
	);

	return isset( $images[ $slug ] ) ? $images[ $slug ] : '';
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
