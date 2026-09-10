<?php
/**
 * Title: Four-column post grid
 * Slug: osmium/posts-grid-four
 * Categories: osmium-posts, query
 * Block Types: core/query
 * Keywords: posts, grid, four columns, square, thumbnails, latest
 * Description: Eight recent posts in a grid of square images, titles, and dates. Four across on wide screens, reflowing to fewer as the space narrows.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'More to read', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":27,"query":{"perPage":8,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"border":{"radius":"8px"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontWeight":"500"}},"fontSize":"medium"} /-->

<!-- wp:post-date {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'No posts yet. Publish one and it will show up here.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
