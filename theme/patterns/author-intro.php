<?php
/**
 * Title: Author introduction
 * Slug: osmium/author-intro
 * Categories: osmium-content, about
 * Keywords: author, about, bio, introduction, byline
 * Description: A short standing introduction for the person behind the site. Drop it under an article or at the top of an about page.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"wide","className":"is-style-tinted","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide is-style-tinted"><!-- wp:image {"width":"72px","height":"72px","scale":"cover","style":{"border":{"radius":"9999px"}}} -->
<figure class="wp-block-image is-resized has-custom-border"><img alt="" style="border-radius:9999px;object-fit:cover;width:72px;height:72px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Who writes this', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php echo esc_html__( 'I build WordPress plugins and write about the tools I actually use. Every review here is paid for out of my own pocket, and the section on what does not work is never skipped.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'More about me', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
