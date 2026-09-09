<?php
/**
 * Title: Numbers row
 * Slug: osmium/stats-row
 * Categories: osmium-content
 * Keywords: stats, numbers, metrics, proof, figures
 * Description: Three figures with a label under each. Use numbers you can point at a source for, and say what period they cover.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xxx-large","style":{"typography":{"fontFamily":"var:preset|font-family|hedvig-letters-serif","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<p class="has-xxx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20);font-family:var(--wp--preset--font-family--hedvig-letters-serif);line-height:1.1"><?php echo esc_html__( '18', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Years publishing on the web', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xxx-large","style":{"typography":{"fontFamily":"var:preset|font-family|hedvig-letters-serif","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<p class="has-xxx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20);font-family:var(--wp--preset--font-family--hedvig-letters-serif);line-height:1.1"><?php echo esc_html__( '6', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Weeks minimum before anything gets reviewed', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"xxx-large","style":{"typography":{"fontFamily":"var:preset|font-family|hedvig-letters-serif","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<p class="has-xxx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20);font-family:var(--wp--preset--font-family--hedvig-letters-serif);line-height:1.1"><?php echo esc_html__( '0', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"small"} -->
<p class="has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Products sent to me for free', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
