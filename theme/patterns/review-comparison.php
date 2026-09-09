<?php
/**
 * Title: Comparison table
 * Slug: osmium/review-comparison
 * Categories: osmium-review
 * Keywords: comparison, compare, versus, alternatives, table
 * Description: Several products against the same handful of columns. End with a "best for" column so the table answers the question instead of only listing facts.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'How it compares', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th scope="col"><?php echo esc_html__( 'Product', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Battery', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Noise', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Score', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Best for', 'osmium' ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html__( 'The one you reviewed', 'osmium' ); ?></th><td><?php echo esc_html__( '11 days', 'osmium' ); ?></td><td><?php echo esc_html__( '38 dB', 'osmium' ); ?></td><td><?php echo esc_html__( '4.4', 'osmium' ); ?></td><td><?php echo esc_html__( 'Shared rooms', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'The cheaper alternative', 'osmium' ); ?></th><td><?php echo esc_html__( '6 days', 'osmium' ); ?></td><td><?php echo esc_html__( '46 dB', 'osmium' ); ?></td><td><?php echo esc_html__( '4.0', 'osmium' ); ?></td><td><?php echo esc_html__( 'A first purchase', 'osmium' ); ?></td></tr><tr><th scope="row"><?php echo esc_html__( 'The one people expect you to pick', 'osmium' ); ?></th><td><?php echo esc_html__( 'Wired', 'osmium' ); ?></td><td><?php echo esc_html__( '52 dB', 'osmium' ); ?></td><td><?php echo esc_html__( '3.7', 'osmium' ); ?></td><td><?php echo esc_html__( 'Numbers work', 'osmium' ); ?></td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html__( 'All three tested the same way, in the same room, over the same six weeks.', 'osmium' ); ?></figcaption></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->
