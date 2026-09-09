<?php
/**
 * Title: Header, centered
 * Slug: osmium/header-centered
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site title on its own line with the navigation centered beneath it.
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"border":{"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":28} /-->

<!-- wp:site-title {"level":0,"fontSize":"x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","icon":"menu","fontSize":"small","style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"fontWeight":"500"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} /--></div>
<!-- /wp:group -->
