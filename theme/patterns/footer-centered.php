<?php
/**
 * Title: Footer, centered
 * Slug: osmium/footer-centered
 * Categories: footer, osmium-footers
 * Block Types: core/template-part/footer
 * Description: Site name, links, and a credit line stacked down the middle. Suits a personal site with a short menu.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-logo {"width":28} /-->

<!-- wp:site-title {"level":0,"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"align":"wide","ariaLabel":"<?php echo esc_attr__( 'Footer', 'osmium' ); ?>","overlayMenu":"never","fontSize":"small","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} /-->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"small"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-small-font-size"><?php echo esc_html__( 'Built on WordPress with the Osmium block theme.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
