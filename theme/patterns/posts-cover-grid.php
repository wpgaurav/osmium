<?php
/**
 * Title: Post cards over images
 * Slug: osmium/posts-cover-grid
 * Categories: osmium-posts, query
 * Block Types: core/query
 * Keywords: posts, cover, grid, featured image, cards, overlay
 * Description: Three recent posts as cards set over their own featured images, with the title and category at the bottom. For posts that have strong photos.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Recent stories', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":30,"query":{"perPage":3,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","minimumColumnWidth":"20rem"}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":22,"minHeightUnit":"rem","contentPosition":"bottom left","style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-base-color has-text-color" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:22rem"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontWeight":"500"}},"textColor":"base","fontSize":"small"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'No posts yet. Publish a few with featured images and they will show up here.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
