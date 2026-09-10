<?php
/**
 * Title: Post grid for archives
 * Slug: osmium/hidden-post-grid
 * Inserter: no
 * Description: The main loop as a grid of cards with pagination. Used by the blog index and category archives.
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"8px"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-title {"isLink":true,"level":2,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"showMoreOnNewLine":false,"textColor":"contrast-2","fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"textColor":"contrast-2","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-contrast-2-color has-text-color has-small-font-size"><!-- wp:post-terms {"term":"category","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nothing here yet. Try a search, or head back to the homepage.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"small","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
