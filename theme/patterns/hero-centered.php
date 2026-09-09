<?php
/**
 * Title: Opener, centered
 * Slug: osmium/hero-centered
 * Categories: osmium-hero, banner
 * Keywords: hero, opener, centered, landing, launch
 * Description: A centered statement with one button and one quieter link beside it. For a launch page or anything with a single clear next step.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size"><?php echo esc_html__( 'The honest paragraph is the one readers screenshot.', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'Reviews that say who should skip the thing, not only who should buy it.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Read the latest', 'osmium' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'How I test', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
