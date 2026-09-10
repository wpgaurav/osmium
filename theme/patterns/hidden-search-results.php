<?php
/**
 * Title: Search results
 * Slug: osmium/hidden-search-results
 * Inserter: no
 * Description: The search loop: a result count, each match with its excerpt, pagination, and topic links when nothing matches.
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:query-total {"textColor":"contrast-2","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"level":2,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"textColor":"contrast-2"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"textColor":"contrast-2","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-contrast-2-color has-text-color has-small-font-size"><!-- wp:post-terms {"term":"category","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Nothing matched that search. Try a shorter phrase, or one word you remember from the title.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'Browse by topic', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:terms-query {"termQuery":{"perPage":12,"taxonomy":"category","order":"asc","orderBy":"name","include":[],"hideEmpty":true,"showNested":false,"inherit":false}} -->
<div class="wp-block-terms-query"><!-- wp:term-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:term-name {"isLink":true,"level":0,"fontSize":"large"} /-->

<!-- wp:term-count {"textColor":"contrast-2","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:term-template --></div>
<!-- /wp:terms-query --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"small","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
