<?php
/**
 * Title: Deal strip
 * Slug: osmium/review-deal-strip
 * Categories: osmium-review
 * Keywords: deal, offer, discount, coupon, sale
 * Description: One live offer. State the deal and the catch in the same breath, and give it an end date so a stale strip is obvious to you before it is obvious to a reader.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"color":"var:preset|color|primary","style":"solid","width":"1px","radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--primary);border-style:solid;border-width:1px;border-radius:12px;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( '40 percent off the first year with code EXAMPLE40.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'The catch: it applies to the annual plan only, and renewal is at full price. Ends 31 December.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="/go/product-name/"><?php echo esc_html__( 'Open the offer', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
