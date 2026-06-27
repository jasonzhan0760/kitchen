# Phase 2.4 Visual QA Checklist

Use this checklist after activating the DESIOLE Kitchen child theme in a real WordPress install.

## Required Environment

- WordPress installed and reachable in a browser.
- Astra parent theme installed.
- `DESIOLE Kitchen Child` theme activated.
- WooCommerce installed and activated.
- WooCommerce catalog mode plugin or theme catalog rules active.
- Main navigation menu assigned.
- Footer navigation menu assigned if the WordPress install uses editable footer menus.

## Theme Preview

- Confirm `wp-content/themes/desiole-kitchen-child/screenshot.png` appears in the WordPress theme selector.
- Confirm the preview uses the red + charcoal B2B style, product-set hero, data strip and product category cards.
- Confirm the preview uses the text brand only and does not introduce unapproved logo artwork.

## Homepage

- Top bar shows public contact channels.
- Header navigation shows Home, Products, Customization, Amazon FBA, About Us, Contact and Request Quote.
- Hero uses the approved product-set visual and the H1 `Wholesale Kitchen Tools Supplier In China`.
- Factory-direct data strip appears directly under the hero.
- Product category grid includes all seven final categories.
- Service cards include Customization & Branding, Amazon FBA Preparation and Quality You Can Trust.
- Featured Products section shows inquiry-first buttons.
- FAQ section, red final CTA band and dark footer render correctly.

## WooCommerce Catalog Mode

- Product prices are hidden globally.
- Add to Cart buttons are removed.
- Cart and checkout links are hidden or redirected away from purchase flow.
- Product cards use Inquiry / Request Quote buttons.
- Request Quote links point to `/request-quote/`.
- Product-specific quote links pass the product name as `/request-quote/?product=PRODUCT_NAME`.

## Pages To Check

- `/products/`
- `/products/cooking-tools/`
- `/products/baking-tools/`
- `/products/coffee-bar-cigar-accessories/`
- `/products/kitchen-utensils-gadgets/`
- `/products/kitchen-organization/`
- `/products/kitchen-appliances/`
- `/products/drinkware/`
- `/customization/`
- `/amazon-fba/`
- `/about-us/`
- `/factory-tour/`
- `/quality-control/`
- `/faq/`
- `/contact/`
- `/request-quote/`

## RFQ And Contact

- Public email is `sales@desiole.com`.
- RFQ form sends to `sales@desiole.com`.
- RFQ form CC remains `stella@desiole.com`.
- Mailto links use `mailto:sales@desiole.com`.
- Phone link uses `tel:+8613760004391`.
- WhatsApp floating icon links to `https://wa.me/8613760004391`.
- Address matches the confirmed Shenzhen address.

## Mobile QA

- Mobile menu opens and closes reliably.
- Products, Customization and About Us submenu toggles work independently.
- Request Quote remains easy to reach.
- Hero text, buttons and product image do not overlap.
- Floating contact icons do not cover form fields or footer links.

## Known Pending Assets

- Final logo SVG files are still pending.
- Final favicon / icon artwork is still pending.
- Real SKU-level product photos are still pending.
