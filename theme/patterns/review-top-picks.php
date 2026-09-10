<?php
/**
 * Title: Top picks at a glance
 * Slug: osmium/review-top-picks
 * Categories: osmium-review
 * Keywords: top picks, best, roundup, table, summary
 * Description: A short table near the top of a roundup that answers the question before the reader scrolls. Each row links to its full review.
 * Viewport Width: 1200
 *
 * @package Osmium
 * @since 0.3.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Our top picks', 'osmium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"hasFixedLayout":false} -->
<figure class="wp-block-table"><table><thead><tr><th scope="col"><?php echo esc_html__( 'Pick', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Best for', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Why', 'osmium' ); ?></th><th scope="col"><?php echo esc_html__( 'Full review', 'osmium' ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html__( 'Keychron K3', 'osmium' ); ?></th><td><?php echo esc_html__( 'Most people', 'osmium' ); ?></td><td><?php echo esc_html__( 'Quiet keys and 11 days on a charge', 'osmium' ); ?></td><td><a href="#"><?php echo esc_html__( 'Read the K3 review', 'osmium' ); ?></a></td></tr><tr><th scope="row"><?php echo esc_html__( 'Harbor 75', 'osmium' ); ?></th><td><?php echo esc_html__( 'A tight budget', 'osmium' ); ?></td><td><?php echo esc_html__( 'Costs $59 and types better than it should', 'osmium' ); ?></td><td><a href="#"><?php echo esc_html__( 'Read the Harbor 75 review', 'osmium' ); ?></a></td></tr><tr><th scope="row"><?php echo esc_html__( 'Tessel Split', 'osmium' ); ?></th><td><?php echo esc_html__( 'Sore wrists', 'osmium' ); ?></td><td><?php echo esc_html__( 'Two halves you can set at shoulder width', 'osmium' ); ?></td><td><a href="#"><?php echo esc_html__( 'Read the Tessel Split review', 'osmium' ); ?></a></td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html__( 'Each pick was my main keyboard for at least two weeks. Prices checked on the day of publishing.', 'osmium' ); ?></figcaption></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->
