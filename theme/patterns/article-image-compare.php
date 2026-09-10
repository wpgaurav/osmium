<?php
/**
 * Title: Before and after images
 * Slug: osmium/article-image-compare
 * Categories: osmium-article
 * Keywords: before and after, compare, images, side by side, gallery
 * Description: Two square images side by side with before and after captions. They stay side by side on phones so the comparison still works.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/square-teal.webp" alt="" style="border-radius:12px"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Before', 'osmium' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/square-sand.webp" alt="" style="border-radius:12px"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'After', 'osmium' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
