# Implementation Brief

## Current Task

Phase 2.2: RFQ handling, contact update, floating contact icons, mobile dropdown improvements and category SEO foundations.

Phase 1 was reviewed through the logged-in ChatGPT workspace on 2026-06-27. The review result was conditional approval: the direction and core implementation match the agreed plan, but Phase 1 should be self-checked before deeper rollout.

## Inputs

- Root `README.md`
- `docs/decision-log.md`
- `docs/design-system.md`
- `docs/page-structure.md`
- `docs/content-plan.md`
- `docs/woocommerce-rules.md`

## Technical Stack

- WordPress
- Astra Child Theme
- WooCommerce
- WooCommerce Catalog Mode
- No Elementor
- No heavy page builder

## Homepage Direction

The homepage must follow the third selected design:

- Modern B2B red + charcoal style
- Large hero with full kitchen tools product set
- Strong black/red contrast
- Factory-direct data strip under hero
- Product category cards
- Customization, Amazon FBA, and Quality Control service cards
- Featured products section
- FAQ section
- Red CTA band
- Dark professional footer

## Expected Output

Create a child theme at:

```text
wp-content/themes/desiole-kitchen-child/
```

The theme should include:

- Astra child theme metadata
- Lightweight enqueue logic
- Custom header and footer
- Homepage template
- Homepage CSS
- WooCommerce catalog mode hooks
- Product inquiry buttons
- Hero image asset

## Acceptance Criteria

- The result follows root `README.md`.
- The result follows relevant `docs/` files.
- The site remains lightweight.
- Homepage includes the 11 required sections.
- WooCommerce prices and cart/checkout purchase actions are hidden.
- Product inquiry buttons link to `/request-quote/`.
- Product-specific quote links pass the product name when possible.
- Confirmed phone number is displayed where contact information appears.
- Changed files are listed after completion.
- No existing project decisions are removed unless explicitly requested.

## Phase 1 QA Follow-Up

Before or during Phase 2, verify:

- `header.php` includes `wp_head()`, `wp_body_open()`, and `body_class()`.
- `footer.php` includes `wp_footer()`.
- Dynamic output uses WordPress escaping helpers such as `esc_html()`, `esc_url()`, `esc_attr()`, and `wp_kses_post()`.
- Request Quote product links pass product names through the `/request-quote/?product=...` query parameter.
- Desktop and mobile navigation support dropdowns for Products, Customization, and About Us.
- WooCommerce archive and single product pages do not show prices, Add to Cart buttons, quantity selectors, cart links, or checkout links.
- Footer includes public email, confirmed phone number and Shenzhen address.
- Footer uses the confirmed Shenzhen address.
- Hero and product images include meaningful alt text.

## Phase 2 Starter Scope

Build the next B2B site foundations:

- Product category archive experience for the seven final product categories.
- WooCommerce single product B2B inquiry template.
- Request Quote page with secure basic `wp_mail()` RFQ handling.
- Customization landing and service pages.
- Amazon FBA support page.
- About Us core pages: Company Profile, Factory Tour, Quality Control, Blog placeholder, and FAQ.

Phase 2 must keep the third selected design direction: modern B2B red + charcoal style, strong contrast, clean cards, dark footer, and inquiry-first conversion paths.

## Phase 2.1 QA Fix Scope

Phase 2 starter was reviewed through the logged-in ChatGPT workspace on 2026-06-27 after the GitHub repository was made public. The review result was starter foundations conditionally approved. Phase 2.1 fixes should be completed before deeper content expansion.

Phase 2.1 fixes:

