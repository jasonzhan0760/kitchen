# WooCommerce Rules

## Catalog Mode

WooCommerce should operate as a B2B catalog and inquiry system, not a direct checkout store.

Required rules:

- Hide prices globally.
- Remove Add to Cart buttons.
- Hide cart and checkout links.
- Product cards should use Inquiry or Request Quote buttons.
- Request Quote button links to `/request-quote/`.
- If possible, pass product name in query parameter:

```text
/request-quote/?product=PRODUCT_NAME
```

## Product Archives

Product archive cards should show:

- Product image
- Product name
- Product category or short B2B descriptor
- Inquiry / Request Quote button

Do not show price, quantity selectors, Add to Cart, cart links, or checkout links.

## Product Detail Pages

Product detail pages should show B2B specifications and a Request Quote CTA instead of purchase actions.

Recommended product information:

- Material
- Size / Capacity
- Color Options
- Logo Options
- Packaging Options
- MOQ
- Sample Lead Time
- Bulk Production Time
- Amazon FBA Support
- Custom Branding

## Request Quote Links

Base link:

```text
/request-quote/
```

Product-aware link:

```text
/request-quote/?product=PRODUCT_NAME
```

## RFQ Email Routing

Public website contact email:

```text
sales@desiole.com
```

Request Quote / RFQ form submissions should be emailed to:

```text
To: sales@desiole.com
CC: stella@desiole.com
```

Subject format:

```text
New DESIOLE Kitchen RFQ - {Product Interest}
```

The RFQ handler should sanitize fields, verify a nonce, validate the customer email, use a honeypot field for basic spam filtering and set Reply-To to the customer email when valid.

## Cart And Checkout

Cart and checkout links should be hidden from navigation and storefront UI. If customers reach cart or checkout directly, redirect them toward the Request Quote flow where possible.

## Admin Editing Rules

Keep product content editable through WooCommerce admin. Catalog mode should be handled by theme hooks and filters, not by hardcoding product data into templates.
