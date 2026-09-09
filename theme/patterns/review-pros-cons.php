<?php
/**
 * Title: Pros and cons
 * Slug: osmium/review-pros-cons
 * Categories: osmium-review
 * Keywords: pros, cons, review, good, bad, tradeoffs
 * Description: Two lists side by side. Keep the cons list honest and roughly as long as the pros; a review with one con reads like an advert.
 * Viewport Width: 900
 *
 * @package Osmium
 * @since 0.1.0
 */

?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'What works', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"textColor":"contrast-2"} -->
<ul class="wp-block-list has-contrast-2-color has-text-color"><!-- wp:list-item -->
<li><?php echo esc_html__( 'The one thing it does better than anything else at this price', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'A number you measured yourself, with the conditions you measured it under', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Something that only shows up after a few weeks of daily use', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'What does not', 'osmium' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"textColor":"contrast-2"} -->
<ul class="wp-block-list has-contrast-2-color has-text-color"><!-- wp:list-item -->
<li><?php echo esc_html__( 'The limitation that would send a specific person to a different product', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'The thing the marketing page does not mention', 'osmium' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'What you gave up to get the item in the left column', 'osmium' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
