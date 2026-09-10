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
		'osmium-hero'    => array(
			'label'       => _x( 'Osmium: Openers', 'Block pattern category', 'osmium' ),
			'description' => __( 'The first thing on a page: statements, splits, and signup bands.', 'osmium' ),
		),
		'osmium-content' => array(
			'label'       => _x( 'Osmium: Content', 'Block pattern category', 'osmium' ),
			'description' => __( 'Sections for building out a page: post lists, features, quotes, FAQs, and calls to action.', 'osmium' ),
		),
		'osmium-review'  => array(
			'label'       => _x( 'Osmium: Review kit', 'Block pattern category', 'osmium' ),
			'description' => __( 'Verdicts, pros and cons, comparison tables, and product calls to action.', 'osmium' ),
		),
		'osmium-posts'   => array(
			'label'       => _x( 'Osmium: Post lists', 'Block pattern category', 'osmium' ),
			'description' => __( 'Grids, lists, and magazine layouts that pull in your posts.', 'osmium' ),
		),
		'osmium-article' => array(
			'label'       => _x( 'Osmium: Article kit', 'Block pattern category', 'osmium' ),
			'description' => __( 'Pieces that go inside an article: takeaways, contents, callouts, steps, and asides.', 'osmium' ),
		),
		'osmium-sidebar' => array(
			'label'       => _x( 'Osmium: Sidebar', 'Block pattern category', 'osmium' ),
			'description' => __( 'Compact blocks sized for a sidebar or a narrow column.', 'osmium' ),
		),
		'osmium-starter' => array(
			'label'       => _x( 'Osmium: Post layouts', 'Block pattern category', 'osmium' ),
			'description' => __( 'Starting structures for a new post: reviews, roundups, how-to guides, comparisons, and more.', 'osmium' ),
		),
		'osmium-headers' => array(
			'label'       => _x( 'Osmium: Headers', 'Block pattern category', 'osmium' ),
			'description' => __( 'Site headers you can swap into the header template part.', 'osmium' ),
		),
		'osmium-footers' => array(
			'label'       => _x( 'Osmium: Footers', 'Block pattern category', 'osmium' ),
			'description' => __( 'Site footers you can swap into the footer template part.', 'osmium' ),
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
 * Repair the Navigation block's markup before a menu exists.
 *
 * With no menu assigned, core falls back to a Page List and nests that list's
 * `ul` directly inside the navigation's own `ul`. A `ul` may only contain `li`,
 * so the result is invalid markup that assistive technology reads as a broken
 * list, and it is what every visitor sees on a freshly activated theme.
 * Lifting the inner list items up one level fixes the structure without
 * changing what is on screen.
 *
 * The replacement only fires when that exact nesting is present, so if core
 * changes the fallback this becomes a no-op rather than a new bug.
 *
 * @since 0.1.0
 *
 * @param string $block_content Rendered block HTML.
 * @return string Rendered block HTML with a valid list structure.
 */
function osmium_fix_navigation_fallback_markup( $block_content ) {
	if ( false === strpos( $block_content, 'wp-block-page-list' ) ) {
		return $block_content;
	}

	// Unwrap `<ul class="wp-block-page-list">` when it sits straight inside the
	// navigation container, leaving its list items as the container's children.
	$pattern = '#(<ul[^>]*class="[^"]*wp-block-navigation__container[^"]*"[^>]*>)\s*<ul[^>]*class="[^"]*wp-block-page-list[^"]*"[^>]*>(.*?)</ul>\s*(</ul>)#s';

	return preg_replace( $pattern, '$1$2$3', $block_content, 1 );
}
add_filter( 'render_block_core/navigation', 'osmium_fix_navigation_fallback_markup' );

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
