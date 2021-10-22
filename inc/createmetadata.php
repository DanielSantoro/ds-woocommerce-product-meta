<?php

add_action('woocommerce_product_options_inventory_product_data', function() {
    woocommerce_wp_checkbox([
            'id' => '_displayInAdditionalInformation',
            'label' => __('Display in the Additional Information Tab?', 'dswcpm'),
    ]);
    woocommerce_wp_text_input([
        	'id' => '_asin',
	        'label' => __('ASIN', 'dswcpm'),
	]);
	woocommerce_wp_text_input([
        	'id' => '_brand',
	        'label' => __('Brand', 'dswcpm'),
	]);
    woocommerce_wp_text_input([
        	'id' => '_ean',
	        'label' => __('EAN', 'dswcpm'),
	]);
    woocommerce_wp_text_input([
        	'id' => '_gtin',
	        'label' => __('GTIN', 'dswcpm'),
	]);
    woocommerce_wp_text_input([
        	'id' => '_isbn',
	        'label' => __('ISBN', 'dswcpm'),
	]);
    woocommerce_wp_text_input([
        	'id' => '_mpn',
	        'label' => __('MPN', 'dswcpm'),
	]);
});

add_action('woocommerce_process_product_meta', function($post_id) {
	$product = wc_get_product($post_id);
    $meta_asin = isset($_POST['_asin']) ? $_POST['_asin'] : '';
	$meta_brand = isset($_POST['_brand']) ? $_POST['_brand'] : '';
    $meta_ean = isset($_POST['_ean']) ? $_POST['_ean'] : '';
    $meta_gtin = isset($_POST['_gtin']) ? $_POST['_gtin'] : '';
    $meta_isbn = isset($_POST['_isbn']) ? $_POST['_isbn'] : '';
    $meta_mpn = isset($_POST['_mpn']) ? $_POST['_mpn'] : '';
    $product->update_meta_data('_asin', sanitize_text_field($meta_asin));
	$product->update_meta_data('_brand', sanitize_text_field($meta_brand));
    $product->update_meta_data('_ean', sanitize_text_field($meta_ean));
    $product->update_meta_data('_gtin', sanitize_text_field($meta_gtin));
    $product->update_meta_data('_isbn', sanitize_text_field($meta_isbn));
    $product->update_meta_data('_mpn', sanitize_text_field($meta_mpn));
	$product->save();
});