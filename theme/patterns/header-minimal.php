<?php
/**
 * Title: Header, minimal
 * Slug: osmium/header-minimal
 * Categories: header, osmium-headers
 * Block Types: core/template-part/header
 * Description: Site title on the left and navigation on the right. No search, no border.
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /-->

<!-- wp:navigation {"ariaLabel":"Main","overlayMenu":"mobile","icon":"menu","fontSize":"small","style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"fontWeight":"500"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
