<?php
/**
 * Title: Header with an open search field
 * Slug: osmium/header-search
 * Categories: header, osmium-headers
 * Block Types: core/template-part/header
 * Description: Search sits in the open rather than behind an icon. For a site with a deep archive, where finding an old post is the main job.
 * Viewport Width: 1400
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"border":{"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":28} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:search {"showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search the archive', 'osmium' ); ?>","width":320,"widthUnit":"px","buttonText":"<?php echo esc_attr__( 'Search', 'osmium' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"9999px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"ariaLabel":"Main","overlayMenu":"mobile","icon":"menu","fontSize":"small","style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"fontWeight":"500"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} /--></div>
<!-- /wp:group -->
