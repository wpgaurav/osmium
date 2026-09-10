<?php
/**
 * Title: Single testimonial
 * Slug: osmium/testimonial-large
 * Categories: osmium-content, testimonials
 * Keywords: testimonial, quote, reader, social proof, pull quote
 * Description: One reader quote, set large at reading width with room around it. Use it when a single quote says more than a row of short ones.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"fontSize":"x-large","style":{"typography":{"lineHeight":"1.35"}}} -->
<p class="has-x-large-font-size" style="line-height:1.35"><?php echo esc_html__( 'Every other review told me what to buy. This one told me what would break first, and it did, in week five, exactly as written.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'Rachel Moreno, reader since 2022', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->
