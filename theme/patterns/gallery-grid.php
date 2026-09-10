<?php
/**
 * Title: Image gallery
 * Slug: osmium/gallery-grid
 * Categories: osmium-content, gallery
 * Keywords: gallery, images, photos, grid, captions
 * Description: Three images in a row with a short caption on each. When you swap in your own photos, give each one alt text as well as a caption.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'From the test bench', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":3,"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/square-teal.webp" alt=""/><figcaption class="wp-element-caption"><?php echo esc_html__( 'The desk, in March', 'osmium' ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/square-sand.webp" alt=""/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Week two of the chair test', 'osmium' ); ?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/square-slate.webp" alt=""/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Notes after thirty days', 'osmium' ); ?></figcaption></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->
