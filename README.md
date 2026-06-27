# DESIOLE Kitchen Project Instructions

## Project Overview

This repository is for the DESIOLE Kitchen website.

Domain: desiolekitchen.com  
Brand: DESIOLE Kitchen  
Positioning: Wholesale Kitchen Tools Supplier In China  
Business type: Factory-style B2B kitchen tools supplier in China  

Key selling points:
- Low MOQ
- Custom logo
- Private label packaging
- OEM/ODM manufacturing
- Amazon FBA support
- Wholesale kitchen tools supply

## Technical Stack

Use:
- WordPress
- Astra Child Theme
- WooCommerce
- WooCommerce Catalog Mode

Do not use:
- Elementor
- Heavy page builders
- Unnecessary animation libraries
- Direct checkout-first eCommerce flow

## Website Style

Style direction:
- Modern red + charcoal B2B kitchenware supplier
- Clean, professional, export-oriented
- Not retail-style
- Not marketplace-style
- Not cheap promotional red style

Brand colors:
- Primary Red: #B5161B
- Deep Red: #8F1015
- Charcoal: #222222
- Warm White: #FFF8F3
- Light Gray: #F5F5F5
- Border Gray: #E5E7EB
- White: #FFFFFF

## Logo Usage

Use three logo versions:
- Header: standard logo, icon + DESIOLE Kitchen
- Footer or large brand area: full logo with tagline “WHOLESALE KITCHEN TOOLS”
- Favicon: red circular D icon

Placeholder paths:
- /assets/images/desiole-kitchen-logo.svg
- /assets/images/desiole-kitchen-logo-full.svg
- /assets/images/desiole-kitchen-icon.svg

## Contact Info

Email: sales@cheungxin.com  
Address: Room 6A, Floor 6, Building 6, Longbi Industrial Zone, Bantian Daipu, Longgang District, Shenzhen, China 518129

## Navigation Structure

Home

Products
- Cooking Tools
- Baking Tools
- Coffee, Bar & Cigar Accessories
- Kitchen Utensils & Gadgets
- Kitchen Organization
- Kitchen Appliances
- Drinkware

Customization
- Custom Logos
- Private Label Packaging
- Custom Colors & Materials
- OEM/ODM Manufacturing
- Low MOQ Customization

Amazon FBA

About Us
- Company Profile
- Factory Tour
- Quality Control
- Blog
- FAQ

Contact

Right-side CTA button:
Request Quote

## URL Structure

/products/
/products/cooking-tools/
/products/baking-tools/
/products/coffee-bar-cigar-accessories/
/products/kitchen-utensils-gadgets/
/products/kitchen-organization/
/products/kitchen-appliances/
/products/drinkware/

/customization/
/customization/custom-logos/
/customization/private-label-packaging/
/customization/custom-colors-materials/
/customization/oem-odm-manufacturing/
/customization/low-moq-customization/

/amazon-fba/
/about-us/company-profile/
/about-us/factory-tour/
/about-us/quality-control/
/blog/
/faq/
/contact/
/request-quote/

## WooCommerce Catalog Mode Rules

- Hide product prices globally.
- Remove Add to Cart buttons.
- Hide cart and checkout links.
- Add Request Quote buttons on product archive cards.
- Add Request Quote button on product detail pages.
- Request Quote buttons should link to /request-quote/.
- If possible, pass product name as a query parameter:
  /request-quote/?product=PRODUCT_NAME

## Product Page Requirements

Product pages should focus on B2B inquiry, not retail checkout.

Recommended product fields:
- Product Name
- Product Category
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
- Request Quote

## Development Rules

- Keep code lightweight.
- Use semantic HTML.
- Use responsive CSS.
- Avoid inline styles unless necessary.
- Keep templates easy to edit.
- Keep text content separated and organized where possible.
- List all changed files after each task.
- Explain what each changed file does.
- Do not remove existing project decisions unless explicitly requested.
