<?php
/**
 * Title: Category strip
 * Slug: osmium/category-strip
 * Categories: osmium-content, query
 * Keywords: categories, terms, topics, browse, taxonomy
 * Description: A row of category links with post counts, built on the Terms Query block so it stays current on its own.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
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
