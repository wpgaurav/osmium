<?php
/**
 * Title: Review verdict
 * Slug: osmium/review-verdict
 * Categories: osmium-review
 * Keywords: review, verdict, pros, cons, product, rating
 * Description: The verdict box that opens or closes a review. One clear call, what works, what does not, and a link out.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"className":"is-style-tinted","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-tinted"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Verdict', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large","style":{"typography":{"fontFamily":"var:preset|font-family|hedvig-letters-serif","lineHeight":"1.4"}}} -->
<p class="has-large-font-size" style="font-family:var(--wp--preset--font-family--hedvig-letters-serif);line-height:1.4"><?php echo esc_html__( 'Buy it if you draft for hours and share a room. Skip it if you want a numpad.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'What works', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","textColor":"contrast-2"} -->
<ul class="wp-block-list has-contrast-2-color has-text-color has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'The quietest switches I have typed on', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Eleven days of battery in daily use', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Mac and Windows layouts on one switch', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h3 class="wp-block-heading has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'What does not', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"small","textColor":"contrast-2"} -->
<ul class="wp-block-list has-contrast-2-color has-text-color has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'No numpad, and no plan for one', 'osmium' ); ?></li>
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
