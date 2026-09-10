<?php
/**
 * Title: Affiliate disclosure note
 * Slug: osmium/review-disclosure
 * Categories: osmium-review
 * Keywords: affiliate, disclosure, commission, transparency, ftc
 * Description: A plain disclosure note for pages with affiliate links. Put it near the top, before the first link.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"className":"is-style-outlined","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-outlined"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo esc_html__( 'How this page earns money:', 'osmium' ); ?></strong> <?php echo esc_html__( 'Some links here pay a commission when you buy through them, and the price is the same for you. No brand reads a review before it is published, and a commission has never moved a score.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
