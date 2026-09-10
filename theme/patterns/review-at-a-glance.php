<?php
/**
 * Title: Review at a glance
 * Slug: osmium/review-at-a-glance
 * Categories: osmium-review
 * Keywords: summary, glance, price, specs, review
 * Description: The four facts a reader wants before scrolling: who it is for, what it costs, how long it was tested, and where to buy it.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-outlined","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-outlined"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'At a glance', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><tbody><tr><th scope="row"><?php echo esc_html__( 'Best for', 'osmium' ); ?></th><td><?php echo esc_html__( 'Long writing sessions in a shared room', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Price', 'osmium' ); ?></th><td><?php echo esc_html__( '$99 at the time of testing', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Tested for', 'osmium' ); ?></th><td><?php echo esc_html__( 'Six weeks as my only keyboard', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'Where to buy', 'osmium' ); ?></th><td><?php echo esc_html__( 'The maker and most large retailers', 'osmium' ); ?></td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html__( 'Price checked on the day of publishing. It has dropped to $89 twice this year.', 'osmium' ); ?></figcaption></figure>
<!-- /wp:table -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Check the current price', 'osmium' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
