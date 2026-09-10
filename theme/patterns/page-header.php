<?php
/**
 * Title: Page header
 * Slug: osmium/page-header
 * Categories: osmium-hero
 * Keywords: page, header, title, intro, heading
 * Description: A compact title for inner pages, with the page name, one line of context, and a thin rule before the content starts.
 * Viewport Width: 1000
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"bottom":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast-3);border-bottom-style:solid;border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Tools I pay for', 'osmium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php echo esc_html__( 'The software behind this site, what each one costs a year, and what I would cancel first.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
