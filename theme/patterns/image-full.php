<?php
/**
 * Title: Full-width image
 * Slug: osmium/image-full
 * Categories: osmium-content, media
 * Keywords: image, full width, photo, wide, caption
 * Description: An edge-to-edge image with a short caption under it at reading width. Good between long sections of an essay or a photo story.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wide-sage.webp" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'The desk at the end of a thirty-day test, before anything gets packed away.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
