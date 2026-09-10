<?php
/**
 * Title: Opener, newest post as a cover
 * Slug: osmium/hero-featured-cover
 * Categories: osmium-hero, banner
 * Keywords: hero, cover, latest, featured image, post, opener
 * Description: The newest post shown full width over its own featured image, with its title, excerpt, and date. For a front page that always leads with the latest piece.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:query {"queryId":22,"query":{"perPage":1,"pages":1,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":60,"minHeightUnit":"vh","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-base-color has-text-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"level":1,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"xxx-large"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30,"textColor":"base","fontSize":"large"} /-->

<!-- wp:post-date {"textColor":"base","fontSize":"small"} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'No posts yet. Publish one with a featured image and it will fill this space.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
