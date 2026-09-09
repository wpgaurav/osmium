<?php
/**
 * Title: Post navigation
 * Slug: osmium/hidden-post-navigation
 * Inserter: no
 * Description: Previous and next post links for the bottom of a single post.
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-font-size" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--50)"><!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_attr__( 'Previous', 'osmium' ); ?>","showTitle":true,"arrow":"none"} /-->

<!-- wp:post-navigation-link {"label":"<?php echo esc_attr__( 'Next', 'osmium' ); ?>","showTitle":true,"arrow":"none"} /--></div>
<!-- /wp:group -->
