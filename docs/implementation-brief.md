# Implementation Brief

## Current Task

Phase 1: Create a lightweight Astra child theme and implement the DESIOLE Kitchen homepage based on the third selected design.

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

## Open Questions

- Final logo files are still pending.
- Final product images are still pending beyond the generated Phase 1 hero asset.
- Final Request Quote form plugin or implementation is not yet selected.

