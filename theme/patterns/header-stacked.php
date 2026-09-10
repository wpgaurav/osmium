<?php
/**
 * Title: Header with a notice strip
 * Slug: osmium/header-stacked
 * Categories: header, osmium-headers
 * Block Types: core/template-part/header
 * Description: A dark strip for one announcement above the masthead. Edit or delete the strip when the announcement is over.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-dark" style="border-radius:0px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'New this week: the tools I kept and the ones I sent back.', 'osmium' ); ?> <a href="#"><?php echo esc_html__( 'Read it', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":32} /-->

<!-- wp:site-title {"level":0,"fontSize":"x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"ariaLabel":"<?php echo esc_attr__( 'Main', 'osmium' ); ?>","overlayMenu":"mobile","icon":"menu","fontSize":"small","style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"fontWeight":"500"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
