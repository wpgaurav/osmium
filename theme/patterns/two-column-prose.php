<?php
/**
 * Title: Section with a heading beside the text
 * Slug: osmium/two-column-prose
 * Categories: osmium-content
 * Keywords: two column, section, prose, about, explain, split
 * Description: The heading holds one column and the writing holds the other, so a long passage keeps its reading width instead of stretching across the page.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'How this is paid for', 'osmium' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Some links here earn a commission when you buy through them. That never changes a verdict, and the section on what does not work is never shortened for anyone.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'Products are bought at retail unless a review says otherwise, in which case it says so at the top rather than in a line at the bottom that nobody reads.', 'osmium' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
