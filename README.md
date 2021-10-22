# WooCommerce Product Meta for XML Feeds
Version: 0.1.0

**This plugin is a work-in-progress.**

**Description:** WooCommerce Product Meta for XML Feeds is designed to tackle the issue here: https://ideas.woocommerce.com/forums/133476-woocommerce/suggestions/19876414-set-gtin-as-a-field-like-next-to-sku. In short, for a store to be successful on platforms like Google and Amazon, in an XML feed created for those sources specific values need to be declared to identify the product. With this plugin, a store owner can fill in the fields on each product.

When fields are filled in, they appear on the "Additional Information" tab of the WooCommerce product page. They behave exactly as Product Metadata, and can be pulled in through an XML Generator.

## Feature List
### Current Features
* Creates fields for the following:
 * ASIN
 * Brand
 * EAN
 * GTIN
 * ISBN
 * MPN
* Displays these values in the "Additional Information" tab on a product listing.

![Frontend](https://github.com/DanielSantoro/ds-woocommerce-product-meta/blob/main/img/fields-on-frontend.png "Frontend Display")

### Planned Features
* Compatibility with Product Variations
* Alternate display locations
  * Display location called through a shortcode
* Check compatibility with existing XML generators
  * This plugin creates the fields so a generator plugin should be able to map a value. Unfortunately those plugins are out of my control, so I'm not sure how they will behave.
 
## Changelog

**Version 0.1.0** - October 22, 2021
* Initial release
