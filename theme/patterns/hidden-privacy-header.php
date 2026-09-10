<?php
/**
 * Title: Privacy page header
 * Slug: osmium/hidden-privacy-header
 * Inserter: no
 * Description: The page title with the date the policy last changed.
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":1,"fontSize":"xxx-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"textColor":"contrast-2","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-contrast-2-color has-text-color has-small-font-size"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Last updated', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"modified"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
