<?php
/**
 * Title: Sidebar, default
 * Slug: osmium/sidebar-default
 * Categories: osmium-sidebar
 * Keywords: sidebar, latest, topics, categories
 * Description: The five newest posts and the topic list. The sidebar the post-with-sidebar and page-with-sidebar templates ship with.
 * Viewport Width: 400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Latest', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":7,"query":{"perPage":5,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"500","letterSpacing":"0","lineHeight":"1.5"}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Topics', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showEmpty":false,"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
