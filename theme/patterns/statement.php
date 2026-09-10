<?php
/**
 * Title: Statement
 * Slug: osmium/statement
 * Categories: osmium-content, text
 * Keywords: statement, quote, manifesto, pull quote, big text
 * Description: One sentence set very large with a short attribution under it. Use it to state a rule or a stance between longer sections.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","fontSize":"xx-large","style":{"typography":{"fontFamily":"var:preset|font-family|hedvig-letters-serif","lineHeight":"1.25"}}} -->
<p class="has-text-align-center has-xx-large-font-size" style="font-family:var(--wp--preset--font-family--hedvig-letters-serif);line-height:1.25"><?php echo esc_html__( 'If a product is not worth a month of my time, it is not worth ten minutes of yours.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'The first rule in the house style guide', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
