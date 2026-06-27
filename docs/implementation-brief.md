# Implementation Brief

## Current Task

Phase 1: Create a lightweight Astra child theme and implement the DESIOLE Kitchen homepage based on the third selected design.

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
- No phone number is added.
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
- Footer does not include a phone number.
- Footer uses the confirmed Shenzhen address.
- Hero and product images include meaningful alt text.

## Phase 2 Starter Scope

Build the next B2B site foundations:

- Product category archive experience for the seven final product categories.
- WooCommerce single product B2B inquiry template.
- Request Quote page with static RFQ fields until the final form plugin is selected.
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
- Final Request Quote form plugin or implementation is not yet selected.
