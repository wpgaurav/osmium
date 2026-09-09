<?php
/**
 * Title: Reader quotes
 * Slug: osmium/testimonials
 * Categories: osmium-content, testimonials
 * Keywords: testimonials, quotes, readers, social proof, reviews
 * Description: Two short quotes side by side with attribution. Add a photo above each name if you have permission to use one.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"},"border":{"top":{"color":"var:preset|color|contrast-3","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":2,"fontSize":"small","textColor":"contrast-2","style":{"typography":{"fontFamily":"var:preset|font-family|valley-sans","fontWeight":"600","letterSpacing":"0"}}} -->
<h2 class="wp-block-heading has-contrast-2-color has-text-color has-small-font-size" style="font-family:var(--wp--preset--font-family--valley-sans);font-weight:600;letter-spacing:0"><?php echo esc_html__( 'From readers', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"style":{"border":{"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0"}}}} -->
<blockquote class="wp-block-quote" style="border-left-style:none;border-left-width:0px;padding-left:0"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'I bought two things this year because of a limits section, and returned neither. That is the whole review of the reviews.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'Sam Okafor, reader since 2021', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote {"style":{"border":{"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0"}}}} -->
<blockquote class="wp-block-quote" style="border-left-style:none;border-left-width:0px;padding-left:0"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'The only newsletter I read on the day it lands.', 'osmium' ); ?></p>
<!-- /wp:paragraph --><cite><?php echo esc_html__( 'Jordan Lee, runs a two-person studio', 'osmium' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
