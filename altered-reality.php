<?php
/**
 * Plugin Name:       Altered Reality
 * Plugin URI:        https://sortabrilliant.com/alteredreality
 * Description:       Transform your images into something new with filters.
 * Version:           1.0.2
 * Requires at least: 5.0
 * Requires PHP:      5.6
 * Author:            sorta brilliant
 * Author URI:        https://sortabrilliant.com/
 * License:           GPL-2.0-or-later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package altered-reality
 */

namespace SortaBrilliant\AlteredReality;

const VERSION = '1.0.2';

/**
 * Enqueue block editor assets.
 *
 * @return void
 */
function editor_script() {
	$asset_filepath = __DIR__ . '/build/index.asset.php';
	$asset_file     = file_exists( $asset_filepath ) ? include $asset_filepath : [
		'dependencies' => [],
		'version'      => false,
	];

	wp_enqueue_script(
		'altered-reality',
		plugins_url( 'build/index.js', __FILE__ ),
		$asset_file['dependencies'],
		$asset_file['version']
	);

	add_action( 'in_admin_header', __NAMESPACE__ . '\\render_filters' );
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\editor_script' );

/**
 * Enqueue block styles.
 *
 * @return void
 */
function block_styles() {
	wp_enqueue_style(
		'altered-reality-style',
		plugins_url( 'build/style.css', __FILE__ ),
		[],
		VERSION
	);
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\block_styles' );

/**
 * Render SVG filters, also called in Block Editor.
 * Not the best solution, but only option for now.
 *
 * @see ::editor_script()
 *
 * @return void
 */
function render_filters() {
	require __DIR__ . '/parts/filters.php';
}
add_action( 'wp_footer', __NAMESPACE__ . '\\render_filters' );
