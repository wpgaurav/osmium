<?php
/**
 * Title: Opener with a wide image
 * Slug: osmium/hero-image-below
 * Categories: osmium-hero, banner
 * Keywords: hero, image, opener, centered, buttons, landing
 * Description: A centered headline, one line of support, and two buttons, with a wide image underneath. For a landing page where the picture should follow the promise.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}},"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php echo esc_html__( 'A newsletter about the business of writing', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'One issue every Tuesday on rates, contracts, and the tools I use to get paid. Read by 9,400 working writers.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Subscribe for free', 'osmium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Read a recent issue', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"border":{"radius":"12px"}}} -->
<figure class="wp-block-image alignwide size-full has-custom-border" style="margin-top:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/landscape-sand.webp" alt="" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