- Keep `style.css` as a standard Astra child theme header.
- Replace placeholder `docs/site-plan.md` content with the real DESIOLE Kitchen site plan.
- Add lightweight mobile navigation with a hamburger button, `aria-expanded`, `aria-controls`, usable dropdowns, and a visible Request Quote action.
- Improve product category archives into B2B landing foundations with wholesale advantages, customization options, MOQ / packaging / shipping notes, FAQ and CTA.
- Improve the single product B2B template with gallery support, custom product meta fields, specification fallbacks, related products and Request Quote query links.
- Keep WooCommerce catalog mode active across archive, single product, cart and checkout paths.
- Document pending logo and screenshot assets instead of inventing unapproved brand artwork.

Phase 2.1 still requires visual checking inside a running WordPress install after the theme is activated and WooCommerce sample products are added.

## Open Questions

- Final logo files are still pending.
- Final product images are still pending beyond the generated Phase 1 hero asset.
- A basic `wp_mail()` RFQ implementation exists; a plugin can replace it later if needed.

## Phase 2.2 Scope

Phase 2.2 implements the following confirmed updates:

- Phone number: `+86 13760004391`.
- Clickable phone link: `tel:+8613760004391`.
- Public contact email is `sales@desiole.com`.
- RFQ form submissions send to `sales@desiole.com` and CC `stella@desiole.com`.
- RFQ email subject format: `New DESIOLE Kitchen RFQ - {Product Interest}`.
- Right-side fixed contact icons are added for WhatsApp and Contact.
- WhatsApp link: `https://wa.me/8613760004391`.
- Contact icon links to `/contact/`.
- Mobile dropdowns use independent submenu toggles with `aria-expanded`.
- Product category SEO starter copy exists for all seven categories.
- Homepage factory-direct data strip uses a dark charcoal background with red accent details.

## Phase 2.3 Visual Asset Integration

ChatGPT generated the first visual asset batch for the DESIOLE Kitchen third selected homepage direction. The theme should use those assets without becoming dependent on missing files.

Expected image destination:

```text
wp-content/themes/desiole-kitchen-child/assets/images/
```

Expected filenames:

- `home-hero-kitchen-tools.png`
- `category-cooking-tools.png`
- `category-baking-tools.png`
- `category-coffee-bar-cigar.png`
- `category-kitchen-utensils-gadgets.png`
- `category-kitchen-organization.png`
- `category-kitchen-appliances.png`
- `category-drinkware.png`
- `service-customization-packaging.png`
- `service-amazon-fba-prep.png`
- `service-quality-control.png`
- `service-warehouse-packaging.png`
- `icons-b2b-benefits.png`
- `icons-contact-actions.png`

Implementation rules:

- Category card images use the seven final product category filenames.
- Homepage service cards use customization, Amazon FBA and quality control images.
- Page heroes reuse the closest approved visual asset by page type.
- WooCommerce category archives reuse the same category image mapping.
- Missing files must not create broken images; only render an image when it exists.
- Formal logo SVG, favicon and real SKU images remain pending.

## Phase 2.4 Visual QA Preparation

Phase 2.4 prepares the project for visual review and a real WordPress install check.

Completed preparation:

- Added the WordPress theme preview image at `wp-content/themes/desiole-kitchen-child/screenshot.png`.
- The preview follows the third selected design direction: modern B2B red + charcoal style, strong contrast, product-set hero, factory-direct data strip and product category cards.
- The preview uses the current approved generated product imagery and the text brand `DESIOLE Kitchen`.
- The preview does not invent a formal logo, favicon or final icon system.

Real WordPress visual QA is still required after WordPress, Astra parent theme and WooCommerce are available in a running install.

Phase 2.4 QA should verify:

- Homepage desktop and mobile layout.
- Products archive and seven category archives.
- Single product inquiry template.
- Customization pages.
- Amazon FBA page.
- About Us, Factory Tour, Quality Control, Blog placeholder and FAQ pages.
- Contact and Request Quote pages.
- Mobile navigation dropdown behavior.
- WooCommerce catalog mode: no prices, Add to Cart buttons, cart links or checkout links.
- RFQ form delivery to `sales@desiole.com` with CC to `stella@desiole.com`.
- Public email, phone, WhatsApp and address display.
