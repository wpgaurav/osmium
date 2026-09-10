<?php
/**
 * Title: Roundup pick
 * Slug: osmium/review-roundup-item
 * Categories: osmium-review
 * Keywords: roundup, best, list, pick, product
 * Description: One entry in a best-of list. The number lives in the heading, followed by an image, the verdict, the trade-offs, and a price link.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( '1. The Keychron K3', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/landscape-slate.webp" alt="" style="border-radius:12px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-lead"} -->
<p class="is-style-lead"><?php echo esc_html__( 'The best keyboard here for most people. It is quiet enough for a shared room, lasts 11 days on a charge, and costs $99.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'What works', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","textColor":"contrast-2"} -->
<ul class="wp-block-list has-contrast-2-color has-text-color has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Quiet keys, 38 dB at 30 cm', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Eleven days on a charge', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'One switch for Mac and Windows', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'What does not', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","textColor":"contrast-2"} -->
<ul class="wp-block-list has-contrast-2-color has-text-color has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'No numpad', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Keycaps start to shine after a month', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'The companion app needs an account', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Check the current price', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
