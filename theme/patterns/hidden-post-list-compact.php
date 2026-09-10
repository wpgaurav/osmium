<?php
/**
 * Title: Compact post list for archives
 * Slug: osmium/hidden-post-list-compact
 * Inserter: no
 * Description: The main loop as one line per post, date then title, with pagination. Used by tag and date archives.
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-date {"format":"M j, Y","textColor":"contrast-2","fontSize":"small","style":{"layout":{"selfStretch":"fixed","flexSize":"8rem"},"typography":{"lineHeight":"2"}}} /-->

<!-- wp:post-title {"isLink":true,"level":2,"fontSize":"large","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nothing here yet. Try a search, or head back to the homepage.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"small","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
