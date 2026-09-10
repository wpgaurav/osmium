<?php
/**
 * Title: Image and text, alternating
 * Slug: osmium/media-text-rows
 * Categories: osmium-content, media
 * Keywords: media, image, text, alternating, feature, zigzag
 * Description: Two image and text rows, the second with the image on the right, each with a heading, a short paragraph, and a link.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'How the work gets done', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:media-text {"mediaType":"image","verticalAlignment":"center"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/landscape-teal.webp" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'A month of daily use comes first', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nothing gets written up until it has been on the desk for four weeks. The notes from that month become the section on what does not work.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Read how testing works', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaPosition":"right","mediaType":"image","verticalAlignment":"center"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center"><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Every number names its conditions', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Battery life, noise, and weight are measured the same way each time, and the method sits right next to the result.', 'osmium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'See the measurement notes', 'osmium' ); ?></a></p>
<!-- /wp:paragraph --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/landscape-sand.webp" alt=""/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
