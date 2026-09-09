<?php
/**
 * Title: Callout note
 * Slug: osmium/callout
 * Categories: osmium-content
 * Keywords: callout, note, aside, warning, tip, disclosure
 * Description: A short aside inside an article, for a correction, a caveat, or a disclosure that would break the flow if it sat in a paragraph.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"left":{"color":"var:preset|color|primary","style":"solid","width":"3px"},"radius":"0px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="border-left-color:var(--wp--preset--color--primary);border-left-style:solid;border-left-width:3px;border-radius:0px;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html__( 'Worth knowing', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Say the thing a reader would be annoyed to discover later. A caveat, a correction, or how the link below pays for the site.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
