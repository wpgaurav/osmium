<?php
/**
 * Title: Homepage for a publication
 * Slug: osmium/page-homepage
 * Categories: osmium-pages
 * Post Types: page
 * Block Types: core/post-content
 * Keywords: homepage, front page, publication, blog, landing
 * Description: A front page that leads with what the site is, then the latest posts and the topics behind them. Assign it the "Page, no title" template so the full-width sections reach the edge.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html__( 'Notes on writing, tools, and the business of publishing.', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'One piece a week from someone who builds the tools he writes about. No sponsors in the body, and a section on what does not work in every review.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"osmium/posts-grid"} /-->

<!-- wp:pattern {"slug":"osmium/category-strip"} /-->

<!-- wp:pattern {"slug":"osmium/author-intro"} /-->

<!-- wp:pattern {"slug":"osmium/cta-band"} /-->
