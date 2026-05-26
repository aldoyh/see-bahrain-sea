<?php

/**
 * bondigi: Block Patterns
 *
 * @since bondigi 1.0.0
 */

/**
 * Registers pattern categories for bondigi
 *
 * @since bondigi 1.0.0
 *
 * @return void
 */
function bondigi_register_pattern_category()
{
	$block_pattern_categories = array(
		'bondigi' => array('label' => __('Bondigi', 'bondigi')),
	);

	$block_pattern_categories = apply_filters('bondigi_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'bondigi_register_pattern_category', 9);
