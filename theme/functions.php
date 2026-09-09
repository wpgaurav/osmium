<?php
/**
 * Osmium theme functions.
 *
 * Osmium is a block theme. The design lives in theme.json, the layout lives in
 * patterns, and this file does four small jobs: it loads styles, it registers
 * the pattern categories patterns file into, it loads per-block CSS only when a
 * block renders, and it adds the editor stylesheet.
 *
 * Nothing here registers a post type, a block, a shortcode, or a settings page.
 * That is plugin territory and the theme directory rejects it.
 *
 * @package Osmium
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'OSMIUM_VERSION' ) ) {
	$osmium_theme = wp_get_theme( 'osmium' );
	define( 'OSMIUM_VERSION', $osmium_theme->get( 'Version' ) ? $osmium_theme->get( 'Version' ) : '0.1.0' );
}

/**
 * Load the theme stylesheet on the front end.
 *
 * The stylesheet depends on `global-styles` so it always parses after the
 * theme.json output. That order matters: style.css reads preset custom
 * properties that global styles defines.
 *
 * @since 0.1.0
 * @return void
 */
function osmium_enqueue_styles() {
	wp_enqueue_style(
		'osmium-style',
		get_stylesheet_uri(),
		array( 'global-styles' ),
		OSMIUM_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'osmium_enqueue_styles' );

/**
 * Register the editor stylesheet so the editor matches the front end.
 *
 * Block themes are iframed in WordPress 7.1, so editor CSS must arrive through
 * add_editor_style rather than enqueue_block_editor_assets.
 *
 * @since 0.1.0
 * @return void
 */
function osmium_editor_styles() {
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'osmium_editor_styles' );

/**
 * Register the theme's pattern categories.
 *
 * Patterns in /patterns declare these in their `Categories` header. Core
 * categories (header, footer, query, banner, call-to-action) are reused where
 * they already fit, so the list below stays short.
 *
 * @since 0.1.0
 * @return void
 */
function osmium_register_pattern_categories() {
	$categories = array(
		'osmium-pages'   => array(
			'label'       => _x( 'Osmium: Pages', 'Block pattern category', 'osmium' ),
			'description' => __( 'Full page layouts you can drop into a new page and edit.', 'osmium' ),
		),
		'osmium-review'  => array(
			'label'       => _x( 'Osmium: Review kit', 'Block pattern category', 'osmium' ),
			'description' => __( 'Verdicts, pros and cons, comparison tables, and product calls to action.', 'osmium' ),
		),
		'osmium-content' => array(
			'label'       => _x( 'Osmium: Content', 'Block pattern category', 'osmium' ),
			'description' => __( 'Sections for building out a page: heroes, post lists, FAQs, and calls to action.', 'osmium' ),
		),
	);

	foreach ( $categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'osmium_register_pattern_categories' );

/**
 * Make a horizontally scrolling table reachable from the keyboard.
 *
 * A wide table scrolls inside its own box on narrow screens. A region that
 * scrolls but cannot be focused is unreachable without a mouse, which fails
 * WCAG 2.1.1. Adding tabindex puts the box in the tab order; when the table
 * carries a caption, that caption becomes the region's accessible name so a
 * screen reader announces what the box holds.
 *
 * @since 0.1.0
 *
 * @param string $block_content Rendered block HTML.
 * @return string Rendered block HTML with the scroll box made focusable.
 */
function osmium_make_tables_focusable( $block_content ) {
	if ( false === strpos( $block_content, 'wp-block-table' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );

	if ( ! $processor->next_tag( array( 'tag_name' => 'FIGURE' ) ) ) {
		return $block_content;
	}

	$processor->set_attribute( 'tabindex', '0' );

	// Use the caption as the accessible name when the table has one.
	if ( preg_match( '#<figcaption[^>]*>(.*?)</figcaption>#s', $block_content, $caption ) ) {
		$label = trim( wp_strip_all_tags( $caption[1] ) );
		if ( '' !== $label ) {
			$processor->set_attribute( 'role', 'group' );
			$processor->set_attribute( 'aria-label', $label );
		}
	}

	return $processor->get_updated_html();
}
add_filter( 'render_block_core/table', 'osmium_make_tables_focusable' );

/**
 * Attach per-block stylesheets.
 *
 * Each file loads only on pages where its block actually renders, which keeps
 * the first paint small. Add a file to assets/css/blocks and list it here.
 *
 * @since 0.1.0
 * @return void
 */
function osmium_enqueue_block_styles() {
	$blocks = array(
		'core/navigation',
		'core/search',
		'core/comments',
	);

	foreach ( $blocks as $block ) {
		$handle = 'osmium-' . str_replace( '/', '-', $block );
		$file   = 'assets/css/blocks/' . str_replace( 'core/', '', $block ) . '.css';
		$path   = get_theme_file_path( $file );

		if ( ! file_exists( $path ) ) {
			continue;
		}

		wp_enqueue_block_style(
			$block,
			array(
				'handle' => $handle,
				'src'    => get_theme_file_uri( $file ),
				'path'   => $path,
				'ver'    => OSMIUM_VERSION,
			)
		);
	}
}
add_action( 'init', 'osmium_enqueue_block_styles' );
