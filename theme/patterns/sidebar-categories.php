<?php
/**
 * Title: Sidebar topics
 * Slug: osmium/sidebar-categories
 * Categories: osmium-sidebar
 * Keywords: sidebar, categories, topics, terms, widget
 * Description: Every category that has posts, with a count beside each one. Built on the Terms Query block, so it stays current on its own.
 * Viewport Width: 400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Topics', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:terms-query {"termQuery":{"perPage":12,"taxonomy":"category","order":"asc","orderBy":"name","include":[],"hideEmpty":true,"showNested":false,"inherit":false}} -->
<div class="wp-block-terms-query"><!-- wp:term-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:term-name {"isLink":true,"level":0} /-->

<!-- wp:term-count {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:term-template --></div>
<!-- /wp:terms-query --></div>
<!-- /wp:group -->
