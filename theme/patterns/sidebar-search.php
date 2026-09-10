<?php
/**
 * Title: Sidebar search
 * Slug: osmium/sidebar-search
 * Categories: osmium-sidebar
 * Keywords: sidebar, search, find, archive, widget
 * Description: A search field under a visible heading, with the field label kept for screen readers. Sized for a sidebar.
 * Viewport Width: 400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Search', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'osmium' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search the archive', 'osmium' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'osmium' ); ?>"} /--></div>
<!-- /wp:group -->
