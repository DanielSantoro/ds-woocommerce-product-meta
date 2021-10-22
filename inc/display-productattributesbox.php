<?php

function dswcpm_woocommerce_display_product_attributes($product_attributes, $product){
	$product_attributes['meta_sku'] = [
		'label'	=> __('SKU', 'dswcpm'),
		'value' => get_post_meta($product->get_ID(), '_sku', true),
	];
    $product_attributes['meta_asin'] = [
		'label'	=> __('ASIN', 'dswcpm'),
		'value' => get_post_meta($product->get_ID(), '_asin', true),
	];
    $product_attributes['meta_brand'] = [
		'label'	=> __('Brand', 'dswcpm'),
		'value' => get_post_meta($product->get_ID(), '_brand', true),
	];
    $product_attributes['meta_ean'] = [
		'label'	=> __('EAN', 'dswcpm'),
		'value' => get_post_meta($product->get_ID(), '_ean', true),
	];
    $product_attributes['meta_gtin'] = [
		'label'	=> __('GTIN', 'dswcpm'),
		'value' => get_post_meta($product->get_ID(), '_gtin', true),
	];
    $product_attributes['meta_isbn'] = [
		'label'	=> __('ISBN', 'dswcpm'),
		'value' => get_post_meta($product->get_ID(), '_isbn', true),
	];
    $product_attributes['meta_mpn'] = [
		'label'	=> __('MPN', 'dswcpm'),
		'value' => get_post_meta($product->get_ID(), '_mpn', true),
	];
	return $product_attributes;
}
add_filter('woocommerce_display_product_attributes', 'dswcpm_woocommerce_display_product_attributes', 10, 2);