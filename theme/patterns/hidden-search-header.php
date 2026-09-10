<?php
/**
 * Title: Search results header
 * Slug: osmium/hidden-search-header
 * Inserter: no
 * Description: The search term as the page heading, with a box to search again.
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"},"border":{"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:query-title {"type":"search","level":1,"fontSize":"xx-large"} /-->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Search again', 'osmium' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search again', 'osmium' ); ?>","buttonText":"<?php echo esc_attr__( 'Search', 'osmium' ); ?>","buttonPosition":"button-outside"} /--></div>
<!-- /wp:group -->
