<?php
/**
 * Title: Opener, cover image
 * Slug: osmium/hero-cover
 * Categories: osmium-hero, banner
 * Keywords: hero, cover, image, opener, banner, background
 * Description: A full-screen image under a dark overlay, with a headline, one line of support, and two buttons. For a home or landing page that should open on a picture.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wide-dusk.webp","alt":"","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":70,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-base-color has-text-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:70vh"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wide-dusk.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":1,"textColor":"base","fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-xxx-large-font-size"><?php echo esc_html__( 'Reviews written after a month of daily use', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Everything here sat on my desk for thirty days before I wrote a word about it. The things that did not last that long got the shortest reviews.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Read the latest reviews', 'osmium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline","style":{"border":{"color":"var:preset|color|base"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-border-color wp-element-button" href="#" style="border-color:var(--wp--preset--color--base)"><?php echo esc_html__( 'See how I test', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
