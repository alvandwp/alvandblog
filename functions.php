<?php
/**
 * Alvand Blog functions and definitions
 *
 * @package Alvand Blog
 */

/**
 * Registering a custom template part area for sidebars.
 *
 * @param array $areas The template part areas.
 */
function alvandwp_template_part_areas( array $areas ) {
	$areas[] = array(
		'area'        => 'sidebar', // Unique identifier for the area.
		'area_tag'    => 'aside',
		'label'       => esc_html__( 'Sidebar', 'alvandblog' ), // Human-readable label.
		'description' => esc_html__( 'A template part area for sidebars.', 'alvandblog' ), // Description of the area.
		'icon'        => 'sidebar',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', 'alvandwp_template_part_areas' );
